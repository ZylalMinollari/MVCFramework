<?php

namespace app\controllers;

use app\models\User;
use app\core\Request;
use app\core\Aplication;
use app\core\Controller;
use app\core\Response;
use app\models\LoginForm;

/**
 * Summary of AuthController
 * @author ZYLAL
 * @copyright (c) 2022
 */
class AuthController extends Controller
{
    
    public function login(Request $request)
    {
        // $this->setLayout('auth');
        // return $this->render('login');

        $loginForm = new LoginForm();

        if($request->isPost()) {
            $loginForm ->loadData($request->getBody());
            if($loginForm->validate() && $loginForm->login()) {
                //$response->redirect('/');
                Aplication::$app->response->redirect('/');
                return;
            }
        }
        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $this->setLayout('auth');
        $user = new User();
        if ($request->isPost()) {
            $user->loadData($request->getBody());
            if ($user->validate() && $user->save()) {
                // return 'Success';
                Aplication::$app->session->setFlash('success', 'Thank you for registering');
                Aplication::$app->response->redirect('/');
                //return 'Show Success Page'; 
            }

            return $this->render('register', [
                'model' => $user
            ]);
            // return "Hendeling Submited Data";
        }
        return $this->render('register', [
            'model' => $user
        ]);
    }
}