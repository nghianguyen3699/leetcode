<?php
class Solution {
    function lengthOfLongestSubstring(string $s): int {
        $n = mb_strlen($s);

        $maxLength = 0;

        $map = [];

        for ($left = $right = 0; $right < $n; $right++) {
            $char = $s[$right];

            if (isset($map[$char]) ) {
                $left = max($left, $map[$char] + 1);
            }

            $map[$char] = $right;

            $maxLength = max($maxLength, $right - $left + 1);
        }

        return $maxLength;
    }
}
$obj = new Solution();
echo ($obj->lengthOfLongestSubstring("pwwkew"));
