<?php

/**
* Function Rundom Number
* Value input $start, $end (e.g 1-15)
* Return Json Format
*/
function random_number($start, $end) {

	$number = range($start,$end);
	shuffle($number);
	$new_rand = array();

		foreach($number as $d) {
		    array_push($new_rand, $d);
		}
	// You can return $number if you want
	// I use new $variable with array, cz
	// i want to create new Multidimensional Arrays
	// with some $index key 
	return json_encode($new_rand, JSON_PRETTY_PRINT);
}

/**
* Usege: 
**/
echo random_number(1,30);