<?php
session_start();
include("../connect.php");
	if(isset($_POST['poo'])){
		$username = htmlentities($_POST['name']);
        $password = htmlentities($_POST['password']);
		$sql= "SELECT * FROM admin WHERE Username='$username' AND Password='$password'";
		$res= mysqli_query($dbcon,$sql);
		$row= mysqli_fetch_array($res);
		if(isset($row)){
			$_SESSION['journalist']=$row['Username'];
			echo "<meta http-equiv='refresh' content='0;url=../admin/index1.php'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/login1.php?yes=0'>";
		}
	}
?>