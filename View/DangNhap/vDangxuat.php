<?php 

	if (!isset($_SESSION))
  	{
		session_start();
  	}
	session_destroy();
	header("Location:index.php");
	//echo header("refresh: 0; url=../NongSanVN/");

 ?>