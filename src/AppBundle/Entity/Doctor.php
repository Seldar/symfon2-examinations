<?php
/**
 * Created by PhpStorm.
 * User: seldar
 * Date: 1.7.2016
 * Time: 22:13
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="symfony_demo_doctors")
 *
 */
class Doctor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Examination", mappedBy="doctor")
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
    private $speciality;

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
    public function getSpeciality()
    {
        return $this->speciality;
    }
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;
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
