<?php 

include_once 'CircularProduct.php';
include_once 'RectangularProduct.php';

$circ = new CircularProduct(10);
$rect = new RectangularProduct(2.5, 5);

echo '

    <h3>Sun Kissed Flowers Test</h3>

    <p>
        Question: Consider we have a store and the price of a product is 
        calculated as  base price ( $2.5 ) * area of the product ( we have
        products with different shapes eg :- circle ,rectangle etc .. )
        <br />
        Please create the classes for the products and display the output.
    </p>

    <p>
        Circle radius: 10 <br />
        Rectangle width: 2.5, height: 5
    </p>

    <p>
        The cost of circular product is U$ '. number_format($circ->getPrice(), 2, '.', ',') .'<br />
        The cost of rectangular product is U$ '.  number_format($rect->getPrice(), 2, '.', ',') .'
    </p>
';
