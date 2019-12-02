<?php //adding somthing to cart
session_start();
include("connection.php"); 
if(isset($_POST['submit'])){
$product_id =$_POST['search_text'];
$wasFound=false;
$i=0;
if(!isset($_SESSION['cart_array']) || 
count($_SESSION['cart_array'])<1)
{
     $_SESSION['cart_array']=array(0=> array("item_id"=>$product_id,
	 "quantity" =>1));
}
else
{   
	foreach($_SESSION["cart_array"]as $each_item)
	{
	$i++;
	while(list($key, $value)= each($each_item)){
	if($key=="item_id" && $value == $product_id)
	{
		array_splice($_SESSION["cart_array"], $i-1,1,array(array("item_id" =>$product_id, "quantity" => $each_item['quantity']+1)));
		$wasFound=true;
}}}
if($wasFound == false)
{
	array_push($_SESSION["cart_array"], array("item_id"=>$product_id, "quantity" =>1));
}
}
}
?>
<?php //Empty cart code
 
if(isset($_POST['success'])) {

if(isset($_POST['cmd']) && $_POST['cmd']=="emptycart")
{

	unset($_SESSION["cart_array"]);
}}
?>
<?php //Cancel cart
if(isset($_GET['cmd']) && $_GET['cmd']=="emptycart")
{
	//unset($_SESSION["cart_array"]);
	$sql2="delete from cart";
	$result2 = $connection->query($sql2);
}
?>
<?php //section 3
$cartOutput="";
if(!isset($_SESSION["cart_array"]) || count ($_SESSION["cart_array"])<1)
{
	$cartOutput="<h2 align='center'> Your shopping cart is empty</h2>";
}else
	{
	$i=0;
	foreach($_SESSION["cart_array"]as $each_item)
	{
	$i++;
	while(list($key, $value)= each($each_item)){
		
	}
	}}

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
<?php include("include/header.php");?> 
<section id="cart_items">
		<div class="container">
       
<h1 align="center"><?php  //success message
if(isset($_POST['success'])) {
$success = $_POST["success"];
echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
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
	<center><b><h3>TOTAL</h3></b>	</center>		<?php

					if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
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

	<section id="do_action">
		<div class="container" align="center">
		<a class="btn btn-default check_out " style="font-size:20px; padding:10px" href="index.php">Continue Shopping</a>	
	<a class="btn btn-default check_out " style="font-size:20px; padding:10px"  href="form.php">Continue to Payment</a>
   	<a class="btn btn-default check_out " style="font-size:20px; padding:10px"  href="cart.php?cmd=emptycart">Cancel Shopping</a>			
		</div>
	</section><!--/#do_action-->
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