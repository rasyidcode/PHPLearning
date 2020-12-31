<?php

$fileName = 'test_output.txt';
$myFile = fopen($fileName, 'a');
$textToAdd = "Hello Files from test_dealing_files2.php\n";
fwrite($myFile, $textToAdd);
fclose($myFile);