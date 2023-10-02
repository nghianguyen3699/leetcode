<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        if (strrpos(trim($s), " ") === false)
        {
            return strlen(trim($s));
        }
        else
        {
            return strlen(substr(trim($s), strrpos(trim($s), " ") + 1));
        }
    }
}