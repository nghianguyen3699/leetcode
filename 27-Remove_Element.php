<?php
class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $val
 * @return Integer
 */
function removeElement(&$nums, $val) {
	// solution #2 (3 ms)
	foreach ($nums as $k => $num) {
		if ($num == $val) unset($nums[$k]);
	}
	return count($nums);
}
}