<!DOCTYPE html>
<html>
<head>
	<title>Form processing</title>
</head>
<body>
	<pre>
		<?php 
			print_r($_POST);
		?>
	</pre>

	<?php 
		
	?>
	<?php 
		

	?>
	<?php	
		// deetect form submission
		if (isset($_POST['submit'])) {
			echo "form was submited <br>";

			if(isset($_POST['uname'])){
			$username = $_POST['uname'];
			}else{
				$username = "";
			}

			if(isset($_POST['uname'])){
				$password = $_POST['pass'];
			}else{
				$password = "";
			}

			//set default values using ternary operator.
			// boolean test ? value_if_true : value_if_false
			$username = isset($_POST['uname']) ? $_POST['uname'] : "";
			$password = isset($_POST['pass']) ? $_POST['pass'] : "";
		}else{

			$username = "";
			$password = "";
		}

		echo $username ." : ". $password ;
	?>
</body>
</html>