<?php

function URLBlocker($urlToBlock = '', $fileName, $isBlock)
{
    $myFile = fopen($fileName, 'r');
    $allContent = '';

    if ($myFile)
    {
        while(!feof($myFile))
        {
            $buffer = fgets($myFile);

            if (strpos($buffer, $urlToBlock) !== false)
            {
                $newBuffer = $isBlock ? "#" . substr($buffer, 0) : substr($buffer, 1);
                $allContent .= $newBuffer;
            }
            else
            {
                $allContent .= $buffer;
            }
        }
        fclose($myFile);
    } else die('Something went wrong');

    $myFile = fopen($fileName, 'w+');
    if ($myFile)
    {
        fwrite($myFile, $allContent);

        $allContent2 = fgets($myFile);

        fclose($myFile);
    } else die('Something went wrong');
}

URLBlocker('www.facebook.com', 'config', false);