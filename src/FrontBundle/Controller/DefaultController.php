<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
   
    public function indexAction()
    {
        return $this->render('FrontBundle:Default:index.html.twig');
    }

     public function testAction()
    {
        return $this->render('FrontBundle:Default:test.html.twig');
    }

    public function urlMessageAction($message_url)
    {
        return $this->render('FrontBundle:Default:url_message.html.twig', ['message'=>$message_url]);
    }

    public function numeroAction($numero)
    {
        return $this->render('FrontBundle:Default:numero.html.twig', ['numero'=>$numero]);
    }

    public function texteAction($texte)
    {
        return $this->render('FrontBundle:Default:texte.html.twig', ['texte'=>$texte]);
    }

    public function mavariableAction($mavariable)
    {
        $mavariable = strtoupper($mavariable);
        return $this->render('FrontBundle:Default:dstp13.html.twig', ['mavariable'=>$mavariable]);
    }


}
