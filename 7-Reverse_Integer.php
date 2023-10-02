<?php

class Solution {

    /**
     * @param String $x
     * @return Integer
     */
    function reverse($x) {
        $twoIn31Degree = 2147483648;
        $digits = str_split($x);
        $revertedNumber = intval($this->getReverseNumber($digits));

        if ($revertedNumber > $twoIn31Degree - 1 
            || $revertedNumber < -$twoIn31Degree) {
            return 0;
        }

        return $revertedNumber;
    }

    /**
     * @param Array $digits
     * @return String
     */
    function getReverseNumber(array &$digits): string
    {
        $result = '';
        $minusOrDigit = array_shift($digits);

        while (count($digits)) {
            $result .= array_pop($digits);
        }

        if ($minusOrDigit == '-') {
            return $minusOrDigit . $result;
        }

        return $result . $minusOrDigit;
    }
}