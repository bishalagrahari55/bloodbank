
<?php
include_once 'topconnect.php';
include_once 'header.php';
if (isset($_REQUEST['read'])) {
    $eid = $_GET['read'];
    $status = "1";
    $sql = "UPDATE tblcontactusquery SET status = '$status' WHERE  id='$eid'";
    $query = mysqli_query($connection, $sql);
    $msg = "You have Successfully read the message..";
}
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
                Contact Us Detail
                <small>Query Page</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="members.php">Query List</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Overall Queries list</h3>
                            <h3 class="box-title pull-right"><?php
                                if (isset($error)) {
                                    echo $err . "<script>setTimeout(\"location.href = 'contactus.php';\",2500);</script>";
                                } else if (isset($msg)) {
                                    echo $msg . "<script>setTimeout(\"location.href = 'contactus.php';\",2500);</script>";
                                }
                                ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="myTable" class="table table-bordered table-striped ">
                                <thead class="bg-red">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>ContactNo</th>
                                        <th>Message</th>
                                        <th>PostingDate</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query2 = "SELECT * FROM tblcontactusquery";
                                    $query3 = mysqli_query($connection, $query2);
                                    while ($rows = mysqli_fetch_array($query3)) {

                                        $fullname = $rows['name'];
                                        $email = $rows['EmailId'];
                                        $contact = $rows['ContactNumber'];
                                        $message = $rows['Message'];
                                        $pdate = $rows['PostingDate'];
                                        $status = $rows['status'];
                                        $id = $rows['id'];
                                        ?>
                                        <tr class="<?php if($status == 0){echo "bg-black";}else{echo "";}?>">
                                            <td><?php echo ucfirst($fullname); ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $contact; ?></td>
                                            <td><?php echo $message; ?></td>
                                            <td><?php echo $pdate; ?></td>
                                            <td><?php
                                                if ($status == '1') {
                                                    echo "<span class='label label-success'>Read</span> ";
                                                    ?>
                                              &nbsp; &nbsp;   | &nbsp; &nbsp; <span class = 'label label-red '><a href = 'inform_donor.php?id=<?php echo $id; ?>' data-toggle="tooltip" title="Inform Donor" onclick = 'return confirm("Let Me Check the list of Donors Available..")'><i class = "fa fa-envelope "></i></a></span>
                                                <?php } else if ($status == '0') {
                                                    ?>
                                              <span class="text-lime"><a href="contactus.php?read=<?php echo $id; ?>" data-toggle="tooltip" title="Read" onclick="return confirm('Do you really want to Public this detail')" style="color:#FFF;"><i class="fa fa-eye-slash "></i></a></span>
                                                            <?php
                                                        }
                                                        ?></td>

                                        </tr>


                                        <?php
                                    }
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Member Name</th>
                                        <th>Member Email</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
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
                                                    $("#myTable").DataTable({
                                                        order:[[4,'desc']]
                                                    });

                                                });
</script>
</body>
</html>
