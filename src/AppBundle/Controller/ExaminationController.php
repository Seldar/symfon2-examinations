<?php
/**
 * Created by PhpStorm.
 * User: seldar
 * Date: 1.7.2016
 * Time: 22:48
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Examination;
use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\CommentType;

/**
 * Controller used to manage examinations in the public part of the site.
 *
 * @Route("/examinations")
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class ExaminationController extends Controller
{
    /**
     * @Route("/", defaults={"page": 1}, name="exam_index")
     * @Route("/page/{page}", requirements={"page": "[1-9]\d*"}, name="exam_index_paginated")
     * @Method("GET")
     * @Cache(smaxage="10")
     */
    public function indexAction($page)
    {
        $examinations = $this->getDoctrine()->getRepository(Examination::class)->findLatest($page);
        $doctors = $this->getDoctrine()->getRepository('AppBundle:Doctor')->findAll();
        $patients = $this->getDoctrine()->getRepository('AppBundle:Patient')->findAll();

        return $this->render('examination/index.html.twig', ['examinations' => $examinations, 'doctors' => $doctors, 'patients' => $patients]);
    }

    /**
     *
     * @Route("/api/models/{id}")
     */
    public function apiEntryUpdateAction(Examination $examination)
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();

        $params = array();
        $content = $request->getContent();
        if (!empty($content)) {
            $params = json_decode($content, true); // 2nd param to get as array
        }

        if ($request->getMethod() == 'PUT') {
            if (empty($params['id'])) {
                $errors = array ('errors' => array('id' => array('id can\'t be blank')));
                $response = new Response(json_encode($errors));
                $response->setStatusCode(422);

                return $response;
            }

            //TODO: update entries array
            return new Response();
        }

        if ($request->getMethod() == 'DELETE') {
            $arr = explode("/",$request->getPathInfo());
            $id = array_pop($arr);
            $entityManager = $this->getDoctrine()->getEntityManager();
            $entityManager->remove($examination);
            $entityManager->flush();

            return new Response();
        }
    }
    
    /**
     *
     * @Route("/api/models/")
     */
    public function apiEntriesAction()
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();

        $entries = $this->getDoctrine()->getRepository(Examination::class)->findLatest(1);

        $examinations = [];
        foreach($entries->getCurrentPageResults() as $examination)
        {
            $examinations[] = array(
                "symptoms" => strlen($examination->getSymptoms()) > 45 ? (substr($examination->getSymptoms(),0,45)) . "..." : $examination->getSymptoms(),
                "treatment" => strlen($examination->getTreatment()) > 45 ? (substr($examination->getTreatment(),0,45)) . "..." : $examination->getTreatment(),
                "examinationDate" => $examination->getExaminationDate(),
                "patient" => $examination->getPatient()->getName(),
                "doctor" => $examination->getDoctor()->getName(),
                "id" => $examination->getId()
            );

        }

        if ($request->getMethod() == 'GET') {

            return new Response(json_encode($examinations));
        } else if ($request->getMethod() == 'POST') {
            $params = array();
            $content = $request->getContent();
            if (!empty($content)) {
                $params = json_decode($content, true); // 2nd param to get as array
            }

            $doctor = $this->getDoctrine()->getRepository('AppBundle:Doctor')->findOneById($params['doctor_id']);
            $patient = $this->getDoctrine()->getRepository('AppBundle:Patient')->findOneById($params['patient_id']);
            $examinationDate = $params['examination_date'] . " " . $params['examination_time'] . ":00";

            $examination = new Examination;
            $examination->setSymptoms($params['symptoms']);
            $examination->setTreatment($params['treatment']);
            $examination->setPatient($patient);
            $examination->setDoctor($doctor);
            $examination->setExaminationDate(new \DateTime($examinationDate));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($examination);
            $entityManager->flush();

            $newExamination = array(
                'doctor' => $doctor->getName(),
                'patient' => $patient->getName(),
                'symptoms' => $params['symptoms'],
                'treatment' => $params['treatment'],
                'examinationDate'=> $examinationDate,
                "id" => $examination->getId()
            );
            array_push($examinations, $newExamination);

            return new Response(json_encode($newExamination));
        }

    }
}
