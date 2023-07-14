<?php

class Router
{
    protected $controller = 'HomeController'; // Default controller
    protected $action = 'index'; // Default action
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        // Extract the controller, action, and parameters from the URL
        if (isset($url[0]) && !empty($url[0])) {
            $this->controller = ucfirst($url[0]) . 'Controller';
        }
        if (isset($url[1]) && !empty($url[1])) {
            $this->action = $url[1];
        }
        $this->params = array_slice($url, 2);
    }

    public function dispatch()
    {
        // Check if the controller class exists
        if (!class_exists($this->controller)) {
            echo "Controller {$this->controller} not found.";
            return;
        }

        // Create an instance of the controller
        $controller = new $this->controller();

        // Check if the requested action exists
        if (!method_exists($controller, $this->action)) {
            echo "Action {$this->action} not found in {$this->controller}.";
            return;
        }

        // Call the action method with parameters
        call_user_func_array([$controller, $this->action], $this->params);
    }

    protected function parseUrl()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
