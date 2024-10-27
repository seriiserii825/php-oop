<?php 

require_once __DIR__.'/classes/WriteToFile.php';

$write_to_file = new WriteToFile(__DIR__.'/test.txt');
$write_to_file->write('string 1');
$write_to_file->write('string 2');
$write_to_file->write('string 3');
$write_to_file->write('string 4');
$write_to_file->write('string 5');
