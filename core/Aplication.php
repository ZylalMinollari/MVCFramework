<?php

namespace app\core;

use PDepend\Application;

/**
 * Summary of Aplication
 * @author ZYLAL
 * @copyright (c) 2022
 */

class Aplication
{
    public static string $ROOT_DIR;
    public Router $router;
    public string $userClass;
    public Request $request;
    public Response $response;
    public Database $db;
    public static Aplication $app;
    public Controller $controller;
    public Session $session;
    public ?DbModel $user;

    public function __construct($rootPath, array $config)
    {
        $this->userClass = $config['userClass'];
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($config['db']);
        $this->session = new Session();

        $userId = Aplication::$app->session->get('user');

        if ($userId) {
            $key = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$key => $userId]);
        } else {
            $this->user = null;
        }
    }

    public static function isGuest()
    {
        return !self::$app->user;
    }

    public function login(DbModel $user)
    {
        $this->user = $user;
        $pimaryKey = $user->primaryKey();
        $value = $user->{$pimaryKey};
        Aplication::$app->session->set('user', $value);
        return true;
    }

    public function logout()
    {
        $this->user = null;
        self::$app->session->remove('user');
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    public function getController()
    {
        return $this->controller;
    }
    public function setController(Controller $controller)
    {
        $this->controller = $controller;
    }
}
