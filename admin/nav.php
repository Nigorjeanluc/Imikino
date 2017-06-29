        <?php $name=$_SESSION['admin']; ?>
        <header class="main-header">
        <a href="index.php" class="logo"><b>Admin</b><span style="font-family:cursive;font-style:italic;text-shadow: 5px 4px 4px #0e540d;">
					<span style="color:lightskyblue">Imi</span><span style="color:gold">kino</span><span style="color:seagreen">.net</span>
				</span></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">
                  <?php
                    include("../connect.php");
                    $sqli="SELECT SUM(counter) FROM messages";
                    $result=mysqli_query($dbcon,$sqli);
                    while ($row=mysqli_fetch_assoc($result)) {
                      echo $row['SUM(counter)'];
                    }
                  ?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"><?php
                    include("../connect.php");
                    $sqli="SELECT SUM(counter) FROM messages";
                    $result=mysqli_query($dbcon,$sqli);
                    while ($row=mysqli_fetch_assoc($result)) {
                      echo "You have ".$row['SUM(counter)']." new messages";
                    }
                  ?>
                  </li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                    <?php
                      include("../connect.php");
                      $sqli="SELECT * FROM messages WHERE counter=1 ORDER BY Date DESC LIMIT 0,5 ";
                      $result=mysqli_query($dbcon,$sqli);
                      while ($row=mysqli_fetch_assoc($result)) {
                        echo '
                      <li><!-- start message -->
                          <div style="padding: 5px 5px 5px 5px" class="pull-left">
                            <!--<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>-->
                            <h4>
                              '.$row['User'].'
                              <small><i class="fa fa-clock-o"></i> '.$row['Date'].'</small>
                            </h4>
                            <p>'.substr($row['Content'],0,10).'...</p>
                          </div>
                      </li><!-- end message -->
                        ';
                      }
                    ?>
                    </ul>
                  </li>
                  <li class="footer"><a href="messages.php">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">
                  <?php
                    include("../connect.php");
                    $sqli="SELECT SUM(counter) FROM comments";
                    $result=mysqli_query($dbcon,$sqli);
                    while ($row=mysqli_fetch_assoc($result)) {
                      echo $row['SUM(counter)'];
                    }
                  ?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">
                  <?php
                    include("../connect.php");
                    $sqli="SELECT SUM(counter) FROM comments";
                    $result=mysqli_query($dbcon,$sqli);
                    while ($row=mysqli_fetch_assoc($result)) {
                      echo "You have ".$row['SUM(counter)']." new comments";
                    }
                  ?>
                  </li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="comment.php">View all</a></li>
                </ul>
              </li>
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../<?php echo $picture ?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../<?php echo $picture ?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <!--<small>Admin since Nov. 2012</small>-->
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!--<li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>-->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="login.php?no=1" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>