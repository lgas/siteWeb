<?php
/**
 * Created by IntelliJ IDEA.
 * User: Gaël
 * Date: 05/12/2017
 * Time: 17:30
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route("/")
     */
    public function show() {
        return $this->render('index.html.twig', array());
    }
}