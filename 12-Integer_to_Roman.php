<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
         $Symbol = [
            1000 => 'M',
            900 => 'CM',
            500 => 'D',
            400 => 'CD',
            100 => 'C',
            90 => 'XC',
            50 => 'L',
            40 => 'XL',
            10 => 'X',
            9 => 'IX',
            5 => 'V',
            4 => 'IV',
            1 => 'I'
        ];
        $roman = "";
        foreach ($Symbol as $value => $symbol) {
            if($num < $value) continue;
            $count = intdiv($num, $value);
            $num %= $value;
            $roman .= str_repeat($symbol, $count);
            if($num == 0) break;
        }
        
        return $roman;
        
    }
}