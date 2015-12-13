<?php

namespace Controller;

use Model\Model;

class Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }
}