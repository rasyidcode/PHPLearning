<?php

class SolveMathProblem
{

    /**
     * $a => a + b
     * $b => pow(a,2) + pow(b,2)
     * 
     * ab => ..?
     */
    public static function algebra1($a, $b)
    {
        return (pow($a, 2) - $b) / 2;
    }

    /**
     * $a => pow(x,2) + pow(y,2)
     * $b => xy
     * 
     * pow((x + y), 2) = ..?
     */
    public static function algebra2($a, $b)
    {
        return $a + 2 * $b;
    }

    public static function algebra3(array $input)
    {

    }

}

print_r(SolveMathProblem::algebra1(7, 25));
echo "\n";
print_r(SolveMathProblem::algebra2(8, 7));
echo "\n";
$input = array(
    'a_plus_b' => 0,
    'square_a_plus_square_b' => 0,
    'ab' => 0,
    'square_a_plus_b' => 0
);
print_r(SolveMathProblem::algebra3($input));
echo "\n";
print_r(sqrt(144));