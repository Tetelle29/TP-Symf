<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BackBundle\lib\Test;

class TestController extends Controller
{
    public function test3Action()
    {
        $test3 = new Test;
        return $this->render('BackBundle:Default:test3.html.twig', array('dump'=>var_dump($test3)));
    }
    
    public function test4Action()
    {
        $test4 = new Test;
        $value = $test4->getValue();
        $libelle = $test4->getLibelle();
        $nb = $test4->getNb();
        
        return $this->render('BackBundle:Default:test4.html.twig', array('value'=>$value, 'libelle'=>$libelle, 'nb'=>$nb));
    
    }

    public function tableAction(Request $request)
    {
        for($i = 0; $i < 10; $i ++)
        {
            // Ici faire un tableau qui se remplit des 10 objets.
        }

        return $this->render('BackBundle:Test:values.html.twig', ['libelle'=>$url_libelle, 'value'=>$url_value, 'nb'=>$url_nb]);
    }


    }
