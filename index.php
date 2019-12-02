<?php include("connection.php");?>
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
	<?php include("include/fullheader.php"); ?>
	
	
	<section>
	<div class="container">
    <div class="row">
	<div class="col-sm-3">
	<div class="left-sidebar">
<h2>Category</h2>
	<div class="panel-group category-products" id="accordian"><!--category-productsr-->
	 

		<div class="panel panel-default">
		 <div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=oneplus">OnePlus</a></h4>
		 </div></div>
	<div class="panel panel-default">
	<div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=samsung">Samsung</a></h4>
		 </div></div>
         <div class="panel panel-default">
		 <div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=apple">Apple</a></h4>
		 </div></div>
		 
		 
		 <div class="panel panel-default">
	<div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=lg">LG</a></h4>
		 </div></div>
		 
		 <div class="panel panel-default">
	<div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=lenovo">Lenovo</a></h4>
		 </div></div>
		 <div class="panel panel-default">
	<div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=xiaomi">Xiaomi</a></h4>
		 </div></div>
		 
		 <div class="panel panel-default">
	<div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=motorola">Motorola</a></h4>
		 </div></div>
		 <div class="panel panel-default">
	<div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=asus">Asus</a></h4>
		 </div></div>
		 <div class="panel panel-default">
	<div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=oppo">Oppo</a></h4>
		 </div></div>
		 <div class="panel panel-default">
	<div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=vivo">Vivo</a></h4>
		 </div></div>
		 
		
		
		</div><!--/category-products-->
		
        
						
		</div></div>
				
		<div class="col-sm-9 padding-right">
		<div class="features_items"><!--features_items-->
<h2 class="title text-center">Top New</h2>
		<?php 
$cosmetics=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products")or die("Query 1 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($cosmetics))
{
echo"
<div class='col-sm-3'>
		<div class='product-image-wrapper'>
		<div class='single-products'>
		<div class='productinfo text-center'>
<a href='product_details.php?id=$product_id' class='thumbnail'><img src='images/products/$image' alt='' style='width:250px; height:250px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='addtocart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>

		</div>
		<img src='images/new.jpg' class='new' alt=''></div>
		</div></div>
";
}
 ?>
        </div><!--features_items-->
					
			<!--/category-tab-->
	</div></div>				
	
</div>
</section><br>
	
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