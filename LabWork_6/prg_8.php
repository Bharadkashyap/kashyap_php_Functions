<?php
$inventory = [
    "Laptop" => 10,
    "Smartphone" => 25,
    "Tablet" => 7,
    "Headphones" => 50
];

function checkInventory($product, $inventory) {
    if (isset($inventory[$product])) {
        return "Stock for {$product}: " . $inventory[$product];
    } else {
        return "Product {$product} not found in inventory.";
    }
}

echo checkInventory("Tablet", $inventory);
echo PHP_EOL;
echo checkInventory("Camera", $inventory);
?>
