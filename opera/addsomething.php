<?php
session_start();
include("../connect.php");
include("dataopera.php");
	if(isset($_POST['poo'])){
        $title = htmlentities($_POST['title']);
		$cat= htmlentities($_POST['sport']);
        $place = htmlentities($_POST['place']);
        $author=htmlentities($_POST['author']);
        $content = mysqli_real_escape_string($dbcon,htmlspecialchars($_POST['content']));
        echo $content;
        $pic1txt= htmlentities($_POST['piconetxt']);
        $pic2txt= htmlentities($_POST['pictwotxt']);
        $pic3txt= htmlentities($_POST['picthreetxt']);
        $pic4txt= htmlentities($_POST['picfourtxt']);
        $pic5txt= htmlentities($_POST['picfivetxt']);
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
                                pic1_txt,
                                picture2,
                                pic2_txt,
                                picture3,
                                pic3_txt,
                                picture4,
                                pic4_txt,
                                picture5,
                                pic5_txt,
                                Author,
                                Content,
                                Categorie,
                                Place,Views,counter,
                                Date
                                ";
        $sourceArray = stringCopact3($title,
                                        $piconein,
                                        $pic1txt).",".
                        stringCopact3($pictwoin,
                                        $pic2txt,
                                        $picthreein).",".
                        stringCopact3($pic3txt,
                                        $picfourin,
                                        $pic4txt).",".
                        stringCopact2($picfivein,$pic5txt).",".
                        stringCopact3($author,
                                        $content,
                                        $cat).",".
                       stringCopact3($place,0,1);
            $query = insertDatas($table,$destinationArray,$sourceArray);
        $res = mysqli_query($dbcon,$query);
		if($res){
			echo "<meta http-equiv='refresh' content='0;url=../admin/post.php?yes=0#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/post.php?no=0'>";
		}
	}
    //Pub
    if(isset($_POST['po'])){
        $name = htmlentities($_POST['name']);
		$targetFolder = "../images/pub/";
		$targetFolders = "images/pub/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
		$table = "adverts";
        $destinationArray = "Company,picture1,Date";
        $sourceArray = stringCopact2($name,$piconein);
        $query = insertDatas($table,$destinationArray,$sourceArray);
        $res = mysqli_query($dbcon,$query);
		if($res){
			echo "<meta http-equiv='refresh' content='0;url=../admin/pub.php?yes=0#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/pub.php?no=0'>";
		}
	}
    //Edit
    if(isset($_POST['pooo'])){
        $title = htmlentities($_POST['title']);
		$cat= htmlentities($_POST['sport']);
        $place = htmlentities($_POST['place']);
        $author=htmlentities($_POST['author']);
        $content = mysqli_real_escape_string($dbcon,$_POST['content']);
        $content = htmlspecialchars($content);
		$table = "news";
        $target = htmlentities($_POST['target']);
        $target_col = "ID";
        $data_to_inserts="Title='$title' , Categorie='$cat', Place='$place', Author='$author', Content='$content', Date = now()";
        $query = updateDatas($table,$data_to_inserts,$target_col,$target);
        $res = mysqli_query($dbcon,$query);
		if($res){
			echo "<meta http-equiv='refresh' content='0;url=../admin/edit.php?id=".$target."&&yes=0#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/edit.php?id=".$target."&&yes=0#here'>";
		}
	}
    //Comments
    if(isset($_POST['btnBooking'])){
        $name = htmlentities($_POST['name']);
        $article = htmlentities($_POST['article']);
        $phone = htmlentities($_POST['phone']);
        $email = htmlentities($_POST['email']);
        $message = htmlentities($_POST['message']);
        $table = "comments";
        $destinationArray = "User,Content,Article,Phone,Email,counter,Date";
        $sourceArray = stringCopact3($name,$message,$article).",".stringCopact3($phone,$email,1);
        $query = insertDatas($table,$destinationArray,$sourceArray);
        $res = mysqli_query($dbcon,$query);
        if($res){
			echo "<meta http-equiv='refresh' content='0;url=../single.php?art=".$article."&&yes=1&&hafahfhgsfhgsdfhgs#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../single.php?art=".$article."&&no=1&&hafahfhgsfhgsdfhgs#here'>";
		}
    }
	?>