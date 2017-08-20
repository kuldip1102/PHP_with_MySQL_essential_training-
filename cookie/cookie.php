	<?php 

		$name = "kuldip";
		$value = 45;
		$expire = time()+(60*60);			
		// setcookie($name,$value, $expire);
		

		// setcookie($name,null, $expire);
		// setcookie($name,null);
		setcookie($name,null, time() - 3600);



	?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
	
	<pre>
		<?php
		$cookie  = isset($_COOKIE[$name]) ? $_COOKIE[$name] : "";
		echo $cookie;
		?>
	</pre>

</body>
</html>