
<?php
   session_start();
   if(isset($_SESSION['userid'])==false)
{
   header('location:/project/index.html');
}
   include("config.php");
   if(isset($_POST['login']))
   {
      $selected_val = $_POST['department']; 
      $myusername = mysqli_real_escape_string($db,$_POST['ID']);
      $mypassword = mysqli_real_escape_string($db,$_POST['PASSWORD']);
      $_SESSION['userid'] = $myusername;   
      if((!empty($myusername))&&(!empty($mypassword)))
         {
            if($selected_val=="SECURITY")
              { 
               $sql = "SELECT SID_NO FROM SECURITY WHERE SID_NO = '$myusername' and PASSWORD = '$mypassword'";
               $result = mysqli_query($db,$sql);
               $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
               $active = $row['active'];
      
               $count = mysqli_num_rows($result);
               if($count == 1) 
               {
                     header("location:/project/new.php");
               }  
               else 
               {
                     header("location:/project/error.html");
               }
            }
             if($selected_val=="OFFICE")
              { $sql = "SELECT ID FROM OFFICE WHERE ID = '$myusername' and PASSWORD = '$mypassword'";
               $result = mysqli_query($db,$sql);
               $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
               $active = $row['active'];
      
               $count = mysqli_num_rows($result);
               if($count == 1) 
               {
                     header("location:/project/office.php");
               }  
               else 
               {
                     header("location:/project/error.html");
               }
            }

         }
         

      }

   
?>