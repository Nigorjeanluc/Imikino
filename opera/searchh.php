<?php
    session_start();
    include("../connect.php");
    include("dataopera.php");
    if(isset($_POST['submitt'])){
        if(!empty($_POST['search'])){
            $query = str_replace(" ","+",$_POST["search"]);
            header("location:../admin/advance_search.php?search=". $query);
        }
    }
?>