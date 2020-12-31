<?php

$testFileName = 'test_output.txt';
$testFile = fopen($testFileName, 'w') or die('Unable to open file!');
$testText = "Hello Files!\n";
fwrite($testFile, $testText);
fwrite($testFile, $testText);
fclose($testFile);