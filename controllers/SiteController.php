<?php

namespace Core;

use Core\Application;
use Core\Controller;
use Core\Request;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            'name' => 'Martin Hanzl'
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
        return "Handling data !!!";
    }
}
