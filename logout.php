<?php
session_start();
session_destroy();
if(isset($_SERVER['userid'])==false)
{
	header('location:/project/index.html');
}
?>