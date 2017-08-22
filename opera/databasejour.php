<?php
    include('../connect.php');
    $admin=$_SESSION['journalist'];
    $pipsql = mysqli_query($dbcon,"SELECT * FROM journalist WHERE Username='$admin' ORDER BY ID DESC LIMIT 0,9");
	while($myrow = mysqli_fetch_array($pipsql)){
        $name = $myrow['Username'];
        $picture =$myrow['Picture'];
    }

?>