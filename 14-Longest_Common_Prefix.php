<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $result = '';

        for($i = 0; $i < strlen($strs[0]); $i++) {
            $result.=$strs[0][$i];
            foreach($strs as $item) {
                if(substr($item, 0, strlen($result)) == $result) {
                    continue;
                } else {
                    return(substr($result, 0, -1));
                }
            }
        }

        return $result;
    }
}
