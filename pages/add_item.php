<!DOCTYPE html>
<html>
<head>
<style>
<?php include '../css/add_item.css'; ?>
</style>
	 <title>add items to the system</title>
</head>
	
<body>
		<img src="../pictures/icon.png" align="left">
		<h1>Add items to the system</h1>
	
	<form action="add_item.php" enctype="multipart/form-data" method="post">

		<label for="name">Item Name</label> 
		<input type="text" name="itemName" align="left" placeholder="Enter item name here"/>
		
		<label for="price">Item Price</label>
		<input type="text" name="price" align="left" placeholder="Enter item price here"/>
		
		<label for="image">Select a image of item:</label>
		 <input type="file" name="imageDir"/><br> 
		
		<label for="content">Description</label> 
		<input type="text" name="content" align="left" placeholder="Enter description of the item"/>
		
		<label for="availableQuantity">Available Quantity</label>
		<input type="text" name="availableQuantity" align="left" placeholder="Enter available quantity of item"/>
		
		<label for="shipping">Shipping Charge</label>
		<input type="text" name="shipping" align="left" placeholder="Enter shipping charge here"/>
		
		<label for="categoryId">Category ID</label>
		<input type="text" name="categoryId" align="left" placeholder="Enter category id here"/>

		<button name="upload" type="submit"> Upload </button>
		
	</form>
	
	<?php
 include 'connection.php';
		$conn = OpenCon();

/* 		 $imageName = mysql_real_escape_string($_FILES['imageDir']["image_name"]);
  		$imageData = mysql_real_escape_string(file_get_contents($_FILES["imageDir"]["tmp_name"])); */
		/* $imageType = mysql_real_escape_string($_FILES["imageDir"]["type"]);  */
		/* $itemImage = send_long_data(1, file_get_contents($_FILES["$imageDir"]['tmp_name']));  */
		/* file_get_contents($_FILES['imageDir']['name']); */
		$itemimage =  $_POST['imageDir'];
		$itemname =  $_POST['itemName'];
        $itemprice = $_POST['price'];
        $itemcontent =  $_POST['content'];
        $itemquantity = $_POST['availableQuantity'];
		$shippingcharge = $_POST['shipping'];
		$categoryid = $_POST['categoryId'];
		
	    $sql_query = "INSERT INTO item VALUES ('not null','$itemname','$itemImage',$itemprice,'$itemcontent','$itemquantity','$shippingcharge','$categoryid')";
		$sql_run = mysqli_query($conn, $sql_query);
		
		if($sql_run){
			echo '<script>alert(" Successfully Added!")</script>';
			
		}else{
			echo '<script>alert("Something went wrong! please try again")</script>';
		}
	
	?>


</body>
</html> 