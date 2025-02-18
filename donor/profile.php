<?php
include_once 'topconnect.php';
include_once 'header.php';
date_default_timezone_set("Asia/Kathmandu");
$date = date('Y-m-d');
$time = date('H:i:s');
$desc = 'has Visited to';
include_once 'Vistors.php';
$pages = str_ireplace("http://localhost:81/gks/donor/", "", $page);
$pageencounter = str_ireplace(".php", "", $pages);
$insert = mysqli_query($connection, "insert into system_log(UID,UserName,Page,Browser,IP,LogTime,LogDate,LogLink,Description,OS)"
        . "VALUES('$uid','$username','$pageencounter','$user_browser','$user_ip','$time','$date','$link','$desc','$user_os')");
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
                Profile
                <small>Control Your Profile</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Profile</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row collapsible">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="<?php
                            if (empty($eimage) or ! file_exists("../dist/img/profiles/$eimage")) {
                                echo "../dist/img/user2-160x160.jpg";
                            } else {
                                echo "../dist/img/profiles/$eimage";
                            }
                            ?>" alt="User profile picture">

                            <h3 class="profile-username text-center"><?php echo ucfirst($username); ?></h3>

                            <p class="text-muted text-center"><?php echo ucfirst($fullname); ?></p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Join Date</b> <a class="pull-right"><?php echo $date; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Blood Group</b> <a class="pull-right"><?php echo "<i class='fa fa-cross text-bold text-red'>" . $bgroup . "</i>"; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>MobileNo</b> <a class="pull-right"><?php echo $mobile; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Gender</b> <a class="pull-right"><?php echo $gender; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="pull-right"><?php echo $email; ?></a>
                                </li>
                            </ul>
                            <h4  class="btn btn-primary btn-block">
                                <span>Edit Profile</span>
                                <span style="display:none;">Back</span>
                            </h4>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->

                <?php
                if (isset($_POST['update'])) {
                    $uname = mysqli_real_escape_string($connection, $_POST['uname']);
                    $uaddress = mysqli_real_escape_string($connection, $_POST['address']);
                    $umobile = mysqli_real_escape_string($connection, $_POST['mobile']);
                    $ugender = mysqli_real_escape_string($connection, $_POST['gender']);
                    $ubgroup = mysqli_real_escape_string($connection, $_POST['bgroup']);
                    $uage = mysqli_real_escape_string($connection, $_POST['age']);
                    $umessage = mysqli_real_escape_string($connection, $_POST['message']);
                    $lastdate = mysqli_real_escape_string($connection, $_POST['date1']);
                    $uemail = mysqli_real_escape_string($connection, $_POST['email']);
                    //$urole = mysqli_real_escape_string($connection, $_POST['role']);
                    $image = $_FILES['image']['name'];
                    $image_tmp = $_FILES['image']['tmp_name'];

                    if (empty($image)) {
                        $image = $eimage;
                    }

                    if (empty($uname)) {
                        echo "Please update all the details";
                    } else {

                        $update_query = mysqli_query($connection, "UPDATE users SET UserName = '$uname', Email = '$uemail', LastDonatedDate='$lastdate',  Age = '$uage', Address = '$uaddress', Gender = '$ugender', BloodGroup = '$ubgroup',  MobileNumber = '$umobile', Message = '$umessage', DonorImage = '$image' WHERE UID = '$uid'") or die(print_r(mysqli_error_list($connection)));
                        $description = "has updated his profile";
                        $pages = str_ireplace("http://localhost:81/gks/donor/", "", $page);
                        $pageencounter = str_ireplace(".php", "", $pages);
                        $insert = mysqli_query($connection, "insert into system_log(UID,UserName,Page,Browser,IP,LogTime,LogDate,LogLink,Description,OS)"
                                . "VALUES('$uid','$username','$pageencounter','$user_browser','$user_ip','$time','$date','$link','$description','$user_os')");


                        echo "<script>alert(' You Have Successfully Updated your Profile');window.location='profile.php';</script>";
                        if (!empty($image)) {
                            move_uploaded_file($image_tmp, "../dist/img/profiles/$image");
                        }
                    }
                }
                ?>
                <div class="col-md-9">
                    <div class="col-xs-12">
                        <div class="profile" id="profile">
                            <h2>Edit Profile Details </h2>

                            <hr>
                            <form method="post" action="" class="form-horizontal" enctype="multipart/form-data">

                                <div class="col-xs-6">

                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">UserName</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="uname" class="form-control" id="uname" value="<?php echo $username; ?>" placeholder="UserName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>" placeholder="Email" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">Address</label>

                                        <div class="col-sm-10">
                                            <textarea name="address" class="form-control" id="address"  placeholder="Address"><?php echo $address; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone" class="col-sm-2 control-label">Mobile</label>

                                        <div class="col-sm-10">
                                            <input type="text" maxlength="10" name="mobile" class="form-control" id="mobile" value="<?php echo $mobile; ?>" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputPhone" class="col-sm-2 control-label">Last Donated</label>

                                        <div class="col-sm-10">
                                            <input type="text" maxlength="10" name="date1" class="form-control" id="date1" value="<?php echo $lastdonated; ?>" placeholder="Last Donated Date">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gender" class="col-sm-2 control-label">Gender</label>
                                        <div class="col-sm-10">
                                            <select name="gender" id="gender" class="select2 form-control" required style="width:300px;">
                                                <option value="">Choose From Gender</option>
                                                <option value="Male" <?php
                                                if ($gender == 'Male') {
                                                    echo "selected";
                                                }
                                                ?>>Male</option>
                                                <option value="FeMale" <?php
                                                if ($gender == 'FeMale') {
                                                    echo "selected";
                                                }
                                                ?>>FeMale</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="inputUsername" class="col-sm-2 control-label">Blood Group</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="bgroup" class="form-control" id="bgroup" value="<?php echo $bgroup; ?>" placeholder="Blood Group" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUsername" class="col-sm-2 control-label">Age</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="age" class="form-control" id="age" value="<?php echo $age; ?>" placeholder="User Name" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputImage" class="col-sm-2 control-label">Upload Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="image"  id="image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputTitle" class="col-sm-2 control-label">UserType</label>

                                        <div class="col-sm-10">
                                            <input type="text" name="role" class="form-control" id="role" value="<?php
                                            if ($role == 0) {
                                                echo "Admin";
                                            } else {
                                                echo "Member";
                                            }
                                            ?>" placeholder="Designation" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">Message</label>

                                        <div class="col-sm-10">
                                            <textarea name="message" class="form-control" id="message"  placeholder="Enter Message"><?php echo $message; ?></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" name="update" class="btn btn-danger btn-block">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>

                    </div><!--end og col-xs-12-->

                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#activity" data-toggle="tab">Recent Activity</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <?php
                                $sql = mysqli_query($connection, "select * from system_log where UID = '$uid' order by LogTime Desc Limit 0,5");
                                while ($row = mysqli_fetch_array($sql)) {
                                    ?>
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="<?php
                                            if (empty($eimage) or ! file_exists("../dist/img/profiles/$eimage")) {
                                                echo "../dist/img/user2-160x160.jpg";
                                            } else {
                                                echo "../dist/img/profiles/$eimage";
                                            }
                                            ?>" alt="user image">
                                            <span class="username">
                                                <a href="profile.php"><?php echo ucfirst($username); ?></a>
                                                <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                            </span>
                                            <span class="description">Shared Publicly - <?php echo $row['LogTime'];?></span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            <?php echo "<b class=' text-center'>".ucfirst($row['UserName'])." ". $row['Description']. "  " . $row['Page']." Page</b><hr>"?>
                                        </p>

                                        <?php
                                    }
                                    ?>

                                </div>
                                <!-- /.post -->
                            </div>

                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
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

<?php
include_once 'footer.php';
?>
