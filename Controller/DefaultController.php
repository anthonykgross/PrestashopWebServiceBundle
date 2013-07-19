<?php

namespace KkuetNet\PrestashopWebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
* @Route("/")
*/
class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    private function indexAction(){
        return array();
    }
}
