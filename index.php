<?php
class Product {
    private $name;
    private $stock;
    private $initialStock;

    public function __construct($name, $stock) {
        $this->name = $name;
        $this->stock = $stock;
        $this->initialStock = $stock;
    }

    public function getName() {
        return $this->name;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getInitialStock() {
        return $this->initialStock;
    }

    public function sell($quantity) {
        if ($quantity > $this->stock) {
            echo "<br> $quantity units of $this->name not enough stock to sell.<br>";
            return;
        }
        $this->stock -= $quantity;
    }
    
}



$products = [
    new Product("Laptop", 10),
    new Product("Smartphone", 20),
    new Product("Tablet", 15),
    new Product("Smartwatch", 25),
    new Product("Headphones", 30),
    new Product("Camera", 5),
    new Product("Printer", 10),
    new Product("Monitor", 0)
];



// initial stock
echo "<div class=\"line\">". "Initial Product Details:<br> </div>";

$counter = 1;
foreach ($products as $product) {
    echo "$counter. " . $product->getName() . ", Initial Stock: " . $product->getInitialStock() . "<br>";
    $counter++;
}




$products[0]->sell(3);
$products[1]->sell(5);
$products[2]->sell(2);
$products[3]->sell(10);
$products[4]->sell(15);
$products[5]->sell(4);
$products[6]->sell(6);
$products[7]->sell(3);



// remaining stock
echo "<div class=\"line\"><br>Stock After Selling:<br></div>";

$counter = 1; // Initialize a counter
foreach ($products as $product) {
    echo "$counter. " .  $product->getName() . ", Remaining Stock: " . $product->getStock() . "<br>";
    $counter++; // Increment the counter
}






$totalInitialStock = 0;
$totalRemainingStock = 0;
$totalSold = 0;

foreach ($products as $product) {
    $totalInitialStock += $product->getInitialStock();
    $totalRemainingStock += $product->getStock();
    $totalSold += ($product->getInitialStock() - $product->getStock());
}

echo "<br>Total initial stock of all products: $totalInitialStock<br>";
echo "Total products sold: $totalSold<br>";
echo "Total remaining stock of all products: $totalRemainingStock<br>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management</title>
    <style>
        .line {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
</body>
</html>