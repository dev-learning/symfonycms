<?php

namespace Modules\Products;

class ProductsModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * test if productsModelID returns integer value when you isset integer as string
     */
    public function testIfIDIsInteger()
    {
        $productsModel = new ProductsModel();
        $productsModel->setID("5");
        $this->assertInternalType('int', $productsModel->getID());
    }

    /**
     * test if productsModelID returns empty when you don't use setID
     */
    public function testIfIDIsEmpty()
    {
        $productsModel = new ProductsModel();
        $this->assertEquals("", $productsModel->getID());
    }
}