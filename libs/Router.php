<?php

class Router
{
    private $routes;

    function __construct()
    {
        $routersPath = ROOT . '/config/routes.php';
        $this->routes = include($routersPath);
    }

    //Return string
    private function GetUrl()
    {
        if (!empty($_SERVER['REQUEST_URI']))
            return trim($_SERVER['REQUEST_URI'], '/');
    }

    public function run()
    {
        $url = $this->GetUrl();
        foreach ($this->routes as $urlKey => $path) {
            if (preg_match("~$urlKey~", $url)) {
                $internalRoute = preg_replace("~$urlKey~", $path, $url);
                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                else{
                    header('Location: /');
                }
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if ($result != null) {

                    break;
                }
            }
        }
    }
}