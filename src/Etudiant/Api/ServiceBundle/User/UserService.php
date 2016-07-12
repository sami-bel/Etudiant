<?php
/**
 * Created by PhpStorm.
 * User: sami
 * Date: 12/07/2016
 * Time: 23:29
 */

namespace Etudiant\Api\ServiceBundle\User;


use Etudiant\Api\ModelBundle\Entity\User;
use Symfony\Component\Config\Definition\Exception\Exception;

class UserService extends BaseService
{

    public function register(User $user){

        if($this->validateUser($user)){
            $userService = $this->container->get('user_model');
            try {
                $userService->addUser($user);
                return 'OK';
            } catch (Exception $e){
                error_log($e->getMessage());
            }
        }
        return $this->validateUser($user);
    }


    public function validateUser( User $user)
    {
        $validator = $this->container->get('validator');
        $errors    = $validator->validate($user);
        if (count($errors) > 0) {
            $errorsString = (string)$errors;
            return $errorsString;
        }
        return true;
    }
}