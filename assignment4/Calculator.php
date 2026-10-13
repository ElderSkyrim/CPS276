<?php

class Calculator
{
    public function calc(...$args)
    {
        if (count($args) !== 3) {
            return "<p>Cannot perform operation. You must have three arguments. A string for the operator (+,-,*,/) and two integers or floats for the numbers.</p>";
        }

        $operator = $args[0];
        $num1 = $args[1];
        $num2 = $args[2];

        if (
            !is_string($operator) ||
            !in_array($operator, ['+', '-', '*', '/']) ||
            !is_numeric($num1) ||
            !is_numeric($num2)
        ) {
            return "<p>Cannot perform operation. You must have three arguments. A string for the operator (+,-,*,/) and two integers or floats for the numbers.</p>";
        }

        switch ($operator) {
            case '+':
                $answer = $num1 + $num2;
                break;

            case '-':
                $answer = $num1 - $num2;
                break;

            case '*':
                $answer = $num1 * $num2;
                break;

            case '/':
                if ($num2 == 0) {
                    $answer = "cannot divide a number by zero";
                } else {
                    $answer = $num1 / $num2;
                }
                break;
        }

        return "<p>The calculation is {$num1} {$operator} {$num2}. The answer is {$answer}.</p>";
    }
}
?>