<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        if (strlen($s) === 1) return $s;
        
        // loop from tail.
        $res = false;
        for ($i=strlen($s)-1;$i>=0;$i--) {
            $_s = $s[$i];
            $offset = 0;
            $search = true;
            if (!$res) $res = $_s;
            do {
                $pos = strpos($s, $_s, $offset);
                if ($pos !== $i && $pos !== false) {
                    // target string.
                    $_sp = substr($s, $pos, $i - $pos + 1);
                    if (static::isPalindrome($_sp)) {
                        $search = false;
                        if (strlen($_sp) > strlen($res)) $res = $_sp;
                        // if (strlen($res) >= (strlen($s)/2)) return $res;
                    } else {
                        $offset = $pos + 1;
                    }
                }
            } while ($search && $pos < $i);
        }
        return $res;
    }
    
    static function isPalindrome($str) {
        return $str == strrev($str);
    }
}

