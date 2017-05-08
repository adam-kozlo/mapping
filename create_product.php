<?php
require_once "bootstrap.php";


$product = new Product();
$product->setName("nazwa");
$product->setDescription("opis");

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
