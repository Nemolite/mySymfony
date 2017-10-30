<?php

namespace Nemo\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NemoTestBundle:Default:index.html.twig');
    }
}
