<?php

namespace App\Core;


class Router
{
   
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    
    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

  
    public function direct($uri, $requestType)
    {       
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
            
        }
          echo "ruta nije definisana";
      
    }

   
    protected function callAction($controller, $action)  //goal this method is calling method that is located in controller
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
           echo 'nema metode';
        }

        return $controller->$action();
    }
}
                
