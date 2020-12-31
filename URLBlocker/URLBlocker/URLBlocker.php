<?php

class URLBlocker
{

    public static function block($url, $fileName)
    {
        $myFile = fopen($fileName, 'r');
        $allContent = '';

        if ($myFile)
        {
            while(!feof($myFile))
            {
                $buffer = fgets($myFile);

                if (strpos($buffer, $url) !== false)
                {
                    // $newBuffer = $isBlock ? "#" . substr($buffer, 0) : substr($buffer, 1);
                    $newBuffer = "#" . substr($buffer, 0);
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

    public static function unblock($url, $fileName)
    {
        $myFile = fopen($fileName, 'r');
        $allContent = '';

        if ($myFile)
        {
            while(!feof($myFile))
            {
                $buffer = fgets($myFile);

                if (strpos($buffer, $url) !== false)
                {
                    $newBuffer = substr($buffer, 1);
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
}