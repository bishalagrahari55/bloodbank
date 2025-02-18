<?php

include_once 'topconnect.php';
include_once 'header.php';
$edit = $_GET['id'];
if (isset($_GET['id'])) {
    $edit = $_GET['id'];
    $edit_query = "SELECT * FROM users WHERE uid = '$edit'";
    $edit_chk_run = mysqli_query($connection, $edit_query);
    if (mysqli_num_rows($edit_chk_run) > 0) {
        while ($edit = mysqli_fetch_array($edit_chk_run)) {
            $fullname = $edit['FullName'];
            $uname = $edit['UserName'];
            $email = $edit['Email'];
            $eimage = $edit['Donorimage'];
            $age = $edit['Age'];
            $phone = $edit['MobileNumber'];
            $add = $edit['Address'];
            $mes = $edit['Message'];
            $bloodgroup = $edit['BloodGroup'];
            $gen = $edit['Gender'];
            
        }
    } else {
        header('location:members.php');
    }
} else {
    header('location:dashboard.php');
}



?>

<!-- Site wrapper -->
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
                Edit Profile
                <small>Edit Donor Details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>

                <li class="active">Edit Profile</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <?php
            if (isset($_POST['Update'])) {
                $edit = $_GET['id'];
                $ufname = mysqli_real_escape_string($connection, $_POST['fullname']);
                $uemail = mysqli_real_escape_string($connection, $_POST['email']);
                $uaddress = mysqli_real_escape_string($connection, $_POST['address']);
                $ublood = mysqli_real_escape_string($connection, $_POST['blood']);
                $ugender = mysqli_real_escape_string($connection, $_POST['gender']);
                $uusername = mysqli_real_escape_string($connection, $_POST['uname']);
                $umobile = mysqli_real_escape_string($connection, $_POST['mobile']);
                $uage = mysqli_real_escape_string($connection, $_POST['age']);
                $desc = mysqli_real_escape_string($connection, $_POST['message']);

                $image = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];

                if (empty($image)) {
                    $image = $eimage;
                }

                if (empty($ufname) or empty($uemail)  or empty($ublood) or empty($ugender) or empty($uusername) or empty($uage)) {
                    $msg = "<script>alert(' Please fill all the details');</script>";
                } else {

                    $update_query = "UPDATE users SET MobileNumber = '$umobile',FullName = '$ufname', Email = '$uemail', Address = '$uaddress', BloodGroup = '$ublood', Gender = '$ugender', UserName = '$uusername', Age = '$uage', Message = '$desc', DonorImage = '$image' WHERE UID = '$edit'";
                    //echo $update_query;
                    //die();
                    if (mysqli_query($connection, $update_query)) {
                        $msg = "<span class='text-success'> Donor has been successfully updated.</span><script>setTimeout(\"location.href = 'members.php';\",1500);</script>";
                        if (!empty($image)) {
                            move_uploaded_file($image_tmp, "../dist/img/profiles/$image");
                        }
                    } else {
                        $msg = "Donor has not been updated";
                    }
                }
            }
            ?>

            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Profile</h3>


                    <div class="box-tools pull-right">
                        <?php if (isset($msg)) {
                            echo $msg;
                        } ?>
                    </div>
                </div>
                <div class="box-body">



                    <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">

                        <div class="col-xs-6">

                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">FullName</label>

                                <div class="col-sm-10">
                                    <input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo $fullname; ?>" placeholder="Full Name">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>" placeholder="Email" >
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputExperience" class="col-sm-2 control-label">Address</label>

                                <div class="col-sm-10">
                                    <textarea name="address" class="form-control" id="address"  placeholder="Address"><?php echo $add; ?></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputUsername" class="col-sm-2 control-label">Blood Group</label>

                                <div class="col-sm-10">
                                    <input type="text" name="blood" class="form-control" id="blood" value="<?php echo $bloodgroup; ?>" placeholder="bloodgroup" >
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label for="inputTitle" class="col-sm-2 control-label">Gender</label>

                                <div class="col-sm-10">
                                    <input type="text" name="gender" class="form-control" id="gender" value="<?php echo $gen; ?>" placeholder="Designation">
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="inputUsername" class="col-sm-2 control-label">User Name</label>

                                <div class="col-sm-10">
                                    <input type="text" name="uname" class="form-control" id="uname" value="<?php echo $uname; ?>" placeholder="User Name" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPhone" class="col-sm-2 control-label">Mobile</label>

                                <div class="col-sm-10">
                                    <input type="text" maxlength="10" name="mobile" class="form-control" id="mobile" value="<?php echo $phone; ?>" placeholder="Mobile Number">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputRole" class="col-sm-2 control-label">Age</label>

                                <div class="col-sm-10">
                                    <input type="text"  name="age" class="form-control" id="age" value="<?php echo $age; ?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputImage" class="col-sm-2 control-label">Upload Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control btn-sm bg-red" name="image"  id="image" value="<?php echo $eimage; ?>">
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label for="inputExperience" class="col-sm-2 control-label">Message</label>

                                <div class="col-sm-10">
                                    <textarea name="message" class="form-control" id="message"  placeholder="Message"><?php echo $mes; ?></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="submit" name="Update" id="Update" class="btn btn-danger btn-block " value="Update Profile">
                            </div>
                            <div class="col-sm-6">
                                <a href="members.php" class="btn btn-primary  pull-left btn-block">Back</a>
                            </div>
                        </div>
                    </form>



                </div><!--end of box-body-->

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
