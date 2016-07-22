<?php
/**
 * Created by PhpStorm.
 * User: Ulukut
 * Date: 21.07.2016
 * Time: 16:50
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *  @ORM\Entity
  * @ORM\Table(name="employees")
 *
 */
class Employee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="text")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $transport;

    /**
     * @ORM\Column(type="decimal", precision=10)
     */
    private $distance;

    public function __construct()
    {

    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getTransport()
    {
        return $this->transport;
    }
    public function setTransport($transport)
    {
        $this->transport = $transport;
    }

    public function getDistance()
    {
        return $this->distance;
    }
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

}
