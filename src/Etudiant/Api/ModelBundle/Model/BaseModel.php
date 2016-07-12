<?php

namespace Etudiant\Api\ModelBundle\Model;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Doctrine\ORM\EntityManager as EM;

/**
*
*/
abstract class BaseModel
{
    /**
     * @var Container $container
     */
    protected $container;

    /**
     * @var EM $em
     */
    protected $em;

    /**
     * @param Container $container
     * @param EM $em
     */
    public function _construct($container, $em)
    {
        $this->container = $container;
        $this->em        = $em;
    }

}