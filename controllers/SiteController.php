<?php

namespace app\controllers;

use app\core\Aplication;
use app\core\Controller;
use app\core\Request;

/**
 * Summary of SiteController
 * @author ZYLAL
 * @copyright (c) 2022
 */
class SiteController extends Controller
{

    public static function handleContact(Request $request)
    {
        $body = $request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        return 'Handle submited data';
    }

    public static function contact()
    {
        //ToDo ToCheck
        // return $this->render('contact');
        return Aplication::$app->router->renderView('contact');
    }

    public static function home()
    {
        $params = [
            "name" => "Zylal",
        ];

        //ToDo ToCheck
        //return $this->render('home',$params);

        return Aplication::$app->router->renderView('home', $params);
    }
}
