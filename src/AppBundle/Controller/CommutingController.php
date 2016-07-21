<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 21.07.2016
 * Time: 16:23
 *
*/

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Controller used to manage examinations in the public part of the site.
 *
 * @Route("/commuting-allowance")
 *
 */
class CommutingController extends Controller
{
    /**
     *
     * @Route("/getCSV")
     * @Method("GET")
     */
    public function exportAction()
    {
        $container = $this->container;
        $response = new StreamedResponse(function() use($container) {


            $handle = fopen('php://output', 'r+');

            fputcsv($handle, array('Name', 'Transport', 'Traveled Distance','Compensation','Payment Date'),';');
            $employees = $this->getDoctrine()->getRepository('AppBundle:Employee')->findAll();

            for($i = 1; $i < date("n"); $i++) {
                $paymentDate = $this->calculatePaymentDate($i);
                $weekDays = $this->getWeekdays($i,date("Y"));
                foreach ($employees as $employee) {
                    $traveledDistance = $this->calculateTraveledDistance($employee->getDistance(),$weekDays);
                    $compensation = $this->calculateCompensation($employee->getTransport(), $employee->getDistance(),$weekDays);

                    fputcsv($handle, array($employee->getName(), $employee->getTransport(), $traveledDistance, $compensation, $paymentDate));
                }

            }

            fclose($handle);
        });

        //$response->headers->set('Content-Type', 'application/force-download');
        //$response->headers->set('Content-Disposition','attachment; filename="export.csv"');

        return $response;
    }

    public function calculatePaymentDate($month)
    {
        $year = date("Y");
        for($day = 1; $day <= 31; $day++)
        {
            $time = mktime(0, 0, 0, $month+1, $day, $year);
            if (date('N', $time) == 1)
            {
                return date('Y-m-d', $time);
            }
        }

    }

    public function calculateTraveledDistance($distance,$weekDays)
    {
        $monthlyDistance = $weekDays * $distance * 2;
        return $monthlyDistance;
    }

    public function calculateCompensation($transport,$distance,$weekDays)
    {
        if($transport == "Bus" || $transport == "Train")
            $transport = "Public";
        switch($transport)
        {
            case "Bike":
                if($distance >= 5 && $distance <= 10)
                    $compensation = (5 * 0.5) + (($distance - 5) * 1);
                else if($distance < 5)
                    $compensation = 0.5 * $distance;
                else
                    $compensation = (5 * 0.5) + (5 * 1) + (($distance - 10) * 0.5);
                break;
            case "Public":
                $compensation = $distance * 0.25;
                break;
            case "Car":
                $compensation = $distance * 0.1;
                break;

        }
        return $compensation * 2 * $weekDays;
    }

    public function getWeekdays($m,$y)
    {
        $lastday = date("t",mktime(0,0,0,$m,1,$y));
        $weekdays=0;
        for($d=29;$d<=$lastday;$d++) {
            $wd = date("w",mktime(0,0,0,$m,$d,$y));
            if($wd > 0 && $wd < 6) $weekdays++;
        }
        return $weekdays+20;
    }
}
