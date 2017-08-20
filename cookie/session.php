<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		$_SESSION['username'] = "kuldip";

		$name = $_SESSION['username'];
		echo $name;
	?>

</body>
</html>