<?php
session_start();
include("../connect.php");
include("dataopera.php");
if(isset($_POST['edit'])){
        $user = htmlentities($_POST['admin']);
		$passcode= htmlentities($_POST['password']);
		$table = "admin";
        $target = $user;
        $target_col = "Username";
        $data_to_inserts=" Password='$passcode', Date = now()";
        $query = updateDatas($table,$data_to_inserts,$target_col,$target);
        echo $user ."<br />". $query;
        $res = mysqli_query($dbcon,$query);
		if($res){
			echo "<meta http-equiv='refresh' content='0;url=../admin/profile.php?id=".$target."&&yes=0#here'>";
            $_SESSION['admin'] = $user;
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/profile.php?id=".$target."&&yes=0#here'>";
		}
	}
?>