<!DOCTYPE html>
<html>
<head>
		<title>cart</title>
		
<style>
<?php include '../css/cart.css'; ?>
</style>

</head>

<?php
 include 'connection.php';
$conn = OpenCon();
?>
	
<body>
<img class="logo" src="../pictures/icon.png" height="100px" width="160px" align="center">

<h1 align="center">SHOPPING CART </h1>

<?php
$query = mysqli_query($conn, " SELECT * FROM item,cart WHERE item.itemId = cart.itemID AND cart.availability = 1; ");    
	      while($row=mysqli_fetch_array($query)){
?>

<button type="button" class="cartButton" id="cart" align="center">
	<img name="imageId" src="<?php echo 'data:image;base64,'.base64_encode($row['imageDir']).'';?>" alt="image" class="image">
</button>

	<div class="container">
		<button name="delete" type="submit" class="delete" >Delete from cart</button>
		<div class="content"> <?php echo $row['itemName']?><br>
						price : <?php echo $row['price']?> <br>
						quantity : <?php echo $row['quantity']?><br>
						shipping : <?php echo $row['shipping']?><br>
						total : <?php echo $row['total']?><br>
		</div>
	</div>

<?php
$sum += $row['total'];
$count += 1
 ?>


	     <?php
	if(isset($_POST['delete'])){
		
	    $sql_query1 = "UPDATE cart SET availability = 0 WHERE cartID='$_POST[cartID]'";
		$sql_run = mysqli_query($conn, $sql_query1);
		if($sql_run){
			echo '<script>alert(" Successfully deleted!")</script>';
						header("location: cart.php");

		}else{
			echo '<script>alert("Something went wrong! please try again")</script>';
		}
}
	?>
	
		  <?php } ?>	
	
	
	
		<h2>Sub-Total -  LKR <?php echo $sum ?></h4>
	<h3><?php echo $count ?> Item</h5>
	
	
<a href="payment.php">
<button type="submit" class="paynow" id="pay">Pay Now</button>
</a>

		<div  class="footer">
			<div class="text-content">
				<p> @2022 copyright - Razpar.lk </p>
				<a>contact us | +94701660770 | razpar@gmail.com</a>
			</div>
		</div>
	
</body>
</html>