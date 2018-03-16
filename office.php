<?php
error_reporting(0);
include 'config.php';
session_start();
if(isset($_SESSION['userid'])==false)
{
  header("location:/project/index.html");
}
$id=$_SESSION['userid'];
$sql = "SELECT NAME FROM OFFICE WHERE ID='$id'";
$res=mysqli_query($db,$sql);
$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
$name=$row["NAME"];
?>


<!DOCTYPE html>
<html>
<style>

.drop{
  position: relative;
  left: 20px;
  top: 10px;
  height: 20px;
}



ul {
	position: fixed;
	left: -10px;
	top: -5px;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
    width:2100px;
    
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

    }

li a:hover {
    background-color: #111111;
}

body{
	background-image: url(back.jpg);
  
}

h1{
	position: fixed;
	top: 100px;
	left: 500px;
}

.button1
{
	position: fixed;
	left: 400px;
	top: 350px;

}
.button2
{
	position: fixed;
	left: 400px;
	top: 550px;

}

.button3
{
	position: fixed;
	left: 1100px;
	top: 350px;

}

.button4
{
	position: fixed;
	left: 1100px;
	top: 550px;

}
.button5
{
	position: fixed;
	left: 400px;
	top: 750px;

}

.button6
{
	position: fixed;
	left: 1100px;
	top: 750px;

}


</style>
<head>
	<title>Home</title>
</head>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <!-- Content here -->

<ul style="height: 70px;">

  <li><a href="#contact">Contact</a></li>
  <li><a href="http://localhost/project/about.php">About</a></li>
</ul>

<h1 style=" "><b>Hello,</b></h1>

<h2 style="position: relative;z-index: 1; top: 150px;left: 600px;"><?php echo $name;?></h2>


<div id="txt" style="position: relative;left: 1400px;top: -75px; width:100px;border-radius: 10px;font-size: 22px;color: white;"></div>


   
<div class="butt1">

   	<form  action="http://localhost/project/logout.php" method="post">

   <button input type="submit"  name="logout" style="position: fixed;top: 5px;left:1680px;background-color:#4CAF50;padding: 1px 20px;
    
    margin: 4px 10px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    width: 165px;height: 50px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 7);font-size: 20;">Log Out</button> 

</form>
</div>

<div class="butt2">

<form  action="http://localhost/project/office_profile.php" method="post">

   <button input type="submit"  name="profile" style="position: fixed;top: 5px;left:1500px;background-color:#4CAF50;padding: 1px 20px;
    
    margin: 4px 10px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    width: 165px;height: 50px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 7);font-size: 20;">MY PROFILE</button> 

</form>
</div>




<form action = "http://localhost/project/office_query.php" method="post">
<div class="button1"><h2>Visitor's List</h2><button type="submit" class="btn btn-primary" name = "find1">GO</button></div>
<div class="button2"><h2>Student's who entered after 10:40am</h2><button type="submit" class="btn btn-dark" name="find2" >GO</button></div>

<div class="button3"><h2>Total number of students</h2><button type="submit" class="btn btn-success" name="find3">GO</button></div>
<div class="button4"><h2>Total number of teachers</h2><button type="submit" class="btn btn-danger" name="find4">GO</button></div>
<div class="button5"><h2>Total number of non-teaching staffs</h2><button type="submit" class="btn btn-warning" name="find5">GO</button></div>
<div class="button6"><h2>Total number of people in campus</h2><button type="submit" class="btn btn-success" name="find6">GO</button></div>
</form>
</body>
</html>