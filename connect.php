<?php
$host="localhost";
$user="root";
$password="";
$dbname="yaminilive";
$dbcon=mysqli_connect($host,$user,$password,$dbname);
if(mysqli_connect_errno())
	{
		die("Connection Failed!".mysqli_connect_error());
	}
?>