<?php 

require_once __DIR__.'/classes/WriteToFile.php';

$write_to_file = new WriteToFile(__DIR__.'/test.txt');
$write_to_file->write('new content');
