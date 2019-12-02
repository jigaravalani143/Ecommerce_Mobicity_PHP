<?php  session_start();
	include("connection.php"); 
	
if(isset($_POST['submit']))
{
	$product_id=$_REQUEST['id'];
echo $product_id;
$sql = "SELECT * FROM products where product_id='$product_id'";
$result = $connection->query($sql);
//echo $sql;

echo "<br>".$result->num_rows;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$product_name=$row['product_name'];
$details=$row['details'];
$price=$row['price'];
$c_price=$row['c_price'];
$product_type=$row['product_type'];
$brand=$row['brand'];
$pic_name=$row['image'];
$tags=$row['tags'];
    //    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    $sql2 = "select * from products where product_id='$product_id'";

	
	$result2 = $connection->query($sql2);

	}
} else {
    echo "0 results";
}
$details=$_POST['details'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$zip_code=$_POST['zip_code'];
$country=$_POST['country'];
$contactno=$_POST['contactno'];
$quantity=$_POST['quantity'];

	if(!isset($_SESSION["cart_array"]) || count ($_SESSION["cart_array"]))
{
foreach($_SESSION["cart_array"]as $each_item)
{
	$item_id= $each_item['item_id'];
	//query
	$results=mysqli_query($connection,"select product_id, product_name from products where product_id ='$item_id' Limit 1");
	
while($row=mysqli_fetch_array($results))
    {
		$product_id=$row["product_id"];
		$product_name=$row["product_name"];
		
	}
	mysqli_query($connection,"insert into orders(details, cus_name,contact_no, email, address, zip_code, country,quantity) values ('$product_name','$details', '$name', '$contactno','$email','$address', '$zip_code', '$country', '$quantity')") or die ("query 2 incorrect");


$results1=mysqli_query($connection,"select details, cus_name,contact_no, email, address, zip_code, country, quantity from orders");

while($row=mysqli_fetch_array($results1))
    {
$details1=$row['details'];
$name1=$row['cus_name'];
$email1=$row['email'];
$address1=$row['address'];
$zip_code1=$row['zip_code'];
$country1=$row['country'];
$contactno1=$row['contact_no'];
$quantity1=$row['quantity'];	
}
	header("location: success_msg.php?success=1");

}}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home|Mobicity</title>
    <link href="layout/css/bootstrap.min.css" rel="stylesheet">
    <link href="layout/css/font-awesome.min.css" rel="stylesheet">
    <link href="layout/css/prettyPhoto.css" rel="stylesheet">
    <link href="layout/css/price-range.css" rel="stylesheet">
    <link href="layout/css/animate.css" rel="stylesheet">
	<link href="layout/css/main.css" rel="stylesheet">
	<link href="layout/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head><!--/head-->
<body>
	<?php include("include/onlyheader.php");
			error_reporting(0); ?>

	
<form action="https://digipaym.000webhostapp.com/LoginPage.php" method="post" name="form1">
<!-- Amount: -->
<input type="hidden" name="amount" value="<?php $total?>"> <br>

<!-- Merchant Username: -->
<input type="hidden" name="merchant" value="jigaravalani4699@gmail.com"> <br>

<!-- Merchant AccNo: -->
<input type="hidden" name="acc_no" value="1139056776642005"> <br>

	<section id="cart_items">
		<div class="container">
       
<h1 align="center"><?php  //success message
if(isset($_POST['success'])) {
$success = $_POST["success"];
echo "<center><h1 style='color:#0C0'>ACKNOWLEDGEMENT  </h1></center>";
}
$total=0;
$sql = "Select * from cart";
$result2 = $connection->query($sql);
?></h1>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
           <td class="image"><strong>ITEM</strong></td>
           <td class="description"><strong>DETAILS</strong></td>
		   <td class="total"><strong>PRICE</strong></td>
		   
           <td></td>
						</tr>
					</thead>
					<tbody>
	<center><b><h3>TOTAL</h3></b>	</center>					<?php

					if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
					$image = $row["image"];
					?>
<tr>

	<?php $image = $row["image"];
	echo"
	<td class='cart_product' style='margin-right:40px'><a href='#'>
	<img src='images/products/$image' style='width:80px; height:80px; border:outset #000'></a></td>"; ?>
	
	
<td><?php echo $row['product_name']; ?></td>
<td><?php echo $row['price']; ?></td>
</tr>
					<center><h4><?php $total += $row['price']; }
					echo $total;}?>	</h4>			</center>				
</tbody>
				</table>
				
			</div>
		</div>
	</section> <!--/#cart_items-->
	
	<section id="cart_items">
		<div class="container">
       
<h1 align="center"></h1>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
           <td class="description"><strong>Name</strong></td>
           <td class="description"><strong>Email</strong></td>
		   <td class="description"><strong>Address</strong></td>
		   <td class="description"><strong>Zip Code</strong></td>
		   <td class="description"><strong>Country</strong></td>
		   <td class="description"><strong>Contact no</strong></td>
		   <td class="description"><strong>Delivery Time</strong></td>
           <td></td>
						</tr>
					</thead>
					<tbody> 
<?php
$results1=mysqli_query($connection,"select cus_name,contact_no, email, address, zip_code, country, quantity from orders");

while($row=mysqli_fetch_array($results1))
{
$name1=$row['cus_name'];
$email1=$row['email'];
$address1=$row['address'];
$zip_code1=$row['zip_code'];
$country1=$row['country'];
$contactno1=$row['contact_no'];
$quantity1=$row['quantity'];	
}

echo"<tr>
	<td class='cart_description'>
	<h4><a>$name1</a></h4>
	</td>
	<td class='cart_description'>
	<p> $email1</p>
	</td>
	<td class='cart_description'>
	<p> $address1</p>
	</td>
	<td class='cart_description'>
	<p> $zip_code1</p>
	</td>
	<td class='cart_description'>
	<p> $country1</p>
	</td>
	<td class='cart_description'>
	<p> $contactno1</p>
	</td>
	<td class='cart_description'>
	<p> $quantity1  day(s)</p>
	</td>
	
	";
?>
	</tbody>
				</table>
			</div>
		</div>
	</section>
<center>
<button type="submit" name="submit" class="btn btn-primary" >Proceed to Payment</button>
</center>
<br>
<br>
<br>
</form>

<?php include("include/footer.php"); ?>
    <script src="layout/js/jquery.js"></script>
	<script src="layout/js/bootstrap.min.js"></script>
	<script src="layout/js/jquery.scrollUp.min.js"></script>
	<script src="layout/js/price-range.js"></script>
    <script src="layout/js/jquery.prettyPhoto.js"></script>
    <script src="layout/js/main.js"></script>
<a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;">
<i class="fa fa-angle-up">
</i></a>
</body>
</html>