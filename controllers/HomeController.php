<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class HomeController
{
    function home(Request $request, Response $response, $args)
    {
        $view = new Home();
        $view->setData(['h1' => 'home']);
        $response->getBody()->write($view->render());
        return $response;
    }
}
