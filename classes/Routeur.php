<?php

class Routeur
{
    private $url;   
    private $routes = [
            "index"         => ["controller" => 'Home',             "method" => 'showHome',         "area" => ''],
            "home"          => ["controller" => 'Home',             "method" => 'showHome',         "area" => ''],
            "posts"         => ["controller" => 'Home',             "method" => 'showPosts',        "area" => ''],
            "post"          => ["controller" => 'Home',             "method" => 'showPost',         "area" => ''],
            "loginForm"     => ["controller" => 'Home',             "method" => 'showLogin',        "area" => ''],
            "registerForm"  => ["controller" => 'Home',             "method" => 'showRegistration', "area" => ''],
            "new"           => ["controller" => 'Home',             "method" => 'showEditForm',     "area" => ''],
            "register"      => ["controller" => 'AuthController',   "method" => 'isValid',          "area" => ''],
            "connexion.php" => ["controller" => 'AuthController',   "method" => 'signin',           "area" => ''],
            "logout"        => ["controller" => 'AuthController',   "method" => 'signout',          "area" => ''],
            "comment"       => ["controller" => 'PostController',   "method" => 'createComment',    "area" => 'admin'],
            "create"        => ["controller" => 'PostController',   "method" => 'createArticle',    "area" => 'admin'],
            "edit"          => ["controller" => 'PostController',   "method" => 'editArticle',      "area" => 'admin'],
            "update"        => ["controller" => 'PostController',   "method" => 'updateArticle',    "area" => 'admin'],
            "delete"        => ["controller" => 'PostController',   "method" => 'deleteArticle',    "area" => 'admin']
    ];

    public function __construct($url)
    {
        $this->url = $url;

        $route  = $this->getRoute();
        $params = $this->getParams();

        $request = new Request();

        $request->setRoute($route);
        $request->setParams($params);

        $this->request = $request;
    }


    public function getRoute()
    {
        $elements = explode('/', $this->url);
        return $elements[0];
    }

    public function getParams()
    {
        $params = array();
        // extract GET params
        $elements = explode('/', $this->url);
        unset($elements[0]);
        for($i = 1; $i<count($elements); $i++)
        {
            $params[$elements[$i]] = $elements[$i+1];
            $i++;
        }
        // extract POST params
        if($_POST)
        {
            foreach($_POST as $key => $val)
            {
                $params[$key] = $val;
            }
        }
        return $params;
    }

    public function renderController()
    {
        $request = $this->request;
        
        if(key_exists($request->getRoute(), $this->routes))
        {
            $controller = $this->routes[$request->getRoute()]['controller'];
            $method     = $this->routes[$request->getRoute()]['method'];
            $area       = $this->routes[$request->getRoute()]['area'];
            
            $currentController = new $controller();
            $currentController->$method($request);
            

        } else  {
            echo '404';
        }
    }
}
