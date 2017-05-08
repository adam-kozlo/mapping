<?php
// update_product.php <id> <new-name>
require_once "bootstrap.php";


$product = $entityManager->find('Product', 1);

if ($product === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}

$product->setName("Update");

$entityManager->flush();