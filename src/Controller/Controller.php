<?php

namespace Controller;

use Model\Model;

class Controller
{
    /**
     * @var Model
     */
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }
}