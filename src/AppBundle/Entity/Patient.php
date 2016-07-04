<?php
/**
 * Created by PhpStorm.
 * User: seldar
 * Date: 1.7.2016
 * Time: 22:26
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="symfony_demo_patients")
 *
 */
class Patient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Examination", mappedBy="patient")
     */
    private $examinations;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="doctor.blank")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="doctor.blank")
     */
    private $gender;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="doctor.blank")
     */
    private $age;

    public function __construct()
    {
        //$this->publishedAt = new \DateTime();
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

    public function getGender()
    {
        return $this->gender;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getExaminations()
    {
        return $this->examinations;
    }
    public function setExaminations(Examination $examinations)
    {
        $this->examinations = $examinations;
    }
}
