<?php

namespace LogIn\LogInBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LogInController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('LogInLogInBundle:Account')->findAll();

        $res = 'Lista <br/>';



        foreach ($users as $user) {
            $res .= "Usuario =".$user->getUser()." Pass =".$user->getPassword()."<br/>";
        }

        return new Response($res);

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

     public function viewAction($id){
    	$repository = $this->getDoctrine()->getRepository('LogInLogInBundle:Account');
        //$user = $repository->find($id); //esta solo busca por id
        //$user = $repository->findOneByUser($id);
        $user = $repository->findOneByIdUser($id);///ACLARACION... la funcion es finOneBy y a este le agrego el nombre del campo como se ve en el ejemplo ariba



        return new Response('Usuario='.$user->getUser()." Pass =".$user->getPassword()."<br/>");


    }

     public function deleteAction($page){
    	return new Response('mira q capo '.$page);
    }

}
