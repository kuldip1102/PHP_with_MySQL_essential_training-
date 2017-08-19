<?php 
	require_once('included_fuctiuon.php');

	if (isset($_POST['submit'])) {
		// form submitted
			$Username = $_POST['uname'];
			$Password = $_POST['pass'];

		if ($Username == "kuldip" && $Password == "kul") {
			//successful error
			redirected_to('basic.php');
		}else{
			$message = "There were some errors.";
		}	
		
	}else{
		$Username = "";
		$message = "Please log in";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<?php 
		echo $message;
	?>
	<form action="form_single.php" method="post">
		Username : <input type="text" name="uname" value="<?php echo htmlspecialchars($Username); ?>"><br>
		Password : <input type="text" name="pass"><br>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>