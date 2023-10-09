<?php


system('clear');


echo "Please Insert Price of Product:" . PHP_EOL;

$price = fgets(STDIN);


echo "Please Insert Discount:" . PHP_EOL;

$discount = fgets(STDIN);

$value = $price - (($discount * $price) / 100);

echo "-------------------" . PHP_EOL;

echo $value;
