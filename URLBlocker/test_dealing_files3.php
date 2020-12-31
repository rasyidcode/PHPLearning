<?php

# Find a word or words and add something at the first or at the end of the line
$searchTarget = 'Hello';
$contentToAdd = 'Wow';
$matches = array();

$fileName = 'test_output.txt';
$myFile = fopen($fileName, 'r');

$currentNumChars = 0;
$counter = 0;

$allContent = '';

if ($myFile)
{
    while(!feof($myFile))
    {
        $buffer = fgets($myFile);

        if (strpos($buffer, $searchTarget) !== false)
        {
            $newBuffer = $contentToAdd . " " . substr($buffer, 0);
            $allContent .= $newBuffer;
        }
        else
        {
            $allContent .= $buffer;
        }

        $counter++;
    }
    fclose($myFile);
}

$myFile = fopen($fileName, 'w+');
fwrite($myFile, $allContent);

$allContent2 = fgets($myFile);

fclose($myFile);