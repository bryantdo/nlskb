<?php

namespace nls\Bundle\nlsdbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('nlsnlsdbBundle:Default:index.html.twig');
    }
}
