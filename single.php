<?php
	session_start();
	include('opera/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Igor Jean-Luc Ndiramiye">
	
    <title>Newspage | imikino.net</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
	 <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"  type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="js/bootstrap.min.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=632303256956449";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<header>
	<!--Top-->
	<?php include('navtop.php'); ?>
	
	<!--Navigation-->
    <?php include('nav.php'); ?>
</header>
	<?php //include('header.php'); ?>
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="single-page container">
		<div class="row">
			<div id="main-content" class="col-md-8">
				<div class="box">
				<?php
                 	$sid=$_REQUEST['art'];
					$pipsql = mysqli_query($dbcon,"SELECT * FROM news WHERE ID='$sid'");
                    while($row=mysqli_fetch_array($pipsql)){
                        $img= $row['picture1'];
						$pic1txt= $row['pic1_txt'];
						$img2= $row['picture2'];
						$pic2txt= $row['pic2_txt'];
						$img3= $row['picture3'];
						$pic3txt= $row['pic3_txt'];
						$img4= $row['picture4'];
						$pic4txt= $row['pic4_txt'];
						$img5= $row['picture5'];
						$pic5txt= $row['pic5_txt'];
						$title= $row['Title'];
						$contents= $row['Content'];
						$author = $row['Author'];
						$cat = $row['Categorie'];
						$place = $row['Place'];
						$date= $row['Date'];
						$views = $row['Views'];
						$views++;
						$_sql = "UPDATE news SET Views='$views' WHERE ID='$sid'";
						mysqli_query( $dbcon,$_sql);
                    }
                ?>
					<div class="wrap-vid">
						<?php 
							echo'<div align="center"><img style="position:relative;height:300px" src="'.$img.'" /></div>';
							echo'<p style="margin-top:5px" class="text-center"><b>'.ucfirst($pic1txt).'</b></p>';
						?>
					</div>
					<div style="margin-top:5px" class="share">
						<ul class="list-inline center">
							<li class="fb-share-button" data-href="https://imikino.streamupbox.com/single.php" data-layout="button" data-size="small" data-mobile-iframe="true"><a  class="fb-xfbml-parse-ignore btn btn-facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fimikino.streamupbox.com%2Fsingle.php&amp;src=sdkpreparse"><i class="fa fa-facebook"></i> Share</a>
								<!--<div><a>Share</a></div>-->
							</li>
							<li><a href="#" class="btn btn-twitter"><i class="fa fa-twitter"></i> Tweet</a></li>
							<li><a href="#" class="btn btn-google"><i class="fa fa-google-plus-square"></i> Google+</a></li>
							<li><a href="#" id="whatss" class="btn" style="background-color:green;color:white"><i class="fa fa-whatsapp"></i> WhatsApp</a></li>
						</ul>
					</div>
					<div class="line"></div><br />
					<div class="info text-center">
						<h5>By <a href="#"><?php echo ucfirst($author); ?></a></h5>
						<span><i class="fa fa-calendar"></i><?php echo $date; ?></span> 
						<span><i class="fa fa-eye"></i><?php echo $views; ?> Views</span>
					</div>
					<h4 class="vid-name text-center"><?php echo ucfirst($title); ?></h4>
					<p style="margin-top: 20px">
					<?php 
						echo $contents;
						if($img2!=="images/news/"){
							echo'<div align="center"><img style="position:relative;height:300px" src="'.$img2.'" /></div>';
							echo'<p style="margin-top:5px" class="text-center"><b>'.ucfirst($pic2txt).'</b></p>';
						}
						if($img3!=="images/news/"){
							echo'<div align="center"><img style="position:relative;height:300px" src="'.$img3.'" /></div>';
							echo'<p style="margin-top:5px" class="text-center"><b>'.ucfirst($pic3txt).'</b></p>';
						}
						if($img4!=="images/news/"){
							echo'<div align="center"><img style="position:relative;height:300px" src="'.$img4.'" /></div>';
							echo'<p style="margin-top:5px" class="text-center"><b>'.ucfirst($pic4txt).'</b></p>';
						}
						if($img5!=="images/news/"){
							echo'<div align="center"><img style="position:relative;height:300px" src="'.$img5.'" /></div>';
							echo'<p style="margin-top:5px" class="text-center"><b>'.ucfirst($pic5txt).'</b></p>';
						}
					?>
					</p>
					<div class="line"></div>
					<?php
                 	$sid=$_REQUEST['art'];
					$pipsql = mysqli_query($dbcon,"SELECT * FROM comments WHERE Article='$sid'");
					$pipsqli = mysqli_query($dbcon,"SELECT * FROM comments WHERE Article='$sid'");
					if(Null!=mysqli_fetch_assoc($pipsql)){
						echo '<h6 id="here" class="text-center">Ibyavuzwe kuri iyi nkuru</h6>';
						while($row=mysqli_fetch_array($pipsqli)){
							echo'
							<blockquote>
								<p>'.ucfirst($row['User']).'</p>
								<small style="color:black">'.ucfirst($row['Content']).'</small>
							</blockquote>
							';
						}
					}else{
						echo '<h6 id="here" class="text-center">Ntakiravugwa kuri iyi nkuru</h6><h6 align="center">Ba uwambere mugutanga igikekerezo cyawe kuri <span style="font-family:cursive;font-size:25px;font-style:oblique;text-shadow: 3px 4px 4px black;" class="logo">
					<span style="color:lightskyblue">IMI</span><span style="color:gold">KINO</span><span style="color:seagreen">.net</span>
				</span></h6>';
					}
                   
					?>
					<div class="line"></div>
					<?php
						if(isset($_REQUEST['yes'])){
							echo '<h5 class="text-center text-success">Igitekerezo cyawe cyakiriwe. Murakoze!</h5>';
						}elseif(isset($_REQUEST['no'])){
							echo '<h5 class="text-center text-danger">Igitekerezo cyawe ntago cyakiriwe, ongera ugerageze!</h5>';
							echo'
						<div class="comment">
						<h3 class="text-center">Gira icyo ubivugaho</h3>
						<form name="form1" method="post" action="opera/addsomething.php">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Andika Izina hano" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<input type="tel" class="form-control input-lg" name="phone" id="phone" placeholder="Andika Numero yawe hano" required="required" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Andika Email yawe hano" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" id="message" class="form-control input-lg" rows="4" cols="25" required="required"
										placeholder="Andika ubutumwa bwawe hano"></textarea>
									</div>						
									<button type="submit" class="btn btn-success btn-block" name="btnBooking" id="btnBbooking">
								Ohereza ubutumwa bwawe!</button>
								</div>
								<div style="visibility:hidden;" class="col-md-12">
									<div class="form-group">
									<input type="text" name="article" id="name" value="'.$sid.'" />
									</div>
								</div>
							</div>
						</form>
					</div>
							';
						}else{
							echo'
						<div class="comment">
						<h3 class="text-center">Gira icyo ubivugaho</h3>
						<form name="form1" method="post" action="opera/addsomething.php">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Andika Izina hano" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<input type="tel" class="form-control input-lg" name="phone" id="phone" placeholder="Andika Numero yawe hano" required="required" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Andika Email yawe hano" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" id="message" class="form-control input-lg" rows="4" cols="25" required="required"
										placeholder="Andika ubutumwa bwawe hano"></textarea>
									</div>						
									<button type="submit" class="btn btn-success btn-block" name="btnBooking" id="btnBbooking">
								Ohereza ubutumwa bwawe!</button>
								</div>
								<div style="visibility:hidden;" class="col-md-12">
									<div class="form-group">
									<input type="text" name="article" id="name" value="'.$sid.'" />
									</div>
								</div>
							</div>
						</form>
					</div>
							';
						}
					?>
				</div>
				
				<div class="box">
					<div class="box-header header-natural">
						<h2>INKURU BIJYANYE</h2>
					</div>
					<div class="box-content">
						<div class="row">
						<?php
						$sql = mysqli_query($dbcon,"SELECT * FROM news WHERE Place = '$place' OR Categorie = '$cat' ORDER BY ID DESC LIMIT 0,2");
						while($row = mysqli_fetch_array($sql)){
							echo'
							<div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span class="vimeo">'.ucfirst($row['Categorie']).'</span>
											<a href="single.php?art='.$row['ID'].'">
												<i class="fa fa-file-text-o fa-5x" style="color: lightskyblue"></i>
											</a>
											<p style="text-align:left">'.truncateee(ucfirst($row['Title'])).'</p>
										</div>
										<div align="center"><img style="position:relative;height:150px" src="'.$row['picture1'].'" /></div>
									</div>
									<h3 class="vid-name"><a href="#">'.ucfirst($row['Title']).'</a></h3>
									<div class="info">
										<h5>By <a href="#">'.ucfirst($row['Author']).'</a></h5>
										<span><i class="fa fa-calendar"></i>'.substr($row['Date'],0,10).'</span> 
										<span><i class="fa fa-eye"></i>'.$row['Views'].' Views</span>
									</div>
								</div>
							</div>
							';
						}
						?>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar" class="col-md-4">
				<?php include('search.php');?>
				<!---- Start Widget ---->
				<div class="widget wid-follow">
						<div class="heading"><h4>Follow Us</h4></div>
						<div class="content">
							<ul class="list-inline">
								<li>
									<a href="facebook.com/">
										<div class="box-facebook">
											<span class="fa fa-facebook fa-2x icon"></span>
											<span>1250</span>
											<span>Fans</span>
										</div>
									</a>
								</li>
								<li>
									<a href="facebook.com/">
										<div class="box-twitter">
											<span class="fa fa-twitter fa-2x icon"></span>
											<span>1250</span>
											<span>Fans</span>
										</div>
									</a>
								</li>
								<li>
									<a href="facebook.com/">
										<div id="whats" style="background-color:green" class="box-google">
											<span class="fa fa-whatsapp fa-2x icon"></span>
											<span>1250</span>
											<span>Fans</span>
										</div>
									</a>
								</li>
							</ul>
							<img src="images/banner.jpg" />
						</div>
					</div>
					<!---- Start Widget ---->
					<?php include('asidenews.php'); ?>
			</div>
		</div>
	</div>

	<?php include('footer.php'); ?>
	<!-- Footer -->
	
	<!-- JS -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
		$("#whats").mouseenter(function(){
			$(this).attr("style","background-color:black;color:white");
			$("#whats").mouseleave(function(){
				$(this).attr("style","background-color:green;color:white");
			});
		});
		$("#whatss").mouseenter(function(){
			$(this).attr("style","background-color:black;color:white");
			$("#whatss").mouseleave(function(){
				$(this).attr("style","background-color:green;color:white");
			});
		});
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 5,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,4]
      });

    });
    </script>
	
</body>
</html>
