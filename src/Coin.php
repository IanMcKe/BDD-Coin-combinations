<?php

    class Coin
    {
        function makeChange($input)
        {
            while($input > 0){
                if($input >= 0.25){
                    $number_of_quarters = ($input - (fmod($input, 0.25)))/0.25;
                    $input = $input - ($number_of_quarters * 0.25);
                }
            }

            return array($number_of_quarters . " quarters","","","");
        }
    }

?>
