<?php
ob_start();
session_start();
require_once 'connection.php';
date_default_timezone_set("Asia/Kathmandu");
$date = date('Y-m-d');
$time = date('H:i:s');
$desc = 'has logged in';
include_once 'Vistors.php';
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $check_username_query = "SELECT * FROM users WHERE UserName='$username'";
    $username_run = mysqli_query($connection, $check_username_query);
    if (mysqli_num_rows($username_run) > 0) {
        $row = mysqli_fetch_array($username_run);
        $dbfullname = $row['FullName'];
        $dbusername = $row['UserName'];
        $dbpassword = $row['Password'];
        $dbrole = $row['Role'];
        $dbuid = $row['UID'];
        $eimage = $row['DonorImage'];
        if ($username == $dbusername AND $row['Status'] == 'Deactive') {
            $error = "<span class='text-danger'> You are Not activated.</span>";
        } else if ($username == $dbusername AND $row['Status'] == 'Suspended') {
            $error = "<span class='text-danger'> You have suspended your account! Please Contact Administrator.</span>";
        } else if ($username == $dbusername AND $password == $dbpassword AND $row['Status'] == 'Active' AND $row['Role'] == 1) {
            header('Location:donor/dashboard.php');
            $_SESSION['FullName'] = $dbfullname;
            $_SESSION['UserName'] = $dbusername;
            $_SESSION['Role'] = $dbrole;
            $_SESSION['UID'] = $dbuid;
            $_SESSION['DonorImage'] = $eimage;
            $insert = mysqli_query($connection, "insert into system_log(UID,UserName,Page,Browser,IP,LogTime,LogDate,LogLink,Description,OS)"
                    . "VALUES('$dbuid','$dbusername','$page','$user_browser','$user_ip','$time','$date','$link','$desc','$user_os')");
        } else if ($username == $dbusername AND $password == $dbpassword AND $row['Status'] == 'Active' AND $row['Role'] == 0) {
            header('Location:admin/dashboard.php');
            $_SESSION['FullName'] = $dbfullname;
            $_SESSION['UserName'] = $dbusername;
            $_SESSION['Role'] = $dbrole;
            $_SESSION['UID'] = $dbuid;
            $_SESSION['DonorImage'] = $eimage;
            $pages = str_ireplace("http://localhost:81/gks/", "", $page);
            $pageencounter = str_ireplace(".php", "", $pages);
            $insert = mysqli_query($connection, "insert into system_log(UID,UserName,Page,Browser,IP,LogTime,LogDate,LogLink,Description,OS)"
                    . "VALUES('$dbuid','$dbusername','$pageencounter','$user_browser','$user_ip','$time','$date','$link','$desc','$user_os')");
        } else {
            $error = "Wrong Username or Password!";
        }
    } else {
        $error = "No User Exist with this username..";
    }
}
include_once 'header.php';
?>


<div class="login-box bg-navy-active">
    <div class="login-logo">
        <a href="index.php" class="text-gray"><b>Blood Bank Management System</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to Lock Your Session</p>

        <form action="" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <?php
                            if (isset($error)) {
                                echo "<span class='text-danger'>$error</span><script>setTimeout(\"location.href = 'login.php';\",2500);</script>";
                            }
                            ?>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <!-- <div class="social-auth-links text-center">
           <p>- OR -</p>
           <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
             Facebook</a>
           <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
             Google+</a>
         </div>-->
        <!-- /.social-auth-links -->

        <a href="forgot.php" class="btn-sm bg-green">I forgot my password</a>
        <a href="index.php" class="btn-sm bg-red pull-right">BBMS</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<?php
include_once 'footer.php';
?>