<!DOCTYPE html>
<html>
<head>
		<title>razpar</title>
	<style>
		<?php include '../css/view_customer.css'; ?>
	</style>
</head>
	
<body>
	<img src="../pictures/newback.png" alt="newback" width="100%" height="210px" class="logo">

	<table>
		<tr>
			<th>customer ID</th>
			<th>Name</th>
			<th>Gmail</th>
			<th>Phone Number</th>
		</tr>
		
		<tr>
  
			<?php
				include 'connection.php';
				$conn = OpenCon();
				
				$query = mysqli_query($conn, "SELECT * FROM customer ");
				while($row=mysqli_fetch_array($query)){
			?>
  
			<td><?php echo $row['customerID'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['gmail'] ?></td>
			<td><?php echo $row['phoneNumber'] ?></td>
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