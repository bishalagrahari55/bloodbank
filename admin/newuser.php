
<?php
include_once 'topconnect.php';
include_once 'header.php';

require_once '../PHPMailer/PHPMailerAutoload.php';

if (isset($_REQUEST['active'])) {
    $eid = $_GET['active'];
    $status = "Active";
    $sql = "UPDATE users SET Status = '$status',LastDonatedDate = '".date('Y-m-d')."' WHERE  uid='$eid'";
    $query = mysqli_query($connection, $sql);
    
    $sqlCheckEmail = "SELECT * FROM users WHERE UID = '$eid' LIMIT 1";
    $result = mysqli_query($connection, $sqlCheckEmail);
    $Count = mysqli_num_rows($result);
    if ($Count > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $member_name = $row['UserName'];
            $member_mail = $row['Email'];
            $member_active = $row['Status'];
            $pass = $row['Password'];
            $pdate = $row['JoinDate'];
            $group = $row['BloodGroup'];
            $subject = 'BBMS - You Are Activated';
            $message = '<div style="width:100%;padding:5px 10px 0px 10px;float:left;color:black; background-color:#ffffff;">
                        <p style="text-align:left;font-family:font-family: Calibri;color:#3c3b3b;font-weight:100%;">
                        <b>Hello ' . ucwords($member_name) . ',</b><br><br>
                        We have received a request that you want to be the donor.<br><br>
                        If you are not ready to join us, just ignore this email.<br><br>
                        Otherwise, you can use the  info below to login to your portal.<br>
                        </p>
                        <p style="font-family:Calibri;color:#000000;">
                        <span style="font-size:16px; font-weight:bold;">Your UserName </span><br><br>
                        <font style="color:#3399dd">
                        ' . $member_name . '<br>
                        </font>
                        </p>
                        <p style="font-family:Calibri;color:#000000;">
                        <span style="font-size:16px; font-weight:bold;">Email </span><br><br>
                        <font style="color:#3399dd">
                        ' . $member_mail . '<br>
                        </font>
                        </p>
                        <p style="font-family:Calibri;color:#000000;">
                        <span style="font-size:16px; font-weight:bold;">Password </span><br><br>
                        <font style="color:#3399dd">
                        ' . $pass . '<br>
                        </font>
                        </p>
                        <p style="font-family:Calibri;color:#000000;">
                        <span style="font-size:16px; font-weight:bold;">Your Status </span><br><br>
                        <font style="color:#3399dd">
                        ' . $member_active . '<br>
                        </font>
                        </p>
                        <p style="font-family:Calibri;color:#000000;">
                        <span style="font-size:16px; font-weight:bold;">Join Date </span><br><br>
                        <font style="color:#3399dd">
                        ' . $pdate . '<br>
                        </font>
                        </p>
                        <p style="font-family:Calibri;color:#000000;">
                        <span style="font-size:16px; font-weight:bold;">Blood Group </span><br><br>
                        <font style="color:#3399dd">
                        ' . $group . '<br>
                        </font>
                        </p>
                        <p style="font-family:Calibri;color:#000000;">
                        <span style="font-size:16px; font-weight:bold;">Please got to your profile and change the last blood donation date so that we can make you publicly available or else contact us at the below mention number.. </span><br><br>
                        </p>

</div>
<div style="width:100%;padding:5px 10px 0px 10px;float:left;color:black; background-color:#ffffff;">
<p style="text-align:left;font-family:Calibri;color:black;">
Thanks & Regards,<br>
<b>BBMS - Place Where Life Get Joys !!!</b>,<br />
<b>9842464506</b>
</p>
</div>
<div style="width:100%;float:left;background:#fde3c2;border-radius: 0 0 0.3em 0.3em;">
<p style="text-align:center;font-family: Open Sans Condensed, sans-serif;color:black;padding-left:15px">

<br>

</p>
</div>';

            $mail = new PHPMailer();
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'TLS';
            $mail->SMTPAuth = true;
            $mail->Username = 'blood.info44@gmail.com';
            $mail->Password = 'bloodinfo44';
            $mail->From = 'blood.info44@gmail.com';
            $mail->FromName = 'BBMS';
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->IsHTML(true);
            $mail->AddAddress($member_mail);

            if ($member_active == 'Active') {
                $mailsent = $mail->Send();
                if ($mailsent) {

                    echo "<script type='text/javascript'>alert('Donor has been successfully activated and emailed to login..');window.location='members.php';</script>";
                }
            } else {

                echo "<script type='text/javascript'>alert('Opps Your ID exist but not activated! Please Check it once agian if email exist or not..');window.location='newuser.php?uid=$eid';</script>";
            }
        }
    } else {
        $error = "Sorry Your Email does not exist in the database! please register to coninue!";
    }
    //$msg = "Donor has Successfully Been Activated";
}

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
                New Donor Detail
                <small>Donor Details Page</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="newuser.php">Donor List</a></li>

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
                                    echo $err . "<script>setTimeout(\"location.href = 'newuser.php';\",2500);</script>";
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Mobile</th>
                                        <th>Age</th>
                                        <th>Group</th>
                                        <th>Status</th>
                                        <th>Eligible To Donate</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query2 = "SELECT * FROM users where Status = 'Deactive' and UID = '" . $_GET['uid'] . "'";
                                    $query3 = mysqli_query($connection, $query2);
                                    while ($rows = mysqli_fetch_array($query3)) {

                                        $fullname = $rows['FullName'];
                                        $uname = $rows['UserName'];
                                        $status = $rows['Status'];
                                        $email = $rows['Email'];
                                        $age = $rows['Age'];
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
                                            <td><?php echo $age; ?></td>
                                            <td><?php echo $group; ?></td>
                                            <td><?php
                                                if ($status == 'Active') {
                                                    echo "<span class='label label-success'>Active</span>";
                                                } else if ($status == 'Deactive') {
                                                    echo "<span class='label label-danger'>Not Active</span>";
                                                } else {
                                                    echo "<span class='label label-primary'>Suspended</span>";
                                                }
                                                ?></td>
                                            <td><?php
                                                if ($p > 90) {
                                                    echo " <span class='label label-success'>Eligible - $p Days</span>";
                                                } else {
                                                    echo " <span class='label label-primary'>Not Eligible - $p Days</span>";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <span class="text-lime"><a href="newuser.php?active=<?php echo $id; ?>" onclick="return confirm('Do you really want to Activate this user..')" class="btn-sm bg-red">Activate User</a></span>
                                                <?php
                                                if ($rows['Public'] == 0 AND $rows['Status'] == 'Active') {
                                                    ?>
                                                    <span class="text-lime"><a href="newuser.php?public=<?php echo $id; ?>" onclick="return confirm('Do you really want to Public this detail')"><i class="fa fa-eye-slash"></i></a></span>
                                                    <?php
                                                } else if ($rows['Public'] == 1 AND $rows['Status'] == 'Active'){
                                                    ?>
                                                    <span class="text-lime"><a href="newuser.php?hidden=<?php echo $id; ?>" onclick="return confirm('Do you really want to Hidden this detail')"><i class="fa fa-camera"></i></a></span>

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
