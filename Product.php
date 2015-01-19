<?php

/**
 * Inteface for products classes
 */
interface Product
{
    /**
     * Calculate the product area
     */
    public function calcArea();

    /**
     * Get the product price
     */
    public function getPrice();
}
