<?php

namespace Bd\ImhotepBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BdImhotepBundle:Default:index.html.twig', array('name' => $name));
    }
}
