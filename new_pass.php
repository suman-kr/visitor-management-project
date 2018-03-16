<?php
session_start();
include 'config.php';
if(isset($_SESSION['userid'])== true)
{
 $id=$_SESSION['userid'];
  if(isset($_POST['pass']))
  {
  	$old_pass = $_POST['old'];
  	$new_pass = $_POST['new'];
  	$renew_pass = $_POST['renew'];
  	$query = "SELECT PASSWORD FROM SECURITY WHERE SID_NO= '$id'";
  	$result1=mysqli_query($db,$query);
  	$row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
  	$password = $row["PASSWORD"];
  	if($old_pass == $password)
  	{
  	if($new_pass == $renew_pass)
  	{
  	  $sql="UPDATE SECURITY SET PASSWORD = '$new_pass' WHERE SID_NO = '$id' ";
  	  $result=mysqli_query($db,$sql);
  	  if($result1)
  	   {
  	 	echo "<h1> Your Password has been changed</h1>";
  	    echo '<a href="http://localhost/project/profile.php">My Profile</a>';
  	   }
    }
    else{
    	echo "<h3> The New password and retyped password is incorrect";
    }
  	}else{
  		echo "<h3> The password typed is incorrect, Try Again!";
  	}

  } 
}

?>
<!DOCTYPE html>

<style>

input[type=text], input[type=password], input[type=number], input[type=tel]{
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 10px;
}

button {
    background-color: #4CAF50;
    
    color: white;
    padding: 14px 20px;
    font-size:20px;
    font-family: Impact;
    margin: 4px 20px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    width: 20%;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 7);

}


  body{
    background-image: url("back.jpg");
      }




.box{
  position: relative;
  top: 200px;
}
.changepass{
  position: relative;
  font-family: Impact;
  font-size: 28px;
  top: 180px;
  left: 650px;
}



</style>



<html>
<head>
	<title>Change Password</title>
</head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<body>
  <div class="changepass">
    <strong>Change password</strong>
  </div>

  <div class="box">
<form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
	<center><input type = "password" placeholder="Old Password" name= "old" required=""></input> </center>
	<center><input type = "password" placeholder="New Password" name= "new" required=""></input> </center>
	<center><input type = "password" placeholder="ReType New Password" name= "renew" required=""></input> </center>
	<center><button input type= "submit" value="Update" name= "pass" style="border-radius: 10px;">Save Changes</button></center>
</form>
  </div>

  <ul class="nav nav-pills" style="position: fixed;top: 600px;left: 45%;">
  <li class="nav-item">
    <a class="nav-link active" href="profile.php">Back to Profile Page</a>  </li>
</ul>


</body>
</html>
