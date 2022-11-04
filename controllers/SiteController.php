<?php

namespace app\controllers;

use app\core\{Request, Controller};

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            'name' => 'Some app name'
        ];

        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();

        return $body;
    }
}