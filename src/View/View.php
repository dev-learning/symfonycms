<?php

namespace View;

use Model\Model;
use Controller\Controller;

class View
{
    /**
     * @var Model
     */
    private $model;

    /**
     * @var Controller
     */
    private $controller;

    public function __construct(Controller $controller)
    {
        $this->model = new Model();
        $this->controller = $controller;
    }
}