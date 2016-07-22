<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 22.07.2016
 * Time: 14:24
 */
// AppBundle/Tests/Controller/CommutingControllerTest3.php
namespace AppBundle\Tests\Controller;

use AppBundle\Controller\CommutingController;

class CommutingControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testCalculatePaymentDate()
    {
        $controller = new CommutingController();

        $result = $controller->calculatePaymentDate(6);
        $this->assertEquals('2016-07-04', $result);

        $result = $controller->calculatePaymentDate(1);
        $this->assertEquals('2016-02-01', $result);

        $result = $controller->calculatePaymentDate(0);
        $this->assertEquals(false, $result);

        $result = $controller->calculatePaymentDate(13);
        $this->assertEquals(false, $result);

        $result = $controller->calculatePaymentDate("");
        $this->assertEquals(false, $result);

    }

    public function testCalculateTraveledDistance()
    {
        $controller = new CommutingController();

        $result = $controller->calculateTraveledDistance(9,22);
        $this->assertEquals(396, $result);

        $result = $controller->calculateTraveledDistance(10,24);
        $this->assertEquals(false, $result);

        $result = $controller->calculateTraveledDistance("","");
        $this->assertEquals(false, $result);
    }

    public function testCalculateCompensation()
    {
        $controller = new CommutingController();

        $result = $controller->calculateCompensation('Bike',11,22);
        $this->assertEquals(242, $result);

        $result = $controller->calculateCompensation('Bike',9,22);
        $this->assertEquals(396, $result);

        $result = $controller->calculateCompensation('Bike',4,22);
        $this->assertEquals(88, $result);

        $result = $controller->calculateCompensation('Bus',10,22);
        $this->assertEquals(110, $result);

        $result = $controller->calculateCompensation('Train',10,22);
        $this->assertEquals(110, $result);

        $result = $controller->calculateCompensation('Car',60,22);
        $this->assertEquals(264, $result);

        $result = $controller->calculateCompensation('Tram',60,22);
        $this->assertEquals(false, $result);

        $result = $controller->calculateCompensation('Bike',"","");
        $this->assertEquals(false, $result);
    }
    public function testGetWeekdays()
    {
        $controller = new CommutingController();

        $result = $controller->getWeekdays(1,2016);
        $this->assertEquals(21, $result);

        $result = $controller->getWeekdays(13,2016);
        $this->assertEquals(false, $result);

        $result = $controller->getWeekdays(0,2016);
        $this->assertEquals(false, $result);

        $result = $controller->getWeekdays("","");
        $this->assertEquals(false, $result);
    }
}