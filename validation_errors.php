<!DOCTYPE html>
<html>
<head>
	<title>Validations errors</title>
</head>
<body>
	<?php 
		require_once('validation_function.php');
		$errors = array();

		$username = trim("kuldip");

		if (!has_presence($username)) {
			$errors['value'] = "Usename can't be blank";
		}

	?>

	<?php 
		
		echo form_error($errors);
	
	?>
</body>
</html>