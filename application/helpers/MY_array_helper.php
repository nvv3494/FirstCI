<?php 
	function any_in_array($needle,$haystack){
		$needle = is_array($needle) ? $needle : array($needle);
		foreach ($needle as $value) {
			# code...
			if(in_array($value, $haystack)){
				return true;
			}
		}
		return false;
	}
	function random_element($array){
		shuffle($array);
		return array_pop($array);
	}
 ?>