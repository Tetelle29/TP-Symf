<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }

    public function ipAction(Request $request)
    {
        $ip = $request->getClientIp();
        return $this->render('BackBundle:Default:ip.html.twig', array('ip'=>$ip));
    }

}
