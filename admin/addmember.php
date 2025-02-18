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
                ADD Donor
                <small>Add New Donor</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>

                <li class="active">Add New Donor</li>
            </ol>
        </section>

        <?php
        $date = date('Y-m-d');
        if (isset($_POST['adduser'])) {
            $username = mysqli_real_escape_string($connection, $_POST['username']);
            $fname = mysqli_real_escape_string($connection, $_POST['fname']);
            $email = mysqli_real_escape_string($connection, $_POST['email']);
            $phone = mysqli_real_escape_string($connection, $_POST['phone']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);
            $blood = mysqli_real_escape_string($connection, $_POST['blood']);

            $chk_query = "SELECT * FROM users ";
            $chk_run = mysqli_query($connection, $chk_query);
            $row = mysqli_fetch_array($chk_run);
            $user_count = $row['UserName'];

            if (empty($fname) or empty($username) or empty($email) or empty($phone) or empty($password) or empty($blood)) {

                $err = "<span class='pull-right text-danger'>You Have to filled *</span>";
            } else if ($user_count == $username) {
                $err = "You Cannot Proceed for creation of profile since username is already taken!";
            } else {
                $sql = "INSERT INTO users (UserName,FullName,Email,MobileNumber,Password,BloodGroup,JoinDate,Status,Role) VALUES('$username','$fname','$email','$phone','$password','$blood','$date','Active','1')";
                $run = mysqli_query($connection, $sql);
                $msg = "<span class='text-success'>You Have Successfully created the profile!</span>";
            }
        }
        ?>
        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title pull-left">Add Necessary Contact Details</h3>
                            <h3 class="box-title pull-right"><?php
                                if (isset($err)) {
                                    echo $err . "<script>setTimeout(\"location.href = 'addmember.php';\",2500);</script>";
                                } else if (isset($msg)) {
                                    echo $msg . "<script>setTimeout(\"location.href = 'members.php';\",2500);</script>";
                                }
                                ?></h3>
                        </div>
                        <!-- /.box-header -->




                        <!-- form start -->
                        <form role="form" method="POST" action="#">
                            <div class="col-xs-6">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="exampleInputName">Full Name <small><sup class="text-danger"><i class="fa fa-asterisk"></i></sup></small></label>
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter First Name" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">User Name <small><sup class="text-danger"><i class="fa fa-asterisk"></i></sup></small></label>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter User Name" onClick="change();" onBlur="checkAvailability()">
                                        <span id="user-availability-status" ></span>
                                        <p><img src="../dist/img/LoaderIcon.gif" id="loaderIcon" style="display:none;width:30px;height:30px;" /></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address <small><sup class="text-danger"><i class="fa fa-asterisk"></i></sup></small></label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                    </div>

                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="col-xs-6">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="exampleInputPhone">Contact Number <small><sup class="text-danger"><i class="fa fa-asterisk"></i></sup></small></label>
                                        <input type="text" maxlength="10" name="phone" class="form-control" id="phone" placeholder="Enter Mobile Number">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName">Blood Group <small><sup class="text-danger"><i class="fa fa-asterisk"></i></sup></small></label>
                                        <input type="text" name="blood" id="blood" class="form-control" placeholder="Your Blood Group Here" >

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password <small><sup class="text-danger"><i class="fa fa-asterisk"></i></sup></small></label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                                    </div>


                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" name="adduser" class="btn btn1 btn-primary btn-block" id="adduser" data-toggle="modal" data-target="#confirm-submit">Submit</button>
                            </div>
                        </form>
                    </div>

                </div><!--end of col-->
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
<script>
    function rand(min, max, interval)
    {
        if (typeof (interval) === 'undefined')
            interval = 1;
        var r = Math.floor(Math.random() * (max - min + interval) / interval);
        return r * interval + min;
    }
    function change() {
        var name = $.trim($('#fname').val());
        //var uname = $.trim($('#username').val());
        var a = name;
        //var b = uname;
        var c = rand(10, 10000);
        var text = a + c;
        document.getElementById("username").value = text;
    }

    function checkAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availibility.php",
            data: 'username=' + $("#username").val(),
            type: "POST",
            success: function (data) {
                $("#user-availability-status").html(data);
                $("#loaderIcon").hide();
            },
            error: function () {}
        });
    }



</script>
<?php
include_once 'footer.php';
?>
