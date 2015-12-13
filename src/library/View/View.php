<?php

namespace View;

use Model\Model;
use Controller\Controller;

class View
{
    private $model;
    private $controller;

    public function __construct()
    {
        $this->model = new Model();
        $this->controller = new Controller();
    }
}