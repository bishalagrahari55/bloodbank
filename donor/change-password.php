<?php
include_once 'topconnect.php';
include_once 'header.php';
// Change Password Code
if (isset($_POST['change'])) {
    $cpass = mysqli_real_escape_string($connection, $_POST['password']);
    $newpass = mysqli_real_escape_string($connection, $_POST['newpass']);
    $newpassa = mysqli_real_escape_string($connection, $_POST['newpassa']);


    $salt_query = "SELECT Password FROM users where Password = '$cpass' ORDER BY uid LIMIT 1";
    $salt_run = mysqli_query($connection, $salt_query);
    $salt_row = mysqli_fetch_array($salt_run);
    $pass = $salt_row['Password'];
    
    
    if (empty($cpass) or empty($newpass) or empty($newpassa)) {
        $error = "<span class='text-danger'> All Field are * Compulsory!</span><script>setTimeout(\"location.href = 'change-password.php';\",2500);</script>";
    } else if ($cpass != $pass) {
        $error = "<span class='text-danger'> Current Password Does Not Match!</span><script>setTimeout(\"location.href = 'change-password.php';\",2500);</script>";
    } else if ($newpass != $newpassa) {
        $error = "<span class='text-danger'> New Password and Confirm Password Error!</span><script>setTimeout(\"location.href = 'change-password.php';\",2500);</script>";
    } else {
        $query1 = "UPDATE users SET Password = '$newpass' WHERE UID = '$uid'";
        $run1 = mysqli_query($connection, $query1);
        $error = "<span class='text-success'> Password has been Successfully Updated!</span><script>setTimeout(\"location.href = 'logout.php';\",2500);</script>";
    }
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
                CHANGE PASSWORD
                <small>SCREEN</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>

                <li class="active">Change Password</li>

            </ol>

        </section>
        <hr>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-2">
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-7">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Change Password</h3>
                            <span class="pull-right">
                                <?php
                                if (isset($error)) {
                                    echo $error;
                                }
                                ?>
                            </span>
                        </div>

                        <!-- /.box-header -->
                        <!-- form start -->
                        <form method="post" action="" class="form-horizontal">
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="password" class="col-sm-4 control-label">Current Password</label>

                                    <div class="col-sm-8">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Input Current Password" autofocus>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="New Password" class="col-sm-4 control-label">New Password</label>

                                    <div class="col-sm-8">
                                        <input type="password" name="newpass" class="form-control" id="newpass" placeholder="Input New Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="New Password Again" class="col-sm-4 control-label">Confirm Password</label>

                                    <div class="col-sm-8">
                                        <input type="password" name="newpassa" class="form-control" id="newpassa" placeholder="Input New Password Again to Verify">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="dashboard.php"  class="btn btn-default">Cancel</a>
                                <button type="submit" name="change" class="btn btn-info pull-right">Change Password</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>

                </div>
                <!--/.col (right) -->
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
include_once "footer.php";
?>