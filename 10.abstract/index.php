<?php
require_once __DIR__.'/../func.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/NotebookProduct.php';
require_once __DIR__ . '/classes/BookProduct.php';

$notebook = new NotebookProduct('Asus Rogue', 2000, 'Intel Core i5');
echo $notebook->getDiscount();

$book = new BookProduct('War and Peace', 100, 2000);
