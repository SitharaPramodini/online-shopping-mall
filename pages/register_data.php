<!DOCTYPE html>
<html>
  

        <?php
  include 'connection.php';
		$conn = OpenCon();

        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        $username =  $_REQUEST['name'];
        $usergmail = $_REQUEST['gmail'];
        $userphoneNumber =  $_REQUEST['phoneNumber'];
        $userpassword = $_REQUEST['password'];
          
        $sql_query = "INSERT INTO customer VALUES ('not null','$username', 
            '$usergmail','$userphoneNumber','$userpassword')";
          
        if(mysqli_query($conn, $sql_query)){
                 echo "New record created successfully";
           
        } else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
          
		$conn = CloseCon($conn);
        ?>
