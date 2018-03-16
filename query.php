
<?php
include ("config.php");
if(! $db ) {
      die("Could not connect: " . mysqli_connect_error());
   }//error_reporting(0);
   
 
   		    $id = $_POST['ID'];
			$statement5 = "CALL FCHECK('$id')" ;
			$statement = "SELECT * FROM FACULTY,TIMING  WHERE FACULTY.FID_NO = '$id'and TIMING.ID='$id' " ;
			$statement1 = "SELECT * FROM NON_TEACHING_STAFF,TIMING WHERE NON_TEACHING_STAFF.NID_NO = '$id' and TIMING.ID='$id'";
			$statement2 = "SELECT * FROM STUDENT,TIMING WHERE STUDENT.STID_NO = '$id' AND TIMING.ID='$id'";
			$statement3 = "SELECT * FROM VISITOR,TIMING  WHERE VISITOR.ID_NO = '$id'and TIMING.ID='$id' " ;
			$stmt = "update time set id=$id where id='$id'";
			$statement6 = "SELECT * FROM FACULTY WHERE FACULTY.FID_NO = '$id' ";
			$statement7 = "SELECT * FROM NON_TEACHING_STAFF WHERE NON_TEACHING_STAFF.NID_NO = '$id' ";
			$statement8 = "SELECT * FROM STUDENT WHERE STUDENT.STID_NO = '$id' ";
			$statement9 = "SELECT * FROM VISITOR WHERE VISITOR.ID_NO = '$id' ";
          
			//$result = mysqli_query($db,"CALL FCHECK($id)");
          $result = mysqli_query($db,$statement);
          $result1 = mysqli_query($db,$statement1);
          $result2 = mysqli_query($db,$statement2);
          $result3 = mysqli_query($db,$statement3);
          //$result5 = mysqli_query($db,$statement5);

          $result6 = mysqli_query($db,$statement6);
          $result7 = mysqli_query($db,$statement7);
          $result8 = mysqli_query($db,$statement8);
          //$reuslt9 = mysqli_query($db,$statement9);

			if((mysqli_num_rows($result))>0||(mysqli_num_rows($result1))>0||(mysqli_num_rows($result2)) > 0||(mysqli_num_rows($result3)) > 0)
			{	
			
				    $query = "UPDATE  TIMING SET ID='$id' WHERE ID='$id'";
				  if($result3 = mysqli_query($db,$query)){

				  	echo '<script> alert("OUT TIME INSERTED") </script>';
				  	$query1 = "INSERT INTO LOG SELECT * FROM TIMING WHERE ID='$id'";
				  	$result4 = mysqli_query($db,$query1);
				  	
				  	$query2 = "DELETE FROM TIMING WHERE ID='$id'";
				  	$result5 = mysqli_query($db,$query2);
			}
		}
			
			else if((mysqli_num_rows($result6))>0||(mysqli_num_rows($result7))>0||(mysqli_num_rows($result8)) > 0)
			{
				 $query = "INSERT INTO TIMING(ID,IN_TIME) VALUES ('$id',SYSDATE())";
				  if($result = mysqli_query($db,$query)){
				
				echo '<script> alert("IN TIME INSERTED") </script>';
				

				//echo("error occured");
			}		
             }
             else 
             {
 					
 					echo '<script> alert("The Id no is wrong!!...Try Again") </script>';
             }							
				
		
?>
