<?php
class Solution {

/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Float
 */
function findMedianSortedArrays($nums1, $nums2) {
   $sorted = [];

	$d1 = null;
	$d2 = null;

   while (count($nums1) > 0 || count($nums2) > 0)  {
	   $d1 = $d1 === null ? array_shift($nums1) : $d1;
	   $d2 = $d2 === null ? array_shift($nums2) : $d2;

		   if (($d1 !== null && $d1 <= $d2) || ($d1 !== null && $d2 === null)) {
			   $sorted[] = $d1;
			   $d1 = null;
		   } elseif($d2 !== null) {
			   $sorted[] = $d2;
			   $d2 = null;
		   }
		   
   }

   if ($d1 !== null) {
	   $sorted[] = $d1;
   }
   if ($d2 !== null) {
	   $sorted[] = $d2;
   }

	$c = count($sorted);

	if ($c%2 === 0) {
		return ($sorted[$c/2] +$sorted[($c/2 - 1)])/2;
	} else {
		return $sorted[floor($c/2)];
	}

}
}
