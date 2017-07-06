<?php
session_start();
include("../connect.php");
include("dataopera.php");
if($_FILES["file"]["name"] != ''){
    //$text = explode(".", $_FILES["file"]["name"]);
    //$extension = end($test);
    $name = rand(100,999);
    $location = '../images/news/'.$name;
    move_uploaded_file($_FILES["file"]["tmp_name"], $location);
    $table = "news";
        $destinationArray = "picture1";

        $sourceArray = "images/news/".$name;
            $query = insertDatas($table,$destinationArray,$sourceArray);
        $res = mysqli_query($dbcon,$query);
    echo '<img src="'.$location.'" style="height:300px" width="100%" class="img-thumbnail" />';
}
?>