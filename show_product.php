<?php 

require_once "bootstrap.php";

$product = $entityManager->find('Product', 2);
echo $product->getName();