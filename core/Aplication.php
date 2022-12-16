<?php

namespace app\core;


/**
 * Summary of Aplication
 * @author ZYLAL
 * @copyright (c) 2022
 */

class Aplication
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Aplication $app;
    public Controller $controller;
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);

    }

    public function run()
    {

        echo $this->router->resolve();
    }

    public function getController()
    {
        return $this->controller;
    }
    public function setControler()
    {
        return $this->controller;
    }

}