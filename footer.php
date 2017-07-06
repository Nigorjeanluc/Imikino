<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-footer footer-1">
						<div class="footer-heading"><h1><span style="color: #fff;">NEWSPAPER</span></h1></div>
						<div class="content">
							<p>Never missed any post published in our site. Subscribe to our daily newsletter now.</p>
							<strong>Email address:</strong>
							<form action="#" method="post">
								<input type="text" name="your-name" value="" size="40" placeholder="Your Email" />
								<input type="submit" value="SUBSCRIBE" class="btn btn-3" />
							</form>
						</div>
					</div>
					<div class="col-md-4 col-footer footer-2">
						<div class="footer-heading"><h4>Categories</h4></div>
						<div class="content">
							<a href="basketball.php">Basketball</a>
							<a href="football.php">Football</a>
							<a href="volleyball.php">Volleyball</a>
							<a href="rugby.php">Rugby</a>
							<a href="handball.php">Handball</a>
							<a href="swimming.php">Swimming</a>
							<a href="cricket.php">Cricket</a>
							<a href="cycling.php">Cycling</a>
							<a href="athletic.php">Athletism</a>
						</div>
					</div>
					<div class="col-md-4 col-footer footer-3">
						<div class="footer-heading"><center><h4>Inkuru Zigezweho</h4></center></div>
						<div class="content">
							<ul>
							<?php
							$sql = mysqli_query($dbcon,"SELECT ID,Title FROM news ORDER BY ID DESC LIMIT 0,5");
							while($row = mysqli_fetch_array($sql)){
								echo'
								<li style="text-transform:uppercase"><center><a href="single.php?art='.$row['ID'].'">'.$row['Title'].'</a></center></li>
								';
							}
							?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copy-right">
			<p>Copyright 2017 - <a href="#" target="_blank" rel="nofollow">imikino.net</a> Designed by <a href="https://www.facebook.com/spartacus.amphoteric" target="_blank" rel="nofollow">Eng. Igor Jean-Luc NDIRAMIYE</a></p>
		</div>
	</footer>