<?php

namespace Modules\Products;

use Model\Model;

class ProductsModel extends Model
{
    /**
     * @var int
     */
    private $ID;

    /**
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     */
    public function setID($ID)
    {
        $this->ID = intval($ID);
    }
}