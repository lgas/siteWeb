<?php
/**
 * Created by IntelliJ IDEA.
 * User: Gaël
 * Date: 05/12/2017
 * Time: 15:19
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
    @Route("/lucky/number")
    **/
    public function number()
    {
        $number = mt_rand(0, 100);

        return $this -> render('lucky/number.html.twig', array('number'=>$number,));
    }
}