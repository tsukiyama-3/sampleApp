<?php

namespace App\Controller;

use App\Controller\AppController;


class UsersController extends AppController
{
    public function login()
    {
        
    }

    public function signup()
    {
        $this->storeUser();
    }

    public function storeUser()
    {
        if (!$this->request->is('post')) {
            return false;
        }
        $this->loadModel('Users');
        $requestData = $this->request->getData();
        $newEntity = $this->Users->newEmptyEntity();
        $newEntity->email = $requestData['email'];
        $newEntity->password = $requestData['password'];
        if ($this->Users->save($newEntity)) {
            $this->Flash->success("登録に成功しました。");

            return $this->redirect(['action' => 'login']);
        }
    }

}