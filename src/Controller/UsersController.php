<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{

    public function login()
    {
        if (isset($this->request->data["login"])) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                
            }
        }
    }

}