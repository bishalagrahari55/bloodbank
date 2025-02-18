
<?php
include_once 'topconnect.php';

if (isset($_REQUEST['hidden'])) {
    $eid = $_GET['hidden'];
    $status = "0";
    $sql = "UPDATE users SET Public = '$status' WHERE  uid='$eid'";
    $query = mysqli_query($connection, $sql);
    $msg = "Donor Successfully Been Hidden";
}


if (isset($_REQUEST['public'])) {
    $aeid = $_GET['public'];
    $status = 1;
    $sql = "UPDATE users SET Public = '$status' WHERE  uid='$aeid'";
    $query = mysqli_query($connection, $sql);
    $msg = "Donor Successfully Been Published";
}



if (isset($_GET['del'])) {
    $del = $_GET['del'];
    $del_chk_query = "SELECT * FROM users WHERE uid = '$del'";
    $del_chk_run = mysqli_query($connection, $del_chk_query);
    if (mysqli_num_rows($del_chk_run) > 0) {
        $del_query = "DELETE FROM `users` WHERE uid = '$del'";
        $del_run = mysqli_query($connection, $del_query);
        if (isset($_SESSION['UserName']) && $_SESSION['Role'] == 0) {
            if ($del_run) {
                $msg = "<span class='pull-right text-success'>Member has been deleted</span>";
            } else {
                $error = "<span class='pull-right text-danger'>User has not been deleted</span>";
            }
        }
    } else {
        header('location:dashboard.php');
    }
}


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
                Donor Detail
                <small>Donor Details Page</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="members.php">Donor List</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Overall Donor's list</h3>
                            <h3 class="box-title pull-right"><?php
                                if (isset($error)) {
                                    echo $err . "<script>setTimeout(\"location.href = 'members.php';\",2500);</script>";
                                } else if (isset($msg)) {
                                    echo $msg . "<script>setTimeout(\"location.href = 'members.php';\",2500);</script>";
                                }
                                ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="myTable" class="table table-bordered table-striped ">
                                <thead class="bg-red">
                                    <tr>
                                        <th>Donor Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Mobile</th>
                                        <th>Group</th>
                                        <th>Status</th>
                                        <th>Eligible To Donate</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query2 = "SELECT * FROM users where Status = 'Active' and Role = '1'";
                                    $query3 = mysqli_query($connection, $query2);
                                    while ($rows = mysqli_fetch_array($query3)) {

                                        $fullname = $rows['FullName'];
                                        $uname = $rows['UserName'];
                                        $status = $rows['Status'];
                                        $email = $rows['Email'];
                                        $group = $rows['BloodGroup'];
                                        $Mob = $rows['MobileNumber'];
                                        $eimage = $rows['DonorImage'];
                                        $id = $rows['UID'];
                                        $now = time(); // or your date as well
                                        $your_date = strtotime($rows['LastDonatedDate']);
                                        $datediff = $now - $your_date;
                                        $p = round($datediff / (60 * 60 * 24));
                                        ?>
                                        <tr>
                                            <td><?php echo ucfirst($fullname); ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $uname; ?></td>
                                            <td><?php echo $Mob; ?></td>
                                            <td><?php echo $group; ?></td>
                                            <td><?php
                                                if ($status == 'Active') {
                                                    echo "<span class='label label-success'>Active</span>";
                                                } else if ($status == 'DeActive') {
                                                    echo "<span class='label label-danger'>Not Active</span>";
                                                } else {
                                                    echo "<span class='label label-primary'>Suspended</span>";
                                                }
                                                ?></td>
                                            <td><?php
                                                if ($p > 90) {
                                                    echo " <span class='label label-success'>Eligible - $p Days</span>";
                                                } else {
                                                   echo  " <span class='label label-primary'>Not Eligible - $p Days</span>";
                                                }
                                                ?>
                                            </td>
                                            <td><span class="text-danger"><a href="editprofile.php?id=<?php echo $id; ?>"><i class="fa fa-pencil"></i></a></span> &nbsp; |  &nbsp;
                                                <span class="text-lime"><a href="members.php?del=<?php echo $id; ?>"><i class="fa fa-trash-o"></i></a></span> &nbsp; |  &nbsp;
                                                <?php
                                                if ($rows['Public'] == 0) {
                                                    ?>
                                                <span class="text-lime"><a href="members.php?public=<?php echo $id; ?>" onclick="return confirm('Do you really want to Public this detail')" data-toggle="tooltip" title="Hidden"><i class="fa fa-eye-slash"></i></a></span>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <span class="text-lime"><a href="members.php?hidden=<?php echo $id; ?>" onclick="return confirm('Do you really want to Hidden this detail')" data-toggle="tooltip" title="Publicly Available"><i class="fa fa-camera"></i></a></span>

                                                    <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>


                                        <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
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

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
                                                $(function () {
                                                    $("#myTable").DataTable();

                                                });
</script>
</body>
</html>
