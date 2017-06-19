<?php
    require('control.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin | Imikino.com</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
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
            <small>Comments made</small>
          </h1>
        </section>

        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
          <div class="box box-primary">
          <div class="box-body">
          <?php
              $yes=isset($_REQUEST['yess']);
                if($yes){
                  echo'
                    <div class="alert alert-success alert-dismissable text-center">
                      <button style="font-size:20px" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5 style="font-size:20px">Message deleted.</h5>
                    </div>';
                }
            ?>
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    Messages
                </div>
                <div class="panel-body">
                    <?php
                    $pipsql = mysqli_query($dbcon,"SELECT * FROM messages ORDER BY ID DESC");
                    while($row=mysqli_fetch_array($pipsql)){
                        $sid = $row['ID'];
                        $_sql = "UPDATE messages SET counter= 0 WHERE ID='$sid'";
						mysqli_query( $dbcon,$_sql);
							echo'
                    <h4>'.ucwords($row['User']).'</h4>
                    <blockquote>
                        <p>'.$row['Content'].'</p>
                        <small>Phone: '.$row['Phone'].', Email:
                            <cite title="Source Title">'.$row['Email'].'</cite>
                        </small>
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown">
                                    Actions
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="../opera/delproduct.php?dell='.$row['ID'].'">Delete</a></li>
                                    <li class="divider"></li>
                                    <!--<li><a href="#">Mark as unread</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </blockquote>';
					}
                    ?>
                </div>
            </div>
          </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php require('footer.php'); ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
  </body>
</html>