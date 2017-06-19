<?php
session_start();
include("../connect.php");
include("dataopera.php");
if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$message=$_POST['message'];
    $table = "messages";
    $destinationArray = "User,Phone,Email,Content,counter,Date";
    $sourceArray = stringCopact3($name,$phone,$email).",".stringCopact2($message,1);
    $query = insertDatas($table,$destinationArray,$sourceArray);
    $res = mysqli_query($dbcon,$query);
	if($res){
		echo "<meta http-equiv='refresh' content='0;url=../contact.php?yes=0#here'>";
	}else{
		echo "<meta http-equiv='refresh' content='0;url=../contact.php?no=0'>";
	}
}
?>