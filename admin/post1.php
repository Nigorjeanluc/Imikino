<?php
    require('control.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin | imikino.net</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="dashboard/vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/adapters/jquery.js"></script>
    <script src="dashboard/vendor/jquery/jquery.min.js"></script>
	<script src="dashboard/bootstrap/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
      h1,h2,h3,h4,h5,h6{
        font-family:cursive;
      }
      .files{
          margin-top:10px;
      }
    </style>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      <?php include('../opera/databaseadmin.php'); ?>
      
      <?php include('nav.php'); ?>

      <?php include('aside.php'); ?>
      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Post new articles</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <?php
                            $yes=isset($_REQUEST['yes']);
                            if($yes){
                                echo'
                                    <div class="alert alert-success alert-dismissable text-center">
                                        <button style="font-size:20px" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5 style="font-size:20px">Post added <a href="#" class="alert-link">More Details</a>.</h5>
                                    </div>';
                                    }
                        ?>
                        <form role="form" method="post" action="../opera/addsomething.php" enctype="multipart/form-data">
                            <div class="form-group text-center">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" placeholder="Title" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                                    <label>Type of sport</label>
                                    <select class="form-control" name="sport" required>
                                        <option value="">- Select the sport -</option>
                                        <option value="basketball">Basketball</option>
                                        <option value="football">Football</option>
                                        <option value="volleyball">Volleyball</option>
                                        <option value="rugby">Rugby</option>
                                        <option value="handball">Handball</option>
                                        <option value="swimming">Swimming</option>
                                        <option value="cricket">Cricket</option>
                                        <option value="cycling">Cycling</option>
                                        <option value="athletic">Athletic</option>
                                        <option value="other">Others</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                                    <label>Place</label>
                                    <select class="form-control" name="place" required>
                                        <option value="">- Select the place -</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Africa">Africa</option>
                                        <option value="Asia">Asia</option>
                                        <option value="America">America</option>
                                        <option value="England">England</option>
                                        <option value="Spain">Spain</option>
                                        <option value="France">France</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ahasigaye">Ahasigaye hose</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <label>Author</label>
                                <input class="form-control" type="text" name="author" placeholder="Author" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
                                    <label>Select pictures of your article ordered like this respectively...</label>
                                    <input name="picone" class="form-control" type="file" required>
                                    <input name="pictwo" class="form-control files" type="file">
                                    <input name="picthree" class="form-control files" type="file">
                                    <input name="picfour" class="form-control files" type="file">
                                    <input name="picfive" class="form-control files" type="file">
                                </div>
                                <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
                                    <label>More about pictures of your article ordered like this respectively...</label>
                                    <input name="piconetxt" class="form-control" placeholder="Picture One" type="text" required>
                                    <input name="pictwotxt" class="form-control" placeholder="Picture Two" type="text">
                                    <input name="picthreetxt" class="form-control" placeholder="Picture Three" type="text">
                                    <input name="picfourtxt" class="form-control" placeholder="Picture Four" type="text">
                                    <input name="picfivetxt" class="form-control" placeholder="Picture Five" type="text">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 text-center">
                                    <label>Edit your post here</label>
                                    <textarea class="form-control ckeditor" name="content"></textarea>
                                </div>
                            </div>
                        </div>
                    <div class="box-footer text-center"><p><input type="submit" name="poo" class="btn btn-success" value="Post the article"> | <input class="btn btn-default" type="reset" value="Reset"></p></div>
                        </form>
                </div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php require('footer.php'); ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="editor.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    
  </body>
</html>