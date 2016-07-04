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
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExaminationRepository")
 * @ORM\Table(name="symfony_demo_examinations")
 *
 */
class Examination
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Doctor", inversedBy="examinations")
     * @ORM\JoinColumn(name="doctor_id", referencedColumnName="id")
     */
    private $doctor;

    /**
     * @ORM\ManyToOne(targetEntity="Patient", inversedBy="examinations")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
     */
    private $patient;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="comment.blank")
     * @Assert\Length(
     *     min = "5",
     *     minMessage = "comment.too_short",
     *     max = "10000",
     *     maxMessage = "comment.too_long"
     * )
     */
    private $symptoms;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="comment.blank")
     * @Assert\Length(
     *     min = "5",
     *     minMessage = "comment.too_short",
     *     max = "10000",
     *     maxMessage = "comment.too_long"
     * )
     */
    private $treatment;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime()
     */
    private $examinationDate;

    public function __construct()
    {
       
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSymptoms()
    {
        return $this->symptoms;
    }
    public function setSymptoms($symptoms)
    {
        $this->symptoms = $symptoms;
    }

    public function getTreatment()
    {
        return $this->treatment;
    }
    public function setTreatment($treatment)
    {
        $this->treatment = $treatment;
    }

    public function getExaminationDate()
    {
        return $this->examinationDate->format('Y-m-d H:i:s');
    }
    public function setExaminationDate(\DateTime $examinationDate)
    {
        $this->examinationDate = $examinationDate;
    }

    public function getPatient()
    {
        return $this->patient;
    }
    public function setPatient(Patient $patient)
    {
        $this->patient = $patient;
    }

    public function getDoctor()
    {
        return $this->doctor;
    }
    public function setDoctor(Doctor $doctor)
    {
        $this->doctor = $doctor;
    }
}
