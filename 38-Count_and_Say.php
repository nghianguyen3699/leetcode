<?php

class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay(int $n): string 
    {
        if ($n === 1) {
            return '1';
        }
        return $this->countAndSayString($this->countAndSay($n - 1));            
    }
    
    function countAndSayString(string $inputString): string
    {
        $value = $inputString[0];
        $num = 1;
        $outputString = '';
        for($i = 1; $i < strlen($inputString); $i++) {
            if ($inputString[$i] === $value) {
                $num += 1;
            } else {
                $outputString .= $num . $value;
                $value = $inputString[$i];
                $num = 1;
            }
        }
        return $outputString . $num . $value;
    }
}