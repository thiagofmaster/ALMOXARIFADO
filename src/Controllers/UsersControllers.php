<?php

namespace Mvc\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Mvc\Controllers\Engine\EnginePlates;



class UsersControllers{

    public function register(Request $request, Response $response, $args){

        $data = ['title' => WEB_TITLE .' Register'];

        $response->getBody()->write(
            EnginePlates::view('register', $data)

        );
        return $response;
    }
}


