<?php

namespace LogIn\LogInBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LogInLogInBundle:Default:index.html.twig',array('name' => $name));
    }
}
