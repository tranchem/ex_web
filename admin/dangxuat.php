<?php
	if(!session_start())
    session_start();

    if(isset($_SESSION['tk']))
    	unset($_SESSION['tk']);

    header("location:dangnhap.php");
?>