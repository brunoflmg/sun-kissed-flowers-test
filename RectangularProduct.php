<?php 

include_once 'Product.php';
include_once 'BaseProduct.php';

/**
 * Class for circular products 
 */
class RectangularProduct extends BaseProduct
{
    private $width;
    private $height;
     
    /**
     * Class constructor
     *
     * @param mixed $width Product width
     * @param mixed $width Product height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    
    /**
     * Calc product area
     *
     * @return float
     */
    public function calcArea()
    {
        if ($this->width <= 0 || $this->height <= 0) {
            throw new Exception("Error: This product can not have the width or height less than or equal zero.");
        }

        return $this->width * $this->height;
    }
}
