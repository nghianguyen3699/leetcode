<?php

class Solution {

    /**
     * @param Integer[][] $intervals
     * @param Integer[] $newInterval
     * @return Integer[][]
     */
    function insert($intervals, $newInterval) {
        $ans = [$newInterval];
        
        foreach($intervals as $int){
            $current_start = $int[0];
            $current_end = $int[1];
            $ans_start = end($ans)[0];
            $ans_end = end($ans)[1];


            if(($ans_start >= $current_start && $ans_start <= $current_end)
            || ($ans_end >= $current_start && $ans_end <= $current_end)
            || ($ans_start <= $current_start && $ans_end >= $current_end)){
                $temp = array_pop($ans); 
                array_push($ans, [min($temp[0], $current_start), max($temp[1], $current_end)]);
            }elseif($current_start < $ans_start && $current_end < $ans_start){
                $temp = array_pop($ans); 
                array_push($ans, $int);
                array_push($ans, $temp);
            }
            else{
                array_push($ans, $int);
            }

        }

        return $ans;

    }
}