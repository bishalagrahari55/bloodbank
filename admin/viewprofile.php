<?php
include_once 'topconnect.php';
include_once 'header.php';
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
                View Profile
                <small>View Details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>

                <li class="active">View Profile</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php
            if (isset($_GET['view'])) {
                $view = $_GET['view'];
                $view_query = "SELECT * FROM users WHERE uid = '$view'";
                $view_chk_run = mysqli_query($connection, $view_query);
                if (mysqli_num_rows($view_chk_run) > 0) {
                    while ($views = mysqli_fetch_array($view_chk_run)) {
                        $pfullname = $views['FullName'];
                        $puname = $views['UserName'];
                        $pmail = $views['Email'];
                        $peimage = $views['DonorImage'];
                        $page = $views['Age'];
                        $pgen = $views['Gender'];
                        $jdate = $views['JoinDate'];
                        $phone = $views['MobileNumber'];
                        $pass = $views['Password'];
                    }
                } else {
                    header('location:dashboard.php');
                }
            }
            ?>

            <div class="row">
                <div class="col-md-3">
                    <!-- Default box -->
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="<?php
                            if (empty($peimage) or ! file_exists("../dist/img/profiles/$peimage")) {
                                echo "../dist/img/user2-160x160.jpg";
                            } else {
                                echo "../dist/img/profiles/$peimage";
                            }
                            ?>" alt="User profile picture">

                            <h3 class="profile-username text-center"><?php echo ucfirst($pfullname); ?></h3>

                            <p class="text-muted text-center"><?php echo $pmail; ?></p>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                    <!-- About Me Box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">About Me</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                            <p class="text-muted"><?php echo ucfirst("$city-$state-$country"); ?></p>

                            <hr>

                            <strong><i class="fa fa-book margin-r-5"></i> Education/Goals</strong>

                            <p class="text-muted text-justify">
                                <?php echo ucfirst($description); ?>
                            </p>

                            <hr>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div><!--end of col-md-3-->

                <div class="col-md-9">
                    <div class="box box-danger">
                        <div class="box-body box-profile">

                            <div class="timeline-item">
                                <span class="time pull-right"><i class="fa fa-clock-o"></i> <?php echo date("d/m/Y - h:i"); ?></span>

                                <h3 class="timeline-header">Detail Information</h3>
                                <br/>
                                <div class="timeline-body">

                                    <form class="form-horizontal">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="inputName" class="col-sm-2 control-label">First Name</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="fname" value="<?php echo $firstname; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName" class="col-sm-2 control-label" >Last Name</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lname" value="<?php echo $lastname; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="email" value="<?php echo $mail; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="phone" value="<?php echo $phone; ?>">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-xs-6">

                                            <div class="form-group">
                                                <label for="inputName" class="col-sm-2 control-label">Username</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="uname" value="<?php echo $uname; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPassword" class="col-sm-2 control-label">Password</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="pass" value="<?php echo $pass; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName" class="col-sm-2 control-label">Your Role</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="role" value="<?php echo $role; ?>" >
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="inputDate" class="col-sm-2 control-label">Join Date</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="date" value="<?php echo $jdate; ?>">
                                                </div>
                                            </div>



                                        </div>

                                    </form>

                                </div><!--end of timeline-body-->

                                <div class="timeline-footer">
                                    <a href="members.php" class="btn btn-primary  pull-left btn-block">Back</a>

                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>


            </div><!--end of row-->

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
