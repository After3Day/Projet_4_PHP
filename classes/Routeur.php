<?php

class Routeur
{
    private $request;
    
    private $routes = [
            "index" => ["controller" => 'Home', "method" => 'showHome'],
            "home" => ["controller" => 'Home', "method" => 'showHome']
            // "home.html" => ["controller" => 'Home', "method" => 'showHome'],
    ];
    
    public function __construct($request)
    {
        $this->request = $request;
    }
    
    public function renderController()
    {
        $request = $this->request;
        
        if(key_exists($request, $this->routes))
        {
            $controller = $this->routes[$request]['controller'];
            $method     = $this->routes[$request]['method'];

            $currentController = new $controller;
            $currentController->$method();
            

        } else  {
            echo '404';
        }
    }
}
