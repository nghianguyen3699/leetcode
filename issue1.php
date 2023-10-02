<?php
class Solution
{

	function romanToInt($s)
	{
		$total_ary = str_split($s);
		$result = '';
		foreach ($total_ary as $character) {
			switch ($character) {
				case 'I':
					$num = '1';
					break;
				case 'V':
					$num = '5';
					break;
				case 'X':
					$num = '10';
					break;
				case 'L':
					$num = '50';
					break;
				case 'C':
					$num = '100';
					break;
				case 'D':
					$num = '500';
					break;
				case 'M':
					$num = '1000';
					break;

				default:
					break;
			}
			var_dump('123');
			die;
			$result .= $num . '+';
		}
		$result = substr_replace($result, '', -1);
		if (str_contains($result, '1+5')) {
			$result = str_replace('1+5', '4', $result);
		} else
	if (str_contains($result, '1+10')) {
			$result = str_replace('1+10', '9', $result);
		}
		if (str_contains($result, '10+50')) {
			$result = str_replace('10+50', '40', $result);
		}
		if (str_contains($result, '10+100')) {
			$result = str_replace('10+100', '90', $result);
		}
		if (str_contains($result, '100+500')) {
			$result = str_replace('100+500', '400', $result);
		}
		if (str_contains($result, '100+1000')) {
			$result = str_replace('100+1000', '900', $result);
		}
		return eval('return ' . $result . ';');
	}
}
$obj = new Solution();
echo ($obj->romanToInt('III'));
