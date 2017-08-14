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
	
    <title>Homepage | imikino.net</title>
	
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
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-1410948886873143",
		enable_page_level_ads: true
	});
	</script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '465177240507172',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<header>
	<!--Top-->
	<?php include('navtop.php'); ?>
	
	<!--Navigation-->
    <?php include('nav.php'); ?>
</header>	
	<div class="featured container">
		<div class="row">
			<div class="col-sm-8">
				<!-- Carousel -->
				<div id="carousel-example-generic" class="carousel slide hidden-xs hidden-sm" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<?php echo'<a href="single.php?art='.$ids[0].'"><div align="center"><img style="position:relative;height:421px" src="'.$picture1[0].'" alt="No picture"></div></a>';?>
							<!-- Static Header -->
							<div class="header-text hidden-xs">
								<div class="col-md-12 text-center">
									<a href="<?php echo'single.php?art='.$ids[0] ?>"><h2 style="background-color: seagreen"><?php echo $title[0]; ?></h2></a>
									<br>
								</div>
							</div><!-- /header-text -->
						</div>
						<div class="item">
							<?php echo'<div align="center"><a href="single.php?art='.$ids[1].'"><img style="position:relative;height:421px" src="'.$picture1[1].'" alt="No picture"></a></div>';?>
							<!-- Static Header -->
							<div class="header-text hidden-xs">
								<div class="col-md-12 text-center">
									<a href="<?php echo'single.php?art='.$ids[1] ?>"><h2 style="background-color: seagreen"><?php echo $title[1]; ?></h2></a>
									<br>
								</div>
							</div><!-- /header-text -->
						</div>
						<div class="item">
							<?php echo'<div align="center"><a href="single.php?art='.$ids[2].'"><img style="position:relative;height:421px" src="'.$picture1[2].'" alt="No picture"></a></div>';?>
							<!-- Static Header -->
							<div class="header-text hidden-xs">
								<div class="col-md-12 text-center">
									<a href="<?php echo'single.php?art='.$ids[2] ?>"><h2 style="background-color: seagreen"><?php echo $title[2]; ?></h2></a>
									<br>
								</div>
							</div><!-- /header-text -->
						</div>
						<div class="item">
							<?php echo'<div align="center"><a href="single.php?art='.$ids[3].'"><img style="position:relative;height:421px" src="'.$picture1[3].'" alt="No picture"></a></div>';?>
							<!-- Static Header -->
							<div class="header-text hidden-xs">
								<div class="col-md-12 text-center">
									<a href="<?php echo'single.php?art='.$ids[3] ?>"><h2 style="background-color: seagreen"><?php echo $title[3]; ?></h2></a>
									<br>
								</div>
							</div><!-- /header-text -->
						</div>
						<div class="item">
							<?php echo'<div align="center"><a href="single.php?art='.$ids[4].'"><img style="position:relative;height:421px" src="'.$picture1[4].'" alt="No picture"></a></div>';?>
							<!-- Static Header -->
							<div class="header-text hidden-xs">
								<div class="col-md-12 text-center">
									<a href="<?php echo'single.php?art='.$ids[4] ?>"><h2 style="background-color: seagreen"><?php echo $title[4]; ?></h2></a>
									<br>
								</div>
							</div><!-- /header-text -->
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div><!-- /carousel -->
			</div>
			<div class="col-sm-4" >
				<div id="owl-demo-1" class="owl-carousel">
				<?php
					$sql = mysqli_query($dbcon,"SELECT * FROM adverts ORDER BY ID DESC LIMIT 0,3");
					while($row = mysqli_fetch_array($sql)){
						echo'
					<img style="height:240px" src="'.$row['picture1'].'" />
						';
					}
				?>
				</div>
				<!--<img src="images/banner.jpg" />-->
			</div>
		</div>
	</div>
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page container">
		<div class="row">
			<div id="main-content"><!-- background not working -->
				<div class="col-md-6">
					<div class="box">
						<div class="box-header header-natural">
							<h2>Inkuru ziheruka kwandikwa</h2>
						</div>
						<div class="box-content">
							<div class="row hidden-xs hidden-sm">
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[5].'"><img style="position:relative;height:150px" src="'.$picture1[5].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[5].'">'.truncateee(ucfirst($title[5])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[5],0,10) ?> /  <i class="fa fa-eye"></i> <?php echo $views[5]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[6].'"><img style="position:relative;height:150px" src="'.$picture1[6].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[6].'">'.truncateee(ucfirst($title[6])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[6],0,10) ?> /  <i class="fa fa-eye"></i> <?php echo $views[6]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[7].'"><img style="position:relative;height:150px" src="'.$picture1[7].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[7].'">'.truncateee(ucfirst($title[7])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[7],0,10) ?> /  <i class="fa fa-eye"></i> <?php echo $views[7]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[8].'"><img style="position:relative;height:150px" src="'.$picture1[8].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[8].'">'.truncateee(ucfirst($title[8])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[8],0,10) ?> /  <i class="fa fa-eye"></i> <?php echo $views[8]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[9].'"><img style="position:relative;height:150px" src="'.$picture1[9].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[9].'">'.truncateee(ucfirst($title[9])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[9],0,10) ?> /  <i class="fa fa-eye"></i> <?php echo $views[9]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[10].'"><img style="position:relative;height:150px" src="'.$picture1[10].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[10].'">'.truncateee(ucfirst($title[10])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[10],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[10]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[11].'"><img style="position:relative;height:150px" src="'.$picture1[11].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[11].'">'.truncateee(ucfirst($title[11])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[11],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[11]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[12].'"><img style="position:relative;height:150px" src="'.$picture1[12].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[12].'">'.truncateee(ucfirst($title[12])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[12],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[12]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[13].'"><img style="position:relative;height:150px" src="'.$picture1[13].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[13].'">'.truncateee(ucfirst($title[13])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[13],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[13]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[14].'"><img style="position:relative;height:150px" src="'.$picture1[14].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[14].'">'.truncateee(ucfirst($title[14])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[14],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[14]; ?> Views</span></div>
								</div>
							</div>
							<div class="row hidden-md hidden-lg">
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[0].'"><img style="position:relative;height:150px" src="'.$picture1[0].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[0].'">'.truncateee(ucfirst($title[0])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[0],0,10) ?> /  <i class="fa fa-eye"></i> <?php echo $views[0]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[1].'"><img style="position:relative;height:150px" src="'.$picture1[1].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[1].'">'.truncateee(ucfirst($title[1])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[1],0,10) ?> /  <i class="fa fa-eye"></i> <?php echo $views[1]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[2].'"><img style="position:relative;height:150px" src="'.$picture1[2].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[2].'">'.truncateee(ucfirst($title[2])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[2],0,10) ?> /  <i class="fa fa-eye"></i> <?php echo $views[2]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[3].'"><img style="position:relative;height:150px" src="'.$picture1[3].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[3].'">'.truncateee(ucfirst($title[3])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[3],0,10) ?> /  <i class="fa fa-eye"></i> <?php echo $views[3]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[4].'"><img style="position:relative;height:150px" src="'.$picture1[4].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[4].'">'.truncateee(ucfirst($title[4])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[4],0,10) ?> /  <i class="fa fa-eye"></i> <?php echo $views[4]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[5].'"><img style="position:relative;height:150px" src="'.$picture1[5].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[5].'">'.truncateee(ucfirst($title[5])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[5],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[5]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[6].'"><img style="position:relative;height:150px" src="'.$picture1[6].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[6].'">'.truncateee(ucfirst($title[6])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[6],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[6]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[7].'"><img style="position:relative;height:150px" src="'.$picture1[7].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[7].'">'.truncateee(ucfirst($title[7])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[7],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[7]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[8].'"><img style="position:relative;height:150px" src="'.$picture1[8].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[8].'">'.truncateee(ucfirst($title[8])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[8],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[8]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[9].'"><img style="position:relative;height:150px" src="'.$picture1[9].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[9].'">'.truncateee(ucfirst($title[9])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[9],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[9]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[10].'"><img style="position:relative;height:150px" src="'.$picture1[10].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[10].'">'.truncateee(ucfirst($title[10])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[10],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[10]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[11].'"><img style="position:relative;height:150px" src="'.$picture1[11].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[11].'">'.truncateee(ucfirst($title[11])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[11],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[11]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[12].'"><img style="position:relative;height:150px" src="'.$picture1[12].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[12].'">'.truncateee(ucfirst($title[12])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[12],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[12]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[13].'"><img style="position:relative;height:150px" src="'.$picture1[13].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[13].'">'.truncateee(ucfirst($title[13])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[13],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[13]; ?> Views</span></div>
								</div>
								<div style="padding:5px" class="col-md-6">
									<?php echo'<div align="center"><a href="single.php?art='.$ids[14].'"><img style="position:relative;height:150px" src="'.$picture1[14].'" /></a></div>';?>
									<?php echo'<h3 class="text-center"><a href="single.php?art='.$ids[14].'">'.truncateee(ucfirst($title[14])).'</a></h3>';?>
									<div align="center"><span><i class="fa fa-calendar"></i> <?php echo substr($Date[14],0,10) ?> /   <i class="fa fa-eye"></i><?php echo $views[14]; ?> Views</span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-header header-photo">
							<h2>Amafoto</h2>
						</div>
						<div class="box-content">
						<?php
							$pipsql = mysqli_query($dbcon,"SELECT * FROM news ORDER BY ID DESC LIMIT 0,10");
							$did = array('','','','','','','','','','');
							$picture11 = array('','','','','','','','','','');
							$i = 0;
							while($myrow = mysqli_fetch_array($pipsql)){
									$did[$i]= $myrow['ID'];
									$picture11[$i]= $myrow['picture1'];
									$i++;
							}
							?>
							<div id="owl-demo-2" class="owl-carousel">
								<div class="item">
									<?php echo '<center><a href="single.php?art='.$did['0'].'"><img style="position:relative;height:100px" src="'.$picture11['0'].'" /></a></center>';?>
									<?php echo '<center><a href="single.php?art='.$did['1'].'"><img style="position:relative;height:100px" src="'.$picture11['1'].'" /></a></center>';?>
								</div>
								<div class="item">
									<?php echo '<center><a href="single.php?art='.$did['2'].'"><img style="position:relative;height:100px" src="'.$picture11['2'].'" /></a></center>';?>
									<?php echo '<center><a href="single.php?art='.$did['3'].'"><img style="position:relative;height:100px" src="'.$picture11['3'].'" /></a></center>';?>
								</div>
								<div class="item">
									<?php echo '<center><a href="single.php?art='.$did['4'].'"><img style="position:relative;height:100px" src="'.$picture11['4'].'" /></a></center>';?>
									<?php echo '<center><a href="single.php?art='.$did['5'].'"><img style="position:relative;height:100px" src="'.$picture11['5'].'" /></a></center>';?>
								</div>
								<div class="item">
									<?php echo '<center><a href="single.php?art='.$did['6'].'"><img style="position:relative;height:100px" src="'.$picture11['6'].'" /></a></center>';?>
									<?php echo '<center><a href="single.php?art='.$did['7'].'"><img style="position:relative;height:100px" src="'.$picture11['7'].'" /></a></center>';?>
								</div>
								<div class="item">
									<?php echo '<center><a href="single.php?art='.$did['8'].'"><img style="position:relative;height:100px" src="'.$picture11['8'].'" /></a></center>';?>
									<?php echo '<center><a href="single.php?art='.$did['9'].'"><img style="position:relative;height:100px" src="'.$picture11['9'].'" /></a></center>';?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar">
				<div class="col-md-3">
					<!-- Start Widget -->
					<div class="widget wid-vid">
						<div class="heading">
							<h4>Izisurwa cyane</h4>
						</div>
						<div class="content">
							<div class="row">
								<div class="col-md-12 text-center">
									<?php
										$sql = mysqli_query($dbcon,"SELECT * FROM news WHERE Views>=10 ORDER BY Views DESC LIMIT 0,2");
										while($row = mysqli_fetch_array($sql)){
											echo'
									<div class="wrap-vid">
										<div class="zoom-container">
											<div class="zoom-caption">
												<span class="vimeo">'.ucfirst($row['Categorie']).'</span>
												<a href="single.php?art='.$row['ID'].'">
													<i class="fa fa-file-text-o fa-5x" style="color: lightskyblue"></i>
												</a>
												<p style="font-size:12px">'.truncateee(ucfirst($row['Title'])).'</p>
											</div>
											<div align="center"><img style="position:relative;height:150px" src="'.$row['picture1'].'" /></div>
										</div>
										<div class="info">
											<h5>By <a href="#">'.ucfirst($row['Author']).'</a></h5>
											<span><i class="fa fa-calendar"></i>'.$row['Date'].'</span> 
											<span><i class="fa fa-eye"></i>'.$row['Views'].'</span>
										</div>
									</div>
											';
										}
									?>
								</div>
							</div>
						</div>
					</div>
									<meta name="propeller" content="b9e59973216ba17213937d0a9ffa9800" />
					<!-- Start Widget -->
					<!--<div class="widget wid-gallery">
						<div class="heading"><h4>Gallery</h4></div>
						<div class="content">
							<div class="col-md-4">
								<div class="row">
									<a href="#"><img src="images/14.jpg" /></a>
									<a href="#"><img src="images/15.jpg" /></a>
									<a href="#"><img src="images/20.jpg" /></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="row">
									<a href="#"><img src="images/16.jpg" /></a>
									<a href="#"><img src="images/17.jpg" /></a>
									<a href="#"><img src="images/21.jpg" /></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="row">
									<a href="#"><img src="images/18.jpg" /></a>
									<a href="#"><img src="images/19.jpg" /></a>
									<a href="#"><img src="images/14.jpg" /></a>
								</div>
							</div>
						</div>
					</div>-->
					<!-- Start Widget -->
					<!--<div class="widget wid-new-post">
						<div class="heading"><h4>New Posts</h4></div>
						<div class="content">
							<h6>Lorem Ipsum is simply dummy</h6>
							<img src="images/22.jpg" />
							<ul class="list-inline">
								<li><i class="fa fa-calendar"></i>25/3/2015</li> 
								<li><i class="fa fa-comments"></i>1,200</li>
							</ul>
							<p>Title should not overflow the content area A few things to check for: Non-breaking text in the...</p>
							<h6>Lorem Ipsum is simply dummy</h6>
							<img src="images/23.jpg" />
							<ul class="list-inline">
								<li><i class="fa fa-calendar"></i>25/3/2015</li> 
								<li><i class="fa fa-comments"></i>1,200</li>
							</ul>
							<p>Title should not overflow the content area A few things to check for: Non-breaking text in the...</p>
							<h6>Lorem Ipsum is simply dummy</h6>
							<img src="images/24.jpg" />
							<ul class="list-inline">
								<li><i class="fa fa-calendar"></i>25/3/2015</li> 
								<li><i class="fa fa-comments"></i>1,200</li>
							</ul>
							<p>Title should not overflow the content area A few things to check for: Non-breaking text in the...</p>
						</div>
					</div>-->
					<!-- Start Widget -->
					<!--<div class="widget wid-recent-post">
						<div class="heading"><h4>Recent Posts</h4></div>
						<div class="content">
							<span>Creativity is about the journey <a href="#">your mind takes</a></span>
							<span>About the journey <a href="#">your mind</a></span>
							<span>The journey <a href="#">your</a></span>
							<span>Journey is about the journey <a href="#">your mind mind</a></span>
							<span>Creativity is about the journey <a href="#">your mind takes</a></span>
							<span>About the journey <a href="#">your mind</a></span>
							
						</div>
					</div>-->
				</div>
				<div class="col-md-3">
					<?php
						include('search.php');
					?>
					<!-- Start Widget -->
					<!--<div class="widget wid-tags">
						<div class="heading"><h4>Tags</h4></div>
						<div class="content">
							<a href="#">animals</a>
							<a href="#">cooking</a>
							<a href="#">countries</a>
							<a href="#">home</a>
							<a href="#">likes</a>
							<a href="#">photo</a>
							<a href="#">link</a>
							<a href="#">video</a>
							<a href="#">travel</a>
							<a href="#">images</a>
							<a href="#">love</a>
							<a href="#">lists</a>
							<a href="#">makeup</a>
							<a href="#">media</a>
							<a href="#">password</a>
							<a href="#">pagination</a>
							<a href="#">pictures</a>
						</div>
					</div>-->
					<!-- Start Widget -->
					<!--<div class="widget wid-comment">
						<div class="heading"><h4>Top Comments</h4></div>
						<div class="content">
							<div class="post">
								<a href="single.php?art='.$row['ID'].'">
									<img src="images/ava-1.jpg" class="img-circle"/>
								</a>
								<div class="wrapper">
									<a href="#"><h5>Curabitur tincidunt porta lorem.</h5></a>
									<ul class="list-inline">
										<li><i class="fa fa-calendar"></i>25/3/2015</li> 
										<li><i class="fa fa-thumbs-up"></i>1,200</li>
									</ul>
								</div>
							</div>
							<div class="post">
								<a href="single.php?art='.$row['ID'].'">
									<img src="images/ava-2.png" class="img-circle"/>
								</a>
								<div class="wrapper">
									<a href="#"><h5>Curabitur tincidunt porta lorem.</h5></a>
									<ul class="list-inline">
										<li><i class="fa fa-calendar"></i>25/3/2015</li> 
										<li><i class="fa fa-thumbs-up"></i>1,200</li>
									</ul>
								</div>
							</div>
							<div class="post">
								<a href="single.php?art='.$row['ID'].'">
									<img src="images/ava-3.jpeg" class="img-circle"/>
								</a>
								<div class="wrapper">
									<a href="#"><h5>Curabitur tincidunt porta lorem.</h5></a>
									<ul class="list-inline">
										<li><i class="fa fa-calendar"></i>25/3/2015</li> 
										<li><i class="fa fa-thumbs-up"></i>1,200</li>
									</ul>
								</div>
							</div>
							<div class="post">
								<a href="single.php?art='.$row['ID'].'">
									<img src="images/ava-4.jpg" class="img-circle"/>
								</a>
								<div class="wrapper">
									<a href="#"><h5>Curabitur tincidunt porta lorem.</h5></a>
									<ul class="list-inline">
										<li><i class="fa fa-calendar"></i>25/3/2015</li> 
										<li><i class="fa fa-thumbs-up"></i>1,200</li>
									</ul>
								</div>
							</div>
						</div>
					</div>-->
					<!-- Start Widget -->
					<!--<div class="widget wid-banner">
						<div class="content">
							<img src="images/banner-2.jpg" class="img-responsive"/>
						</div>
					</div>-->
					<!---- Start Widget ---->
					<!--<div class="widget wid-categoty">
						<div class="heading"><h4>Category</h4></div>
						<div class="content">
							<select class="col-md-12">
								<option>Mustard</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
						</div>
					</div>-->
					<!---- Start Widget ---->
					<div class="widget wid-calendar">
						<div class="heading"><h4>Karindari</h4></div>
						<div class="content">
							<center><form action="" role="form">        
								<div class="">
									<div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">                </div>
									<input type="hidden" id="dtp_input2" value="" /><br/>
								</div>
							</form></center>
						</div>
					</div>
					<meta name="propeller" content="b9e59973216ba17213937d0a9ffa9800" />
			</div>
		</div>
	</div>

	<?php include('footer.php'); ?>
	<!-- Footer -->
	
	<!-- JS -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo-1").owlCarousel({
        autoPlay: 3000,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [400,1]
      });
	  $("#owl-demo-2").owlCarousel({
        autoPlay: 3000,
        items : 3,
        
      });
    });
    </script>
    <script src="dashboard/dist/js/sb-admin-2.js"></script>
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
	<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
</body>
</html>
