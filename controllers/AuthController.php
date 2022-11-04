<?php

namespace app\controllers;

use app\core\{Request, Controller};

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $this->setLayout('auth');

        if ($request->isPost()) {
            return 'Handle submited data';
        }

        return $this->render('login');
    }

    public function register(Request $request)
    {
        $this->setLayout('auth');

        if ($request->isPost()) {
            return 'Handle submited data';
        }

        return $this->render('register');
    }
}