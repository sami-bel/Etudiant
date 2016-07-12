<?php
/**
 * Created by PhpStorm.
 * User: sami
 * Date: 12/07/2016
 * Time: 23:29
 */

namespace Etudiant\Api\ServiceBundle\User;


use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Doctrine\ORM\EntityManager as EM;

class BaseService
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