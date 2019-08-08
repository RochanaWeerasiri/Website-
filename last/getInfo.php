<html>
<body>
<?php
	$c=mysqli_connect("localhost","mysqluser","mysqluserpwd");
	mysqli_select_db($c,"message");
	$n=$_POST["name"];
	$e=$_POST["email"];
	$t=$_POST["tel"];
	$m=$_POST["message"];

	 $s1 = "INSERT INTO user (name, email, tel,message) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["tel"]."','".$_POST["message"]."')";
	if(mysqli_query($c,$s1)){
		echo "yay ";
	}
	else{
		echo "boo";
	}
	mysqli_close($c);
?>
</body>
</html>
