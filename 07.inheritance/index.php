<?php
require_once __DIR__.'/../func.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/NotebookProduct.php';
require_once __DIR__ . '/classes/BookProduct.php';

$notebook = new NotebookProduct('Asus Rogue', 2000, 'Intel Core i5');
vardump($notebook);
echo $notebook->getProduct();

$book = new BookProduct('War and Peace', 100, 2000);
vardump($book);
echo $book->getProduct();
