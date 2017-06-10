                    <div class="widget wid-post">
						<div class="heading"><h4>Inkuru ziheruka</h4></div>
						<div class="content">
						<?php
										include('opera/truncatee.php');
										$sql = mysqli_query($dbcon,"SELECT * FROM news ORDER BY ID DESC LIMIT 0,3");
										while($row = mysqli_fetch_array($sql)){
											echo'
							<div class="post wrap-vid">
								<div class="zoom-container">
									<div class="zoom-caption">
										<span class="vimeo">'.ucfirst($row['Categorie']).'</span>
										<a href="single.php?art='.$row['ID'].'">
											<i class="fa fa-file-text-o fa-5x" style="color: lightskyblue"></i>
										</a>
										<p style="font-size:12px">'.truncatee(ucfirst($row['Title'])).'</p>
									</div>
									<center><img style="position:relative;height:100px" src="'.$row['picture1'].'" /></center>
								</div>
								<div class="wrapper">
									<h3 class="vid-name"><a href="#">'.truncatee(ucfirst($row['Title'])).'</a></h3>
									<div class="info">
										<h5>By <a href="single.php?art='.$row['ID'].'">'.ucfirst($row['Author']).'</a></h5>
										<span><i class="fa fa-calendar"></i>'.$row['Date'].'</span> 
										<span><i class="fa fa-eye"></i>'.$row['Views'].' Views</span>
									</div>
								</div>
							</div>';
										}
						?>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget ">
						<div class="heading"><h4>Izikuzwe cyane</h4></div>
						<div class="content">
						<?php
										$sql = mysqli_query($dbcon,"SELECT * FROM news WHERE Views>=10 ORDER BY Views DESC LIMIT 0,3");
										while($row = mysqli_fetch_array($sql)){
											echo'
							<div class="post wrap-vid">
								<div class="zoom-container">
									<div class="zoom-caption">
										<span class="vimeo">'.ucfirst($row['Categorie']).'</span>
										<a href="single.php?art='.$row['ID'].'">
											<i class="fa fa-file-text-o fa-5x" style="color: lightskyblue"></i>
										</a>
										<p style="font-size:12px">'.truncatee(ucfirst($row['Title'])).'</p>
									</div>
									<center><img style="position:relative;height:100px" src="'.$row['picture1'].'" /></center>
								</div>
								<div class="wrapper">
									<h3 class="vid-name"><a href="#">'.truncatee(ucfirst($row['Title'])).'</a></h3>
									<div class="info">
										<h5>By <a href="single.php?art='.$row['ID'].'">'.ucfirst($row['Author']).'</a></h5>
										<span><i class="fa fa-calendar"></i>'.$row['Date'].'</span> 
										<span><i class="fa fa-eye"></i>'.$row['Views'].' Views</span>
									</div>
								</div>
							</div>';
										}
						?>
						</div>
					</div>
					<img src="images/banner-2.jpg" class="img-responsive"/>
					<img src="images/banner-2.jpg" class="img-responsive"/>