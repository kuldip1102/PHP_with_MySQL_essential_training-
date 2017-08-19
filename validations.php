<!DOCTYPE html>
<html>
<head>
	<title>Validations</title>
</head>
<body>
	<?php 

	// * Presence
	// use trim() so empty spaces dont count 
	// use === to avoid false positives
	// empty() would consider "0" to be empty
	
		$value = trim("");
		if (!isset($value) || $value === "") {
			echo "validation failed.<br>";
		}

	// * String length 
		$value = "asedfs";
		$min = 3;
		$max = 6;
		if (strlen($value) < $min) {
			echo "Validation min.";
		}
		if (strlen($value) >  $max ) {
			echo "Validation max.";
		}

	// * type
		$value = '1';
		if (!is_string($value)) {
				echo "validation is failed is not string";
			}	

	// * inclusion in a set
		$find = 10;
		$set = array(10,20,30,40,50);
		if (!in_array($find, $set)) {
			echo $find." is not in array.";
		}

	// * uniqueness
	
	// * format
 		// Use regex on a string.
 		// pregmatch($regex,$subject)
	if (preg_match("/php/","php is fun.")) {
		echo "A match is found.";
	}else{
		echo "A match is not found.";
	}


	?>
</body>
</html>