 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../<?php echo $picture ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $name; ?></p>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search articles..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="editdel.php"><i class="fa fa-th-list"></i> History
              <span class="label label-primary pull-right">
              <?php
                include("../connect.php");
                $sqli="SELECT SUM(counter) FROM news";
                $result=mysqli_query($dbcon,$sqli);
                while ($row=mysqli_fetch_assoc($result)) {
                  echo $row['SUM(counter)'];
                }
              ?>
              </span></a>
            </li>
            <li>
              <a href="post.php">
                <i class="fa fa-files-o"></i>
                <span>Post new article</span>
              </a>
            </li>
            <li>
              <a href="comment.php">
                <i class="fa fa-files-o"></i>
                <span>Comments</span>
                <span class="label label-success pull-right">
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
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>