<?php

namespace SISCABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SISCABundle:Default:index.html.twig');
    }
}
