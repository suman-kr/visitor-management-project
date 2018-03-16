<!DOCTYPE html>
<html>


<style>



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
    position: relative;
    left: 600px;
}


  body{
    background-image: url("back.jpg");
      }


h1{
  position: relative;
  left: 500px;

}

h2{
  position: relative;
  left: 600px;
}



</style>

<head>
	<title>My Profile</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<body>



<?php
include "config.php";
session_start();
if(isset($_SESSION['userid'])==false)
{
  header("location:/project/index.html");
}

	$uid=$_SESSION['userid'];
	
	
	$query = "SELECT ID,NAME,DESIGNATION,PASSWORD FROM OFFICE WHERE ID = '$uid' ";
	$result = mysqli_query($db,$query);

               $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
               $count = mysqli_num_rows($result);
               
                   $name =  $row["NAME"];
                    $id = $row["ID"];
                   $desg = $row["DESIGNATION"];
                 
                   echo "<h1><u>My Profile</u></h1>";
                   echo "<h2> Name : ".$name."</h2>";
                   echo "<h2> ID Number : ".$id."</h2>";
                   echo "<h2> Designation : ".$desg."</h2>";
                   
                  
                   
               
	

?>

<div class="butt">

<form action="http://localhost/project/office_pass.php" method = "post" >
         <button input type=submit value="" name= "pass" style="top:20px;">Change Password</button>
	</form>
</div>
<ul class="nav nav-pills" style="position: fixed;top: 600px;left: 45%;">
  <li class="nav-item">
    <a class="nav-link active" href="office.php">Go Back!</a>  </li>
</ul>
</body>
</html>

