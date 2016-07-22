<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 21.07.2016
 * Time: 16:23
 *
*/

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Controller used to calculate commuting compensations per month for employees and serve it as a csv file.
 *
 * @Route("/commuting-allowance")
 *
 */
class CommutingController extends Controller
{
    /* Compensation values for each transport type */
    const COMP_BIKE = 0.5;
    const COMP_BIKE_5_10 = 1; //Double compensation case
    const COMP_PUBLIC = 0.25; //Bus + Train
    const COMP_CAR = 0.1;
    const PAYMENT_WEEKDAY = 1; //Monday

    /**
     * creates a csv from employee data and serves it
     *
     * @Route("/getCSV")
     * @Method("GET")
     */
    public function getCSV()
    {
        $container = $this->container;
        $response = new StreamedResponse(function() use($container) {

            //Opening handle for output
            $handle = fopen('php://output', 'r+');

            //CSV Titles
            fputcsv($handle, array('Name', 'Transport', 'Traveled Distance','Compensation','Payment Date'),',');
            //Getting Employee data from database (MySQL)
            $employees = $this->getDoctrine()->getRepository('AppBundle:Employee')->findAll();

            //Iterating months from start of the year until recent month
            for($i = 1; $i < date("n"); $i++) {
                $paymentDate = $this->calculatePaymentDate($i);
                $weekDays = $this->getWeekdays($i,date("Y"));

                //Iterating all employees for calculation
                foreach ($employees as $employee) {
                    $traveledDistance = $this->calculateTraveledDistance($employee->getDistance(),$weekDays);
                    $compensation = $this->calculateCompensation($employee->getTransport(), $employee->getDistance(),$weekDays);

                    //Add it to output
                    fputcsv($handle, array($employee->getName(), $employee->getTransport(), $traveledDistance, $compensation, $paymentDate));
                }

            }
            //Close the output handle
            fclose($handle);
        });

        //Send headers for csv file download
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition','attachment; filename="export.csv"');

        return $response;
    }

    /**
     * Returns first day of the month for PAYMENT_WEEKDAY const.
     *
     * @param $month current month to be calculated between 1 and 12
     * @return bool|string full date string of the payment day
     */
    public function calculatePaymentDate($month)
    {
        if($month < 1 || $month > 12 || !is_int($month))
            return false;

        $year = date("Y");
        for($day = 1; $day <= 31; $day++)
        {
            $time = mktime(0, 0, 0, $month+1, $day, $year);
            if (date('N', $time) == CommutingController::PAYMENT_WEEKDAY)
            {
                return date('Y-m-d', $time);
            }
        }

    }

    /**
     * Returns total traveled distance for an entire month
     *
     * @param $distance the distance between work and home
     * @param $weekDays total number of weekdays current month has
     * @return float|int total traveled distance for an entire month
     */

    public function calculateTraveledDistance($distance,$weekDays)
    {
        if(!is_int($weekDays) || !is_int($distance) || $weekDays > 23)
            return false;

        $monthlyDistance = $weekDays * $distance * 2;
        return $monthlyDistance;
    }

    /**
     * returns total monthly compensation according the transport and distance
     *
     * @param $transport the transport which the employee uses to commute
     * @param $distance the distance from work to home.
     * @param $weekDays total number of weekdays current month has
     * @return float|int total monthly compensation
     */
    public function calculateCompensation($transport,$distance,$weekDays)
    {
        if(!is_int($distance) || !is_int($weekDays) || $weekDays > 23 || !in_array($transport,array("Bike","Public","Car")))
            return false;
        //Bus and Train has the same compensation so we call it Public
        if($transport == "Bus" || $transport == "Train")
            $transport = "Public";
        switch($transport)
        {
            case "Bike":
                /*
                in case total distance is between 5-10 km and only the distance portion over 5km until 10km is doubled
                if($distance >= 5 && $distance <= 10)
                    $compensation = (5 * CommutingController::COMP_BIKE) + (($distance - 5) * CommutingController::COMP_BIKE_5_10);
                else if($distance < 5)
                    $compensation = CommutingController::COMP_BIKE * $distance;
                else
                    $compensation = (($distance - 5) * CommutingController::COMP_BIKE) + (5 * CommutingController::COMP_BIKE_5_10);
                break;
                */
                if($distance >= 5 && $distance <= 10)
                    $compensation = $distance * CommutingController::COMP_BIKE_5_10;
                else
                    $compensation = $distance * CommutingController::COMP_BIKE;
                break;
            case "Public":
                $compensation = $distance * CommutingController::COMP_PUBLIC;
                break;
            case "Car":
                $compensation = $distance * CommutingController::COMP_CAR;
                break;
            default:
                $compensation = 0;

        }
        //$compensation is for one way, we should double it and multiply with weekdays to get monthly compensation
        return $compensation * 2 * $weekDays;
    }

    /**
     * returns number of weekdays for current month/year
     *
     * @param $m current month
     * @param $y current year
     * @return int number of weekdays
     *
     */
    public function getWeekdays($m,$y)
    {
        if($m > 12 || $m < 1 || !is_int($m) || !is_int($y))
            return false;
        $lastday = date("t",mktime(0,0,0,$m,1,$y));
        $weekdays=0;
        // we know first 28 days has 20 workdays so we skip that part
        for($d=29;$d<=$lastday;$d++) {
            $wd = date("w",mktime(0,0,0,$m,$d,$y));
            if($wd > 0 && $wd < 6) $weekdays++;
        }
        return $weekdays+20;
    }
}
