<?php

namespace Route;

class Route
{
    /**
     * @var string
     */
    private $uri;

    /**
     * @var string
     */
    private $module;

    /**
     * @var string
     */
    private $controller;

    /**
     * @var string
     */
    private $action;

    /**
     * @var array
     */
    private $params;

    public function __construct()
    {

        $uri = $_SERVER['REQUEST_URI'];
        $this->uri = $uri;

        $explodedUri = explode('/', $this->uri);
        $filteredArray = array_filter($explodedUri);
        $filteredArray = array_values($filteredArray);

        $this->module = (isset($filteredArray[0]) ? ucfirst($filteredArray[0])  : 'Index');
        $this->controller = (isset($filteredArray[0]) ? ucfirst($filteredArray[0]) . 'Controller' : 'IndexController');
        $this->action = (isset($filteredArray[1]) ? ucfirst($filteredArray[1]) . 'Action' : 'IndexAction');

        if (isset($filteredArray[0]))
        {
            unset($filteredArray[0]);
        }

        if (isset($filteredArray[1]))
        {
            unset($filteredArray[1]);
        }

        $this->params = [];
        if (isset($filteredArray[2]))
        {
            $filteredArray = array_values($filteredArray);
            $this->params = $filteredArray;
        }
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }
}