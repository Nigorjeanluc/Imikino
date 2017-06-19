<?php
    session_start();
    include("../connect.php");
    include("dataopera.php");
	if(isset($_REQUEST['del'])){
		$ID = $_REQUEST['del'];
        $table = "news";
        $table_col= "ID";
        $target = $ID;
		$query = deleteDatas($table,$table_col,$target);
		$res= mysqli_query($dbcon,$query);
        if($res){
		    echo "<meta http-equiv='refresh' content='0;url=../admin/editdel.php?yess=1&&#here'>";
        }else{
            echo "<meta http-equiv='refresh' content='0;url=../admin/editdel.php?noo=1&&#here'>";
        }
	}
    if(isset($_REQUEST['dell'])){
		$ID = $_REQUEST['dell'];
        $table = "messages";
        $table_col= "ID";
        $target = $ID;
		$query = deleteDatas($table,$table_col,$target);
		$res= mysqli_query($dbcon,$query);
        if($res){
		    echo "<meta http-equiv='refresh' content='0;url=../admin/messages.php?yess=1&&#here'>";
        }else{
            echo "<meta http-equiv='refresh' content='0;url=../admin/messages.php?noo=1&&#here'>";
        }
	}
?>