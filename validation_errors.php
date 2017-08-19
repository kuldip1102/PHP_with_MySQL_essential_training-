<!DOCTYPE html>
<html>
<head>
	<title>Validations errors</title>
</head>
<body>
	<?php 

	$errors = array();

	// * Presence
		$value = trim("");
		if (!isset($value) || $value === "") {
			$errors['value'] = "value can't be blank.";
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
/*	if (preg_match("/php/","php is fun.")) {
		echo "A match is found.";
	}else{
		echo "A match is not found.";
	}
*/
	// print_r($errors);
	?>

	<?php
/*		if (!empty($errors)) {
			// redirect_to("basic.php");
			include('form.php');
		}else{
			redirect_to('success.php');
		}
*/

	function form_error($errors = array()){
		$output = "";
		if (!empty($errors)) {
			$output .= "<div class=\"error\">";
			$output .= "Please fix the following errors:";
			$output .= "<ul>";
			foreach ($errors as $key => $error) {
				$output .= "<li>{$error}</li>";
			}
			$output .="</ul>";
			$output .="<div>";
		}
		return $output;
	}
		
	?>

	<?php 
		echo form_error($errors);
	?>
</body>
</html>