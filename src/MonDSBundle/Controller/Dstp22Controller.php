<?php

namespace MonDSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use MonDSBundle\lib\Dstp22;

class Dstp22Controller extends Controller
{
    public function dstp22Action()
    {
        return $this->render('MonDSBundle:Default:dstp22.html.twig');
    }

    public function message22Action($message22)
    {
        return $this->render('MonDSBundle:Default:message22.html.twig', ['message22'=>$message22]);
    }

     public function dstp23Action()
    {
        $nombrealeatoire = rand(15, 85);
        return $this->render('MonDSBundle:Default:dstp23.html.twig', ['nombrealeatoire'=>$nombrealeatoire]);
    }
    

}
