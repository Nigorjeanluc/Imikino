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
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">Main Title</th>
                  <th class="text-center">Main Picture</th>
                  <th class="text-center">Comments </th>
                  <th class="text-center">Number of Views</th>
                  <th class="text-center">Control </th>
                </tr>
              </thead>
              <tbody>
              <?php
                include("../connect.php");
                $sqli="SELECT * FROM news INNER JOIN comments ON news.ID = comments.Article ORDER BY comments.ID DESC";
                $result=mysqli_query($dbcon,$sqli);
                while ($row=mysqli_fetch_assoc($result)) {
                  $sid = $row['ID'];
                  $_sql = "UPDATE comments SET counter= 0 WHERE ID='$sid'";
						      mysqli_query( $dbcon,$_sql);
                  echo'
                    <tr class="odd gradeX">
                      <td class="text-center">'.ucfirst($row["Title"]).'</td>
                      <td class="text-center"><img class="img-rounded" style="position:relative;height:100px" src="../'.$row["picture1"].'"</td>
                      <td style="position:relative" class="text-center">'.$row["Content"].'</td>
                      <td class="text-center">'.ucfirst($row["Views"]).'</td>
                      <td class="text-center">
                        <p><a href="more.php?id='.$row['Article'].'" class="btn bg-olive">More</a></p>
                      </td>
                    </tr>';
                    }
              ?>
              </tbody>
            </table>
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