<?php
session_start();
include("../connect.php");
include("dataopera.php");
	if(isset($_POST['poo'])){
        $title = htmlentities($_POST['title']);
		$cat= htmlentities($_POST['sport']);
        $place = htmlentities($_POST['place']);
        $author=htmlentities($_POST['author']);
        $content = $_POST['content'];
		$targetFolder = "../images/news/";
		$targetFolders = "images/news/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $pictwo= $targetFolder.basename($_FILES['pictwo']['name']);
        $picthree= $targetFolder.basename($_FILES['picthree']['name']);
        $picfour= $targetFolder.basename($_FILES['picfour']['name']);
        $picfive= $targetFolder.basename($_FILES['picfive']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
        $file_tmp2=$_FILES['pictwo']['tmp_name'];
        $file_tmp3=$_FILES['picthree']['tmp_name'];
        $file_tmp4=$_FILES['picfour']['tmp_name'];
        $file_tmp5=$_FILES['picfive']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        move_uploaded_file($file_tmp2,$pictwo);
		move_uploaded_file($file_tmp3,$picthree);
		move_uploaded_file($file_tmp4,$picfour);
		move_uploaded_file($file_tmp5,$picfive);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
        $pictwoin= $targetFolders.basename($_FILES['pictwo']['name']);
        $picthreein= $targetFolders.basename($_FILES['picthree']['name']);
        $picfourin= $targetFolders.basename($_FILES['picfour']['name']);
        $picfivein= $targetFolders.basename($_FILES['picfive']['name']);
		$table = "news";
        $destinationArray = "Title,
                                picture1,
                                picture2,
                                picture3,
                                picture4,
                                picture5,
                                Author,
                                Content,
                                Categorie,
                                Place,Views,
                                Date
                                ";

        $sourceArray = stringCopact3($title,
                                        $piconein,
                                        $pictwoin).",".
                        stringCopact3($picthreein,
                                        $picfourin,
                                        $picfivein).",".
                        stringCopact3($author,
                                        $content,
                                        $cat).",".
                       stringCopact2($place,0);
            $query = insertDatas($table,$destinationArray,$sourceArray);
        $res = mysqli_query($dbcon,$query);
		if($res){
			echo "<meta http-equiv='refresh' content='0;url=../admin/post.php?yes=0#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/post.php?no=0'>";
		}
	}
	?>