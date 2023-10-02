<?php

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $result = 0;
        $i = 0;
        $j = count($height) - 1;

        while ($i !== $j) {
            $area = min($height[$i], $height[$j]) * ($j - $i);

            if ($area > $result) {
                $result = $area;
            }

            $height[$i] > $height[$j] ? $j-- : $i++;
        }

        return $result;
    }
}