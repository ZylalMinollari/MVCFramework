<?php

namespace app\core;

use app\core\Aplication;

/**
 * Summary of Controller
 * @author ZYLAL
 * @copyright (c) 2022
 */

class Controller
{
    public string $layout = 'main';
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function render($view, $params = [])
    {
        return Aplication::$app->router->renderView($view, $params);
    }
}
