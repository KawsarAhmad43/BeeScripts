<?php

require_once 'Product.php';

// Create an instance of Product
$product = new Product(101, 1, 'Smartphone', 599.99, 50);

// Get and print the product information
$productInfo = $product->getProductInfo();

echo "Product Info:<br>";
echo "Product ID: " . $productInfo['product_id'] . "<br>";
echo "Product Name: " . $productInfo['category_info']['title'] . "<br>";  // Product name is retrieved from category title
echo "Category Info:<br>";
echo "Category ID: " . $productInfo['category_info']['id'] . "<br>";
echo "Category Batch ID: " . $productInfo['category_info']['batchId'] . "<br>";
echo "Category isAvailable: " . $productInfo['category_info']['isAvailable'] . "<br>";
echo "Price: $" . $productInfo['price'] . "<br>";
echo "Stock: " . $productInfo['stock'] . "<br>";
