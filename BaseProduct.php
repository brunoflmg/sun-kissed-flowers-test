<?php

include_once 'Product.php';

/**
 * Abstract class for product classes
 *
 * @author Bruno Leite
 */
abstract class BaseProduct implements Product
{
    /**
     * Base price of the products
     *
     * @var float
     */
    protected $basePrice = 2.5;

    /**
     * Calc product area
     *
     * @return float
     */
    public function calcArea()
    {
        return 0;
    }

    /**
     * Get product price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->calcArea() * $this->basePrice;
    }
}
