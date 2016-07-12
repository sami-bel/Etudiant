<?php

namespace Etudiant\Api\ModelBundle\Model;

use Etudiant\Api\ModelBundle\Entity\User;
use Etudiant\Api\ModelBundle\Model\BaseModel;
/**
 *
 */
class UserModel extends BaseModel
{
    /**
     * @param User $user
     */
    public function addUser($user){

        $this->em->persist($user);
        $this->em->flush();
    }
    /**
     * @param User $user
     */
    public function updateUser($user){

        $this->em->persist($user);
        $this->em->flush();
    }
    /**
     * @param User $user
     */
    public function deleteUser($user){
        $this->em->remove($user);
        $this->em->flush();
    }

    public function findUser(){
        //TODO: à faire les types de recherche
    }
}