<?php
    session_start();
    include("../connect.php");
    include("dataopera.php");
    if(isset($_POST['submit'])){
        if(!empty($_POST['search'])){
            $query = str_replace(" ","+",$_POST["search"]);
            header("location:../advance_search.php?search=". $query);
        }
    }
?>