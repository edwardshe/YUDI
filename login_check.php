<?php
if($_SESSION[SESSION_USERID]=="") {
	header("location:login.php");
	exit;	
}
?>