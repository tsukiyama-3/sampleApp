<?php

namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController
{

    public function index()
    {
        $text = 'Hello World!!!!';
        $this->set(compact('text'));
    }

}