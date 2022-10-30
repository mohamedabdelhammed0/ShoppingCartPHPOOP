<?php

require_once 'autoload.php';



$c = new Cart();
$p = new Product(1,'IPHONE',150.55,5);
$c->addProduct($p,6);// more than available
$c->addProduct($p,2);
$p2 = new Product(2,'XIAOMI ',250.75,10);
$c->printProducts();
$p2->addToCart($c,10);
$c->printProducts();
$c->getTotalProducts() ;
$c->getTotalSum();
$c->getTotalQuantity();
