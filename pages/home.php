<!DOCTYPE html>
<html>
	<head>
	<style>
.image{
	flex-wrap: wrap;
	border-radius: 10px;
	border: 5px solid #ffcc57;
	height:250px;
	width:200px;
	margin-left:30px;
	margin-top:50px;
	margin-bottom:30px;
}
.name{
	margin-left:10px;
	font-family: "Times New Roman", Times, serif;
	flex-wrap: wrap;
}
.profileIcon{
position: absolute;
  top: 25px;
  left: 25px;
}
.cartIcon{
position: absolute;
  top: 25px;
  left: 90px;
}
<style>
<?php include '../css/home_style.css'; ?>
</style>
	</style>
		<title>razpar</title>
		<link rel="stylesheet" href="css/home_style.css">
</head>

<body>
<a href="account.php"/><img src="../pictures/profile/profile-icon.png"  alt="icon" width="40px" height="40px" class="profileIcon"/></a>
<a href="cart.php"/><img src="../pictures/cart.png"  alt="icon" width="40px" height="40px" class="cartIcon"/></a>
	<img src="../pictures/newback.png" alt="newback" width="100%" height="210px" class="logo">
		<ul class="ul">
			 <a href = "file:///C:/Users/Sithara/Desktop/webpage/home.html" class="anew"> Home </a>
			<a id="myBtn" href="#" class="anew">Category </a>
			 <a href = "" class="anew">Contact </a> 
			<a href = "" class="anew">About Us </a>
		</ul>


<div id="myModal" class="modal">

  <div class="modal-content">
  <!-- check this &times;/////////////////////////////////////////////////////////// -->
    <span class="close">&times;</span>
	<h5 class="category">Women's Fashion</h5>
	<h5  class="category">Men's Fashion</h5>
	<h5  class="category">Shoes</h5>
  </div>
</div>
		

<?php
include 'connection.php';
$conn = OpenCon();

$query = mysqli_query($conn, "SELECT * FROM item WHERE itemId<90");
    while($row=mysqli_fetch_array($query)){
    ?>

    
<table  class="image-container" >
	<tr><a href="cloth_Details.php?id=<?php echo $row['itemId'] ?>">
		<img name="imageId" src="<?php echo 'data:image;base64,'.base64_encode($row['imageDir']).'';?>" alt="image" class="image"></tr>
		<tr class="name">
		<td>
	  <?php echo $row['itemName']?>
</td>
     </tr>
</a>
</table>

	   
	
	
   
    
  </td>
    <tr>

    <?php
    }
	
	?>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

		<div  class="footer">
			<div class="text-content">
				<p> @2022 copyright - Razpar.lk </p>
				<a>contact us | +94701660770 | razpar@gmail.com</a>
			</div>
		</div>
	
	</body>
</html>