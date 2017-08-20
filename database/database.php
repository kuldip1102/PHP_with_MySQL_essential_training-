<?php 
	
$dbhost = "localhost";
$user = "root";
$dbpass = "";
$dbname = "test1";
$conn = mysqli_connect($dbhost,$user,$dbpass,$dbname)or die("faild.");

//  * maybe this is not wroking idont know whay .
// if (mysqli_connect_errno()) {
// 	die("Database connection failed: ".mysqli_connect_error() ."(".mysqli_connect_errno() .")" );
// }

?>

<?php

	//2. perform database query.
	$query = "SELECT * FROM subjects";
	$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Databases</title>
</head>
<body>
<ul>
	<?php 
	//3. use returned data if 
		while ($row = mysqli_fetch_array($result)) {
	?>	
		<li><?php echo $row['menu_name']."<br>"; ?></li>
	<?php					
		}
	?>

	<?php
		mysqli_free_result($result);
	?>
</ul>
</body>
</html>

<?php
	mysqli_close($conn);
?>


<?php 
// object-orianted method 		
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test1";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM subjects";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo  $row["menu_name"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
?>