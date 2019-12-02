<?php
require_once "db/connection.php";
if(isset($_POST['email']))
{
	$eml= $_POST['email'];
	$result = mysqli_query($connection, "INSERT INTO multiple VALUES('$eml')");	
}   
?>
<html>
<body>
<h2>Newsletter</h2>
<p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
<form action="" method="post">
<input type="email" name="email" id="email" placeholder="Email">
<input type="submit" value="Subscribe">
</form>
</body>
</html>
