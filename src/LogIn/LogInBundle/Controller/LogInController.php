<?php

namespace LogIn\LogInBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LogInController extends Controller
{
    public function indexAction()
    {
        return new Response('Bienvenido al LogIn');
    }

    /*public function pruebaAction($page){
    	return new Response('mira q capo '.$page);
    }*/

     public function addAction($page){
    	return new Response('mira q capo '.$page);
    }

     public function editAction($page){
    	return new Response('mira q capo '.$page);
    }

     public function viewAction($page){
    	return new Response('mira q capo '.$page);
    }

     public function deleteAction($page){
    	return new Response('mira q capo '.$page);
    }

}
