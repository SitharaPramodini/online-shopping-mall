<!DOCTYPE html>

<html>
<head>
<style>

<?php include '../css/cloth_details.css'; ?>
</style>
	<title>razpar</title>
</head>
<?php
	include 'connection.php';
	$conn = OpenCon();
?>
<body>

	<img src="../pictures/newback.png" alt="newback" width="100%" height="210px">

<?php
	$id = $_GET['id']; 
	$query = mysqli_query($conn, " SELECT * FROM item where itemId = '$id';  ");    
	      while($row=mysqli_fetch_array($query)){
?>

<h1><?php echo '<img class="image" src="data:image;base64,'.base64_encode($row['imageDir']).'" alt="image" ">'; ?></h1>
	
		<form action="" enctype="multipart/form-data" method="post">
			<h1><?php echo $row['itemName']?></h1>
			<h1><?php echo $row['content']?></h1>

			<label for="price">Item Price: </label>
			<input type="text" name="price" align="left" value="<?php echo $row['price']?>" disabled > <br><br>

			<label for="Size">Item size: </label>
			<input type="text" name="size" align="left" placeholder="Enter size here"/> <br><br>
		
			<label for="Color">Item Color: </label>
			<input type="text" name="color" align="left" placeholder="Enter name here"/> <br><br>
		
			<label for="Quantity">Item Quantity: </label>
			<input type="text" name="quantity" align="left" placeholder="Enter Quantity here"/> <br><br>	

			<label for="Shipping">Item Shipping: </label>
			<input type="text" name="shipping" align="left" value="<?php echo $row['shipping']?>" disabled />  via Razpar Standard Shipping.<br><br>			
			
			<a href="payment.php">
			<button name="pay" type="button" class="style_button">BUY</button> 	
			</a>			
			<button name="add" type="submit" class="style_button" id="cart">ADD TO CART</button>
			

    <?php
	if(isset($_POST['add'])){
		$cartQuantity = $_POST['quantity'];
        $cartColor =  $_POST['color'];
        $cartSize = $_POST['size'];
		$cartTotal = ($row['price'] * $cartQuantity) + $row['shipping'];
		$cartAvailability = 1;
		
	    $sql_query = "INSERT INTO cart VALUES ('not null','$id','$cartQuantity','$cartColor','$cartSize','$cartTotal','$cartAvailability')";
		$sql_run = mysqli_query($conn, $sql_query);
		
		if($cartQuantity!=null & $cartColor!=null & $cartSize!=null){
			if($sql_run){
			echo '<script>alert(" Successfully Added!")</script>';
			
		}else{
			echo '<script>alert("Something went wrong! please try again")</script>';
		}
		}else{
			echo '<script>alert("Sorry! No Data")</script>';
		}
		
	}
}
	?>
	
</form>
	<div  class="footer">
			<div class="text-content">
				<p> @2022 copyright - Razpar.lk </p>
				<a>contact us | +94701660770 | razpar@gmail.com</a>
			</div>
	</div>
</body>
</html>

