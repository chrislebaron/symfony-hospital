<?php
/**
 * Created by PhpStorm.
 * User: chrislebaron
 * Date: 6/28/19
 * Time: 4:11 PM
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function redirectToLogin(Request $request) {
        return $this->redirectToRoute('app_login');
    }
}