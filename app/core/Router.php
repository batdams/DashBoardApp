<?php

namespace App\Router;

class Router
{
    private string $request;

    public function __construct(string $request)
    {
        $this->request = $request;
    }

    public function routing($sessionStatus)
    {
        if ($sessionStatus) {
            switch ($this->request) {
                case '/':
                    require_once 'app/views/mainContents/home.php';
                    break;
                case '/DashBoardApp';
                    require_once 'app/views/mainContents/home.php';
                    break;
                default:
                    require_once 'app/views/mainContents/notFound.php';
            }
        } else {
            switch ($this->request) {
                case '/':
                    require_once 'app/views/mainContents/authentification.php';
                    break;
                case '/DashBoardApp';
                    require_once 'app/views/mainContents/authentification.php';
                    break;
                default:
                    require_once 'app/views/mainContents/notFound.php';
            }
        }
    }
}