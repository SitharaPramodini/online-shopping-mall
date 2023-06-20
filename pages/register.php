<!DOCTYPE html>
<html>
<head>
<style>
	body{
	background-color:#0a070a;
}
	
h1{
	font-size:70px;
	text-align:center;
	margin-bottom:80px;
	color:#ffcc57;
}

label{
  margin-top:2%;
  margin-left:150px;
  font-size:20px;
  display:block;
  color:white;
  text-align: left;
}

button {
  max-width:300px;
  font-size: 30px;
  display: block;
  width: 100%;
  height: 50px;
  padding: 5px;
  border: 1px #ffcc57;  
  background-color: #ffcc57; 
  font-family: "Times New Roman", Times, serif;
  border-radius: 5px;
 margin-left:44%;
 margin-top:120px;
}

input{
	width:250px;
	margin-left:170px;
	border-radius:5px;
	height:20px;
}	

.image{
	margin-top:8%;
	margin-right:220px
	margin-bottom:400px;
}

</style>

	 <title>register</title>
	 
<style>
<?php include '../css/register.css'; ?>
</style>
</head>

<body>

		<h1>REGISTER</h1>
		<img class="image" src="../pictures/icon.png" width="310px" height="200px" align="right">
		
		<form action="" method="post">
		<label for="name">Name:</label>
		<input  type="text" name="name" id="userName" align="left" placeholder="Enter name here"/>
		
		<label for="gmail">Email Address:</label>
		<input type="text" name="gmail" align="left" placeholder="Enter gmail address here"/>
		
		<label for="phoneNumber">Phone Number:</label>
		<input type="text" name="phoneNumber" align="left" placeholder="Enter phone number here"/>
		
		<label for="password" >Password:</label>
		<input type="password" name="password" align="left" placeholder="Enter a password here"/>
		
		<button name="register" type="submit">REGISTER</button>
		
		<label><a href="login.php"> Already have an account?  Login </a></label>
		
		</form>
		
<?php
	include 'connection.php';
	$conn = OpenCon();
		
		if(isset($_POST['register'])){
		$username =  $_POST['name'];
        $usergmail = $_POST['gmail'];
        $userphoneNumber =  $_POST['phoneNumber'];
        $userpassword = $_POST['password'];
		
		$sql_query = "INSERT INTO customer VALUES ('not null','$username', '$usergmail','$userphoneNumber','$userpassword')";
		$sql_run = mysqli_query($conn, $sql_query);
		if($usergmail!=null & $userphoneNumber!=null & $userpassword!=null){
		if($sql_run){
			echo '<script>alert(" Successfully Added!")</script>';
						header("location: login.php");

		}else{
			echo '<script>alert("Something went wrong! please try again")</script>';
		}
		}
		}else{
			echo '<script>alert("Sorry! No Data")</script>';
		}
?>
	
</body>
</html>