<?php
session_start();
if(isset($_SESSION['userid'])==false)
{
  header("location:/project/index.html");
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Visitor Registration Form</title>
    </head>
<style>
  
/* Full-width input fields */
input[type=text], input[type=password], input[type=number], input[type=tel]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 10px;
}



/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    
    color: white;
    padding: 14px 20px;
    font-size:20px;
    margin: 4px 20px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    width: 20%;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 7);

}
body {
    background-image: url("back3.png");
    background-repeat: no-repeat;
    background-size: cover;
}

/* Extra styles for the cancel button */


/* Float cancel and signup buttons and add an equal width */


/* Add padding to container elements */
.container {

    width:400px;padding: 20px;

}

.idcontainer{
	position: relative;
	left: 1250px;
	top: -500px;
width:450px;
padding: 20px;

}
.clearfix
{
	position: relative;
left: 20px;
top: -50px;
}


.address{
     word-wrap: break-word;
}
/* Change styles for cancel button and signup button on extra small screens */


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
    height: 27px;

}

li a:hover {
    background-color: #111111;
}

.topb{
  position: relative;
  top: -5px;
}


</style>

<body>
  


</style>

  

   <body>
    
   	
   	<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
   
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}


</script>
</head>

<body onload="startTime()">
<div class="topb">
<ul>

  <li><a href="#">Contact</a></li>
  <li><a href="http://localhost/project/about.php">About</a></li>
</ul>
</div>

<div style="position: relative;left: 1250px; top: 25px; width:170px;border-radius: 10px;font-size: 22px;color: white;top: -50px;">
    <?php  echo date('d-m-Y ||') ;?>
   </div>
<div id="txt" style="position: relative;left: 1400px;top: -75px; width:100px;border-radius: 10px;font-size: 22px;color: white;"></div>


   	<form  action="http://localhost/project/logout.php" method="post">

   <button style="position: relative;left: 1690px;top: -50px; background-color: blue; width: 120px;" input type="submit"  name="logout">Log Out</button> 

</form>



<form  action="http://localhost/project/profile.php" method="post">

   <button style="position: relative;left: 1500px;top: -108px; background-color: blue; width: 155px;" input type="submit"  name="profile">MY PROFILE</button> 

</form>

<h2 style="position: relative; left: 30px; top: -50px;">Visitor Registration Form</h2>
<form  action="http://localhost/project/visitorReg.php" method="post">
  <div class="container" style="position: relative;top: -60px">
    <label style="font-size: 22px;"><b>Name</b></label>
    <input type="text" placeholder="Name" name="NAME" required style="text-transform:uppercase" re>

    <label style="font-size: 22px;"><b>Address</b></label>
    
    <input class="address" style= "height:100px;" type="text" placeholder="Address" name="ADDRESS" required="">


     <label style="font-size: 22px;"><b>Id No.</b></label>
    <input type="number" placeholder="ID number" name="ID_NO" required="">

    <label style="font-size: 22px;"><b>Phone</b></label>
    <input type="tel" placeholder="Phone Number" name="PHONE_NO" max="9999999999" required="">

    <label style="font-size: 22px;"><b>Purpose</b></label>
    <input type="text" placeholder="Visit Purpose" name="PURPOSE" required="" >
  </div>

    <div class="clearfix">
      
    <button input type="submit"  name="store" >Store Details</button>

  </div>
</form>

<div class="idcontainer">
<h2>Check in .!</h2>
<form  action="http://localhost/project/query.php" method="post">
  
    <label style="font-size: 22px;"><b>ID number</b></label>
    <input type="number" placeholder="Id Number" name="ID" required>
    
     <center><button input type="submit"  name="enter" >Enter</button></center>
    </div>
</form>

</div>
</body>

</body>

</html>
