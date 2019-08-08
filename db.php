<html>
<body>
<?php
	$con=mysqli_connect("localhost","mysqluser","mysqluserpwd");
	if(!$con){
		die('could not connect'.mysqli_error());
	}
	if(mysqli_query($con),"CREATE DATABASE message"){
		echo "database created";
		}
	else{
		echo "error creating database ".mysqli_error();
		}
	mysqli_select_db($con,"message");
	
	$s2="CREATE TABLE user(name varchar(25) ,email varchar(25),tel varchar(15),message varchar(150))";
	mysqli_query($con,$s2);
	
	?>

</body>
</html>
