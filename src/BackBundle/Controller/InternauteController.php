<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class InternauteController extends Controller
{
    /* 
        recupere l'ensemble des enregistrements de 'internaute'
    */
    public function ListAction(){
        $em = $this->getDoctrine()->getManager();

        //recupere de la liste des internautes au travers du repository
        $internautes = $em->getRepository('BackBundle:Internaute')->findAll();

        return $internautes;
    }
}
