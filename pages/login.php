<!DOCTYPE html>
<html>
	<head>

	 <title>login</title>
	 <style>
<?php 
	include '../css/login.css';
	include 'connection.php';
	$conn = OpenCon();
 ?>
</style>
</head>
	
<body>
		<h1>LOGIN</h1>
		<form action="" method="post">
		
		<img class="image" src="../pictures/icon.png" align="left">
		
		<label class="inputField">Enter Email: </label> 
		<input type="text" name="gmail"  align="center" placeholder="Enter email here"/>
		
		<label class="inputField">Enter Password: </label>
		<input type="text" name="password" align="center" placeholder="Enter password here"/>
		
		<button name="login" type="submit">login</button>
		
		<p><a href = "file:///C:/Users/Sithara/Desktop/webpage/reset%20password.html"> Reset Password </a> </p>
		
		<label><a href="register.php"> New customert?  create account </a></label>
		
		</form>

<?php
		if(isset($_POST['login'])){
			$userName =  $_POST['gmail'];
			$userpassword = $_POST['password'];
		
		$sql_user_query = "select * from customer where gmail='$userName' AND password='$userpassword';";
		$sql_admin_query = "select * from admin where email='$userName' AND password='$userpassword';";
		
		$user_result = mysqli_query($conn, $sql_user_query);
        $usercount = mysqli_num_rows($user_result);

		$admin_result = mysqli_query($conn, $sql_admin_query);
        $admincount = mysqli_num_rows($admin_result);
		
		 if($usercount == 1){  
			echo '<script>alert(" Successfully logged in! $userName")</script>';
			header("location: home.php");
			
		}else if($admincount==1){
			echo '<script>alert(" Successfully logged in! Admin: $userName")</script>';
			header("location: admin.php");
		}else{
			echo '<script>alert("Something went wrong! please try again")</script>';
		}
		}
?>
</body>
</html>