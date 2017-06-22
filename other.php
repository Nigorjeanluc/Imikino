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
	
    <title>Ahasigaye | Imikino.com</title>
	
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
<header>
	<!--Top-->
	<?php include('navtop.php'); ?>
	
	<!--Navigation-->
    <?php include('nav.php'); ?>
</header>	
	<!--<div class="featured container">
		<div class="row">
			
		</div>
	</div>-->
	
	<!-- /////////////////////////////////////////Content -->
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="archive-page container">
		<div class="">
			<div class="row">
				<div id="main-content" class="col-md-8">
					<?php
						$sql = mysqli_query($dbcon,"SELECT * FROM news WHERE Place = 'Ahasigaye' ORDER BY ID DESC LIMIT 0,10");
						while($row = mysqli_fetch_array($sql)){
							echo'
					<div class="box">
						<a href="single.php?art='.$row['ID'].'"><h4 style="font-size:20px" class="vid-name">'.ucfirst($row['Title']).'</h4></a>
						<div class="info">
							<h5>By <a href="#">'.ucfirst($row['Author']).'</a></h5>
							<span><i class="fa fa-calendar"></i> June 12, 2015</span> 
							<span><i class="fa fa-comment"></i> 0 Comments</span>
							<span><i class="fa fa-eye"></i>'.$row['Views'].' Views</span>
						</div>
						<div class="wrap-vid">
							<div class="zoom-container">
								<div class="zoom-caption">
									<span class="vimeo">'.ucfirst($row['Categorie']).'</span>
									<a href="single.php?art='.$row['ID'].'">
										<i class="fa fa-file-text-o fa-5x" style="color: lightskyblue"></i>
									</a>
									<p>'.$row['Title'].'</p>
								</div>
								<div align="center"><img style="position:relative;height:150px" src="'.$row['picture1'].'" /></div>
							</div>
							<p>'.truncate($row['Content']).' <a href="single.php?art='.$row['ID'].'">MORE...</a></p>
						</div>
					</div>
					<hr class="line">';
						}
					?>
					<div class="box">
						<center>
						<!--<ul class="pagination">
							<li>
							  <a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							  </a>
							</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
							  <a href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							  </a>
							</li>
						</ul>-->
						</center>
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
