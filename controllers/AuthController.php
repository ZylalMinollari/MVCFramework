<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * Summary of AuthController
 * @author ZYLAL
 * @copyright (c) 2022
 */
class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request) 
    {
        $this->setLayout('auth');
        if($request->isPost()) {
            return "Hendeling Submited Data";
        }
        return $this->render('register');
    }
}