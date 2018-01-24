<?php
/**
 * Created by IntelliJ IDEA.
 * User: Gaël
 * Date: 05/12/2017
 * Time: 17:30
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    /**
     * @Route("/")
     */
    public function showIndex() {
        return $this->render('index.html.twig', array());
    }

    /**
     * @Route("/Sophro-relaxation/")
     */
    public function showSophroRelaxation() {
        return $this->render('sophro-relaxologie/sophrorelaxation.html.twig', array());
    }

    /**
     * @Route("/Sophro-relaxation/Techniques utilisees")
     */
    public function showTechniques() {
        return $this->render('sophro-relaxologie/techniques.html.twig', array());
    }

    /**
     * @Route("/Sophro-maternite")
     */
    public function showMater() {
        return $this->render('maternite.html.twig', array());
    }

    /**
     * @Route("/Sophro-enfant")
     */
    public function showEnfant() {
        return $this->render('enfant.html.twig', array());
    }

    /**
     * @Route("/Sophro-famille")
     */
    public function showFamille() {
        return $this->render('famille.html.twig', array());
    }

    /**
     * @Route("/Applications")
     */
    public function showApplicatinos() {
        return $this->render('application.html.twig', array());
    }
}