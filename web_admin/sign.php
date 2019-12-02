<?php
//echo "<body style='background: url(https://cdn.wallpapersafari.com/62/86/VvZwO8.jpg);'>";
//<?php 

require_once "dbconn.php";
?>

 
<?php
if(isset($_POST['email']))
{
	
	$eml= $_POST['email'];
	//echo "$eml";
	
	$result = mysqli_query($conn, "SELECT email FROM multiple");
	//var_dump($result);
	
	$row = mysqli_fetch_assoc($result);
	$count = mysqli_num_rows($result);
	
	if ($count != 1)
	{
		if($eml != $row['email'])
		{
			$result = mysqli_query($conn, "INSERT INTO multiple VALUES('$eml')");	
			echo "Inserted Successfully.";
		
		
		
		}
		else
		{
		
			$message = "Already Subscribed.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	
}   

?>