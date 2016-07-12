<?php

namespace Etudiant\Base\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    /**
     * home page
     * route : /home
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('BaseBundle:Base:index.html.twig');
    }
}
