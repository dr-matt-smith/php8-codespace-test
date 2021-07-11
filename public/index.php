<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Product;

$p1 = new Product('asd', 9.99);
print PHP_EOL;
print $p1;
print PHP_EOL;
print 'I am anothe line of text';
print PHP_EOL;

print $p1->getName();
print PHP_EOL;
