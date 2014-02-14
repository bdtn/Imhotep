<?php

namespace Bd\ImhotepBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImhotepController extends Controller
{
    public function indexAction()
    {
        return $this->render('BdImhotepBundle:Imhotep:index.html.twig');
    }

    public function menuAction(){
    	return $this->render('BdImhotepBundle:Imhotep:menu.html.twig');	
    }
}
