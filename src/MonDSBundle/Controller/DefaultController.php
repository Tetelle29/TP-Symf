<?php

namespace MonDSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MonDSBundle:Default:index.html.twig');
    }

    public function dstp21Action()
    {
        return $this->render('MonDSBundle:Default:dstp21.html.twig');
    }

}
