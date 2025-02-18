<?php
ob_start();
session_start();
require_once '../connection.php';
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username='$username'";
$run = mysqli_query($con, $query);
$row = mysqli_fetch_array($run);
$date = $row['join_date']; //it will store in the form of array
$day = date('d');
$month = date('M');
$year = date('Y');
include_once 'header.php';
?>

<!-- Site wrapper -->
<div class="wrapper">
    
    <?php
    include_once 'sidebar_header.php';//Include Sidebar_header.php-->
    include_once 'sidebar.php';//Include Sidebar.php-->
    ?>
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>

                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    Start creating your amazing application!
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

   
<?php
include_once 'copyright.php';
?>
   
</div>
<!-- ./wrapper -->

<?php
include_once 'footer.php';
?>
