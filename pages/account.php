<!DOCTYPE html>
<html>
	<head>
	
	<style>
<?php include '../css/profile.css'; ?>
</style>
	
		<title>user account</title>
</head>
    <body>
            <div class="background-image"></div>
        
        	<img src="../pictures/newback.png" alt="newback" width="100%" height="210px" class="logo">
		<ul class="ul">
			 <a href = "file:///C:/Users/Sithara/Desktop/webpage/home.html" class="anew"> Home </a>
			<a id="myBtn" href="#" class="anew">Category </a>
			 <a href = "https://wireframepro.mockflow.com/#/space/MU6xvlBBvnb" class="anew">Contact </a> 
			<a href = "https://wireframepro.mockflow.com/#/space/MU6xvlBBvnb" class="anew">About Us </a>
		</ul>

        
        
        
        
        
        
<h2 style="text-align:center">User Profile</h2>

<div class="card">
  <img src="..\pictures\profile\profile.jpg"  style="width:40%">
  <h1>Michel Pattinson</h1>
  <p class="email">michelpat@gmail.com</p>
    
      
        <a href="#" class="w3-button w3-round w3-theme-d3 w3-border link" target="_blank">ACCOUNT</a>
        <br><br>
        <a href="#" class="w3-button w3-round w3-theme-d3 w3-border link" target="_blank">CHANGE PASSWORD</a>
        <br><br>
        <a href="#" class="w3-button w3-round w3-theme-d3 w3-border link" target="_blank">BILLIBG DETAILS</a>
        <br><br>
        <a href="#" class="w3-button w3-round w3-theme-d3 w3-border link" target="_blank">MY ORDERS</a><br>
        <br>
        <a href="#" class="w3-button w3-round w3-theme-d3 w3-border link" target="_blank">DELETE ACCOUNT</a><br>
        <br>
        <a href="#" class="w3-button w3-round w3-theme-d3 w3-border link" target="_blank">LOGOUT</a><br>
        <br>
      

      </div >
      

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Update</button>

<div id="id01" class="modal">
  
 
    
    <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="..\pictures\profile\profile-icon.png">
    </div>   
      
    <div class="container">
    
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        
    <label for="cname">Company Name</label>
    <input type="text" id="cname" name="companyname" placeholder="Your company name..">
        
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="srilanka">Sri Lanka</option>
      <option value="india">India</option>
      <option value="pakistan">Pakistan</option>
      <option value="uk">UK</option>
    </select><br><br>
        
    <label for="adr">Address</label>
    <input type="text" id="adr" name="address" placeholder="Your address..">
        
    <label for="pnumber">Phone Number</label>
    <input type="text" id="pnumber" name="phonenumber" placeholder="Your phone number..">

      
      <button type="submit">Update</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
   
          	<div  class="footer">
			<div class="text-content">
				<p> @2022 copyright - Razpar.lk<br>
				contact us | +94701660770 | razpar@gmail.com</p>
			</div>
		</div>
        
    </body>
</html>