<html>
</body>
<?php
include 'config.php';
session_start();
if(isset($_SESSION['userid'])==false)
{
  header("location:/project/index.html");
}
if(isset($_POST['find1']))
{
	//$myDate = date('m/d/Y');
	
	$statement = "SELECT V.NAME,V.PURPOSE,T.IN_TIME FROM VISITOR V,TIMING T WHERE DATE(T.IN_TIME) =DATE(SYSDATE()) AND V.ID_NO = T.ID";
	$result = mysqli_query($db,$statement);
	if($result && mysqli_num_rows($result)>0)
	{ 
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		$name = $row["NAME"];
		$purpose = $row["PURPOSE"];
		$time = $row["IN_TIME"];
		echo "<table>";
		echo "<tr>";
		echo "<td><h3>NAME:".$name."</h3></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><h3>PURPOSE:".$purpose."</h3></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><h3>TIME:".$time."</h3></td>";
		echo "</tr>";
		echo "</table>";
	}
	}
	else
	{
		echo '<script>alert("No VISITORS today")</script>';
	}
}
if(isset($_POST['find2']))
{
   $statement = "SELECT NAME FROM STUDENT , TIMING WHERE STUDENT.STID_NO=TIMING.ID AND TIME(IN_TIME)>'10:40:00' AND DATE(IN_TIME)=DATE(SYSDATE());
";
$result = mysqli_query($db,$statement);
if($result && mysqli_num_rows($result)>0)
	{
		echo "<h2> Students who came college after 10:40 am </h2>";
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		$name = $row["NAME"];
		echo "<h4>".$name."</h4>";
		echo "";
	}
	}
   else
	{
		echo '<script>alert("No STUDENTS came after 10:40am")</script>';
	}
	}
	if(isset($_POST['find3']))
{

	$statement = "SELECT count(NAME) FROM STUDENT , TIMING WHERE STUDENT.STID_NO=TIMING.ID AND DATE(IN_TIME)= DATE(SYSDATE())";
	$result = mysqli_query($db,$statement);
	if($result)
	{
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		$count = $row["count(NAME)"];
		echo "Total number of students in college";
		echo "<h3>".$count."</h3>";
		echo "<br>";
	}
	}


}

if(isset($_POST['find4']))
{

	$statement = "SELECT count(NAME) FROM FACULTY , TIMING WHERE FACULTY.FID_NO=TIMING.ID AND DATE(IN_TIME)= DATE(SYSDATE())";
	$result = mysqli_query($db,$statement);
	if($result)
	{
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		$count = $row["count(NAME)"];
		echo "Total number of Teachers in college";
		echo "<h3>".$count."</h3>";
		echo "<br>";
	}
	}


}
if(isset($_POST['find5']))
{

	$statement = "SELECT count(NAME) FROM NON_TEACHING_STAFF , TIMING WHERE NON_TEACHING_STAFF.NID_NO=TIMING.ID AND DATE(IN_TIME)= DATE(SYSDATE())";
	$result = mysqli_query($db,$statement);
	if($result)
	{
		
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		$count = $row["count(NAME)"];
		echo "Total number of Non teaching staffs in college";
		echo "<h3>".$count."</h3>";
		echo "<br>";
	}
}


}
if(isset($_POST['find6']))
{

//	$statement = "SELECT COUNT(ID) FROM TIMING , STUDENT,FACULTY,NON_TEACHING_STAFF WHERE STUDENT.STID_NO=TIMING.ID OR FACULTY.FID_NO=TIMING.ID OR NON_TEACHING_STAFF.NID_NO=TIMING.ID OR DATE(IN_TIME)= DATE(SYSDATE())";
	$statement = "SELECT COUNT(ID) FROM TIMING WHERE DATE(IN_TIME)=DATE(SYSDATE())";

	$result = mysqli_query($db,$statement);
	if($result)
	{
		
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		$count = $row["COUNT(ID)"];
		echo "Total number of people in college";
		echo "<h3>".$count."</h3>";
		echo "<br>";
	}
}


}
?>
</body>
</html>