<?php

// Definir rotas
$routes = [
    ['GET', '/', 'HomeController@index'],
    ['GET', '/users', 'UserController@index'],
    ['POST', '/users', 'UserController@store'],
    ['GET', '/users/{id}', 'UserController@show'],
    ['PUT', '/users/{id}', 'UserController@update'],
    ['DELETE', '/users/{id}', 'UserController@destroy']
];

// Executar rota correspondente
function dispatch($method, $uri)
{
    global $routes;

    foreach ($routes as $route) {
        list($routeMethod, $routeUri, $action) = $route;

        // Comparar método e URI
        if ($method == $routeMethod && preg_match("#^$routeUri$#", $uri, $matches)) {
            // Obter nome do controlador e método
            list($controllerName, $methodName) = explode('@', $action);

            // Executar método do controlador com argumentos
            $controller = new $controllerName();
            return call_user_func_array([$controller, $methodName], array_slice($matches, 1));
        }
    }

    // Se não houver correspondência de rota, retornar erro 404
    header("HTTP/1.0 404 Not Found");
    echo "404 Not Found";
    exit();
}
