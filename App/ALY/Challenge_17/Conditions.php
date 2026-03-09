<?php
namespace App\Aly\Challenge_17;
class Conditions
{
    # Even or Odd
    public static function if($num)
    {
        if($num % 2 == 0) {
            echo "This number is even";
        }
        else{
            echo "This number is odd";
        }
    }

    public static function largest($a, $b, $c)
    {
        if ($a > $b) {
            if ($a > $c){
                echo "$a is the largest";

            } else{
                echo "$c is the largest";
            }

        } else {
            if ($b > $c){
                echo "$b is the largest";

            } else{
                echo "$c is the largest";
            }
        }
    }
}