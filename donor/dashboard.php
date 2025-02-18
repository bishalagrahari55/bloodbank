<?php
include_once 'topconnect.php';
include_once 'header.php';
?>

<div class="wrapper">
    <?php
    include_once 'sidebar_header.php'; //Include Sidebar_header.php-->
    include_once 'sidebar.php'; //Include Sidebar.php-->
    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <?php
                    $sqlu = mysqli_query($connection, "select * from users where Status = 'Active' and Role = 1");
                    $rowu = mysqli_num_rows($sqlu);
                    ?>
                    
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?php echo $rowu;?></h3>
                            <p>Total Users</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <?php
                    $sqlb = mysqli_query($connection, "select * from tblbloodgroup ");
                    $rowb = mysqli_num_rows($sqlb);
                    ?>
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $rowb;?></h3>
                            <p>Total Blood Group</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <?php
                    $sqlb = mysqli_query($connection, "select * from tblbloodgroup ");
                    $rowb = mysqli_num_rows($sqlb);
                    ?>
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?php echo $rowu;?></h3>
                            <p>Ready To Donate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <?php
                    $sqls = mysqli_query($connection, "select distinct(UID) from system_log  ");
                    $rows = mysqli_num_rows($sqls);
                    ?>
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3><?php echo $rows;?></h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    
    <?php
    include_once "copyright.php";
    ?>
</div>
<!-- ./wrapper -->
<?php
include_once 'footer.php';

?>
