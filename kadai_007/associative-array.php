<?php

$product = [
    "name" => "onion",
    "price" => 200,
    "weight" => 160
];

echo 'Array(';
foreach ($product as $key => $value) {
    echo "[$key] => $value ";
}
echo ')';
?>
