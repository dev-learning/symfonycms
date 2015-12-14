<?php

namespace Controller;

use View\View;

class Controller
{
    /**
     * @var View
     */
    public $view;

    public function __construct()
    {
        $this->view = new View();
    }

}