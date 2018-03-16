<?php
include_once 'config.php';
session_start();
if(isset($_SESSION['userid'])==false)
{
  header("location:/project/index.html");
}
   if(isset($_POST['store']))
        {
          $sid = $_SESSION['userid'];
        $name=$_POST['NAME'];
        $id = $_POST['ID_NO'];
        $phone = $_POST['PHONE_NO'];
        $address = $_POST['ADDRESS'];
        $purpose = $_POST['PURPOSE']; 
        $statement = "INSERT INTO VISITOR VALUES ('$name','$id','$phone','$address','$purpose','$sid')";
        $result = mysqli_query($db,$statement);
           if ($result) 
            {
             $query = "INSERT INTO TIMING(ID,IN_TIME) VALUES ('$id',SYSDATE()) ";
               $result1 = mysqli_query($db,$query);
               if($result1){
               header("location:/project/data_enter.html");
           }
            }
                else
                {
                    //echo "ERROR OCCURED".mysqli_error();
                }
       



        }   
        ?>