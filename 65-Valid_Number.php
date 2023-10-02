<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isNumber($s) {
        $result = true;
    if(is_numeric($s) === true){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
    }
}