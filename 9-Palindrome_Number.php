<?php

class Solution {

    /**
     * @param String $x
     * @return Boolean
     */
    function isPalindrome($x) {
       $rev = strrev($x);
       if($rev == $x) {
           return true;
       }else{
           return false;
       }
    }
}
