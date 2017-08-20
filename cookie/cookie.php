	<?php 

		$name = "kuldip";
		$value = 45;
		$expire = time()+(60*60);			
		// setcookie($name,$value, $expire);

	?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
	
	<pre>
		<?php
		// print_r($_COOKIE);
		 $_COOKIE["kuldip"];
		?>
	</pre>

</body>
</html>