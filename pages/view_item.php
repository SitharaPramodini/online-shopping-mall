<!DOCTYPE html>
<html>
	<head>
	
		<title>razpar</title>
		
<style>
<?php include '../css/view_item.css'; ?>
</style>		
		
</head>
	
<body>
	<img src="../pictures/newback.png" alt="newback" width="100%" height="210px" class="logo">

	<table>
	

	
  <tr>
    <th>item Id</th>
    <th>item name</th>
	<th>price (LKR)</th>
	<th>image</th>
	<th>content</th>
	<th>available quantity</th>
	<th>shipping charge (LKR)</th>
	<th>category ID</th>
  </tr>
  <tr>
  
  	<?php
	include 'connection.php';
	$conn = OpenCon();
	
	$query = mysqli_query($conn, "SELECT * FROM item ");
    while($row=mysqli_fetch_array($query)){
?>

    <td><?php echo $row['itemId'] ?></td>
    <td><?php echo $row['itemName'] ?></td>
    <td><?php echo $row['price'] ?></td>
	<td><?php echo '<img class="image" src="data:image;base64,'.base64_encode($row['imageDir']).'" alt="bl1" width="60px" height="100px" ">'; ?></td>
    <td><?php echo $row['content'] ?></td>
    <td><?php echo $row['availableQuantity'] ?></td>
	<td><?php echo $row['shipping'] ?></td>
	<td><?php echo $row['categoryId'] ?></td>
  </tr>
 
  

  
    <?php
    }
	
	?>
  
  
  
  
</table>
	
	
	
<div  class="footer">
			<div class="text-content">
				<p> @2022 copyright - Razpar.lk </p>
				<a>contact us | +94701660770 | razpar@gmail.com</a>
			</div>
		</div>
	
	
	</body>
</html>