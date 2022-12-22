<?php
require_once 'ShopProduct.php';
require_once 'CDProduct.php';
require_once 'BookProduct.php';
require_once 'ShopProductWriter.php';

$product1 = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", 10.99);
$product2 = new CDProduct("Классическая музыка. Лучшее", "Антонио", "Вивальди", 10.99, 89);

print "Автор: " . $product1->getProducer() . "<br/>";
print "Исполнитель:" . $product2->getProducer() . "<br/>";
print $product2->getSummaryLine();
$product2 = new BookProduct("PHP", "Harry", "Oskar", 10.99, 432);
print $product2->getSummaryLine();

//$dsn =  __DIR__ . "/products.db";
//$pdo = new \PDO($dsn, null, null);
//$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//$obj = ShopProduct::getlnstance(1, $pdo);

//$writer = new ShopProductWriter();
//$writer->write($product2);

print ShopProduct::OUT_OF_STOCK;