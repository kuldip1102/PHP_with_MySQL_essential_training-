<?php 

	// * Presence
	//
		function has_presence($value){
			return isset($value) && $value !== "";
		}
		 

	// * String length 
		// max leangth
		$value = "asedfs";
		$max = 6;
		function has_max_lenght($value,$max){
			return strlen($value) <= $max ;
		}

	// * inclusion in a set
		$find = 10;

		function has_inclusion_in($value,$set){
			return in_array($value, $set);
		}

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
