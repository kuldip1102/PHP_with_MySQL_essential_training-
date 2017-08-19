<!DOCTYPE html>
<html>
<head>
	<title>Form processing</title>
</head>
<body>
	<pre>
		<?php 
			// print_r($_POST);
		?>
	</pre>

	<?php 
	 $username = $_POST['uname'];
	 $password = $_POST['pass'];

	echo $username ." : ". $password ;
	?>
</body>
</html>