<div class="featured container">
		<div id="owl-demo" class="owl-carousel">
        <?php
                    $pipsql = mysqli_query($dbcon,"SELECT * FROM news ORDER BY ID DESC LIMIT 0,9");
                        while($row=mysqli_fetch_array($pipsql)){
                            echo'
                <div class="item">
                    <div class="zoom-container">
                        <div class="zoom-caption">
                            <span class="vimeo">'.ucfirst($row['Categorie']).'</span>
                            <a href="single.php?art='.$row['ID'].'">
                                <i class="fa fa-file-text-o fa-5x" style="color: lightskyblue"></i>
                            </a>
                            <p style="font-size:11px">'.truncatee(ucfirst($row['Title'])).'</p>
                        </div>
                        <img style="position:relative;height:150px" src="'.$row['picture1'].'" />
                    </div>
                </div>
                            ';
                        }
                ?>
		</div>
	</div>