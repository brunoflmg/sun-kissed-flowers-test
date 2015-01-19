<?php

include_once 'Product.php';
include_once 'BaseProduct.php';

/**
 * Class for circular products 
 */
class CircularProduct extends BaseProduct
{
    /**
     * Circle radius
     *
     * @var float
     */
    private $radius;
   
    /**
     * Class constructor
     *
     * @param mixed $radius Product radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
  
    /**
     * Calc product area
     *
     * @return float
     */
    public function calcArea()
    {
        if ($this->radius <= 0) {
            throw new Exception("Error: This product can not have a radius less than or equal zero.");
        }

        return $this->radius * $this->radius * pi();
    }
}
