<?php
session_start();
session_destroy();
if($_SESSION['userid']==false)
{
  header("location:/project/index.php");
}
?>