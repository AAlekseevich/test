<?php

$products = [
    [
        "name" => "X-Box One",
        "price" => 450000.00,
        "amount" => 15
    ],
    [
        "name" => "IPhone X",
        "price" => 560000.00,
        "amount" => 6
    ],


];

function my_function($products)
{
    foreach ($products as $key => $value) {
        $products[$key]['shipping_cost'] = ($products[$key]['price']/100)*2;
    }
    return $products;
}
$products = my_function($products);

var_dump($products);