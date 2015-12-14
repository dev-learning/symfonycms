<?php

namespace Modules\Index;

use Controller\Controller;

class IndexController extends Controller
{

    /**
     * @var Object
     */
    private $model;

    /**
     * load view from parent construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->model = new IndexModel();
    }


    public function IndexAction()
    {
        $this->view->addTemplate('Index/Index');
        $this->view->assign('la', 'haha');
        return $this->view->render();
    }
}