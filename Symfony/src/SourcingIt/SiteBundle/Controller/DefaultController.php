<?php

namespace SourcingIt\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SourcingItSiteBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function dashboardAction()
    {
    	return $this->render('SourcingItSiteBundle:Default:dashboard.html.twig');
    }
}
