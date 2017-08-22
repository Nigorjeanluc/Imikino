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
            Control
            <small>all your journalist here...</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-6">
                <div class="box box-success">
                    <div class="box-body">
                    <?php
                        $yes=isset($_REQUEST['yess']);
                        if($yes){
                        echo'
                        <div class="alert alert-success alert-dismissable text-center">
                        <button style="font-size:20px" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5 style="font-size:20px">Journalist Deleted.</h5>
                        </div>';
                        }
                    ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th class="text-center">Username</th>
                                <th class="text-center">Picture</th>
                                <th class="text-center">Password</th>
                                <th class="text-center">Lastly modified</th>
                                <th class="text-center">Control</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include("../connect.php");
                                $sqli="SELECT * FROM journalist ORDER BY ID DESC";
                                $result=mysqli_query($dbcon,$sqli);
                                while ($row=mysqli_fetch_assoc($result)) {
                                echo'
                                    <tr class="odd gradeX">
                                    <td class="text-center">'.ucfirst($row["Username"]).'</td>
                                    <td class="text-center"><img class="img-rounded" style="position:relative;height:100px" src="../'.$row["Picture"].'"/></td>
                                    <td style="position:relative" class="text-center">'.$row["Password"].'</td>
                                    <td class="text-center">'.$row["Date"].'</td>
                                    <td class="text-center">
                                        <p><button class="btn btn-primary" data-toggle="modal" data-target="#myModal'.$row['ID'].'">Delete</button></p>
                                    </td>
                                    </tr>';
                                    echo'
                                    <div class="modal fade" id="myModal'.$row['ID'].'" tabindex="-1" role="dialog" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div style="background-color:white" class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">'.ucfirst($row['Username']).'</h4>
                                        </div>
                                        <div class="modal-content">
                                        <div style="padding:5px" class="row text-center">
                                        <div class="col-md-12"><img class="img-rounded" style="position:relative;height:100px;" src="../'.$row["Picture"].'"/></div>
                                        <div class="col-md-12"><p>Do you really want to delete this?</p><p><a href="../opera/delproduct.php?dellll='.$row['ID'].'" class="btn btn-success">Delete</a> | <button type="button" class="btn bg-orange" data-dismiss="modal">Cancel</button></p></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>';
                                    }
                            ?>
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box box-primary">
                    <div class="box-body">
                    <?php
                        $yes=isset($_REQUEST['yes']);
                        if($yes){
                        echo'
                        <div class="alert alert-success alert-dismissable text-center">
                        <button style="font-size:20px" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5 style="font-size:20px">Journalist added.</h5>
                        </div>';
                        }
                    ?>
                        <form role="form" method="post" action="../opera/addsomething.php" enctype="multipart/form-data">
                            <div class="form-group text-center">
                                <label>Journalist's name</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter journalist's name here..." required>
                            </div>
                            <div class="form-group text-center">
                                <label>Select a picture...</label>
                                <input name="picone" class="form-control" type="file" required>
                            </div>
                            <div class="form-group text-center">
                                <label>Give him/her a password</label>
                                <input name="pass" class="form-control" type="password" required>
                            </div>
                        </div>
                    <div class="box-footer text-center"><p><input type="submit" name="jour" class="btn btn-success" value="Add"> | <input class="btn btn-default" type="reset" value="Reset"></p></div>
                        </form>
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