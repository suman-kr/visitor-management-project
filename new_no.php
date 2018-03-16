<?php



session_start();
include 'config.php';
if(isset($_SESSION['userid'])== true)
{error_reporting(0);
	$id=$_SESSION['userid'];
  if(isset($_POST['phone']))
  {
  	$number = $_POST['new'];
  	$sql="UPDATE SECURITY SET PHONE = '$number' WHERE SID_NO = '$id' ";
  	$result=mysqli_query($db,$sql);
  	if($result){
  		echo "<h1> Your Phone number has been updated </h1>";
        echo '<a href="http://localhost/project/profile.php">My Profile</a>';
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
    margin: 4px 20px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    width: 20%;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 7);
    font-family: Impact;
}


  body{
    background-image: url("back.jpg");
      }

.box{
  position: relative;
  top: 200px;
}

.changephone{
  position: relative;
  font-family: Impact;
  font-size: 28px;
  top: 180px;
  left: 650px;
}

</style>



<html>
<head>
	<title>Change Phone No</title>
</head>
<body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<div class="changephone">
    <strong>Change Phone number</strong>
  </div>
<div class="box">
<form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
	<center><input type = "number" placeholder="New number" name="new"  max="9999999999"></input> </center>
	<center><button input type="submit" value="Update" name= "phone" style="border-radius: 10px;padding: 14px 20px;">Save Changes</button></center>
</form>
</div>




<ul class="nav nav-pills" style="position: relative;top: 400px;left: 45%;">
  <li class="nav-item">
  <a class="nav-link active" href="profile.php">Back to Profile Page</a>  </li>
</ul>



</body>
</html>
