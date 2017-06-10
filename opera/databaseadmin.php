<?php
    include('../connect.php');
    $admin=$_SESSION['admin'];
    $pipsql = mysqli_query($dbcon,"SELECT * FROM admin WHERE Username='$admin' ORDER BY ID DESC LIMIT 0,9");
	while($myrow = mysqli_fetch_array($pipsql)){
        $name = $myrow['Username'];
        $picture =$myrow['Picture'];
    }

?>