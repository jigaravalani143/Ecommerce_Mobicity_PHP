<?php
include("connection.php");
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
    $sql2 = "insert into cart (product_id,product_name, image, price,details, c_price, product_type, tags, brand) values ('$product_id','$product_name','$pic_name','$price','$details','$c_price','$product_type','$tags','$brand')";

	
	$result2 = $connection->query($sql2);

	}
} else {
    echo "0 results";
}
header("Location: cart.php");
?>
