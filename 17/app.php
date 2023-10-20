<?php

$products = [
    [
        'name' => 'product one',
        'base_price' => 15000,
        'warehouse_stock' => 5,
        'discount' => 2000,
        'seller' => 'b shop',
        'date' => date('Y-m-d')
    ],
    [
        'name' => 'product two',
        'base_price' => 24000,
        'warehouse_stock' => 3,
        'discount' => 1500,
        'seller' => 'x shop',
        'date' => date('Y-m-d')
    ],

];


$csvFile = fopen('products.csv', 'w');


$csvHeader = array_keys($products[0]);
fputcsv($csvFile, $csvHeader);


foreach ($products as $product) {
    
    fputcsv($csvFile, $product);
}


fclose($csvFile);
