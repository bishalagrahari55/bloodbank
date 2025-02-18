<?php
include_once 'topconnect.php';
include_once 'header.php';
if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];
}

if (isset($_GET['del'])) {
    $del = $_GET['del'];
    $del_chk_query = "SELECT * FROM tblbloodgroup WHERE id = '$del'";
    $del_chk_run = mysqli_query($connection, $del_chk_query);
    if (mysqli_num_rows($del_chk_run) > 0) {
        $del_query = "DELETE FROM tblbloodgroup WHERE id = '$del'";
        $del_run = mysqli_query($connection, $del_query);
        if (isset($_SESSION['UserName']) && $_SESSION['Role'] == '0') {
            if ($del_run) {
                $msgs = "Blood Group has been deleted";
            } else {
                $errors = "Blood Group has not been deleted";
            }
        }
    } else {
        header('location:dashboard.php');
    }
}


if (isset($_POST['update'])) {
    $upcname = mysqli_real_escape_string($connection, $_POST['upcname']);
    $udate = date('Y-m-d H:i:s');
    if (empty($upcname)) {
        $up_error = "Enter the name of the Group first";
    } else {
        $update = "UPDATE tblbloodgroup SET BloodGroup = '$upcname',PostingDate = '$udate' WHERE id = '$edit_id'";
        if (mysqli_query($connection, $update)) {
            $up_msg = "Blood Group has been successfully updated<script>setTimeout(\"location.href = 'bloodgroup.php';\",1500);</script>";
        } else {
            $up_error = "Error while updating Blood Group";
        }
    }
    /* } */
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
                Blood Group List
                <small>Blood Group Details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>

                <li class="active">Blood Group List</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <?php
            if (isset($_POST['cat'])) {
                $cat_name = ucfirst($_POST['cname']);
                $sql = "SELECT * FROM tblbloodgroup WHERE BloodGroup = '$cat_name'";
                $run = mysqli_query($connection, $sql);
                $catrow = mysqli_fetch_array($run);
                $catname = $catrow['BloodGroup'];
                $date = date('Y-m-d H:i:s');
                if ($cat_name == $catname) {
                    $error = "Category Already Exist";
                } else {

                    $sql = mysqli_query($connection, "INSERT INTO tblbloodgroup (BloodGroup,PostingDate) VALUES ('$cat_name','$date')");
                    $msg = "Blood Group Added Successfully";
                }
            }
            ?>
            <div class="row">
                <div class="col-md-5">
                    <div class="box box-primary ">
                        <div class=" box-title   text-primary" style="padding:10px;">
                            <i class="fa fa-plus-circle "></i> Add Blood Category
                            <?php
                            if (isset($error)) {
                                echo "<span class='text-danger pull-right'>$error</span><script>setTimeout(\"location.href = 'bloodgroup.php';\",1500);</script>";
                            } else if (isset($msg)) {
                                echo "<span class='text-success pull-right'>$msg</span><script>setTimeout(\"location.href = 'bloodgroup.php';\",1500);</script>";
                            }
                            ?>
                        </div>

                        <div class="box-body box-profile">
                            <form method="post" action="" class="form-horizontal">
                                <div class="col-sm-12">
                                    <div class="form-group-sm">
                                        <label for="inputCatName" class="col-sm-4 control-label">Category Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cname" id="cname" class="form-control"  placeholder="Blood Group Name" ><br/>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="submit" id="cat" name="cat" class="btn btn-sm btn-primary pull-left" value="Submit">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="reset" class="btn btn-sm btn-danger pull-right" value="Reset Category">
                                    </div>
                                </div>
                            </form>
                        </div><!--end of box-body-->
                    </div><!--end of box-->

                    <?php
                    if (isset($_GET['edit'])) {
                        $edit_chk_query = "SELECT * FROM tblbloodgroup WHERE id = '$edit_id'";
                        $edit_chk_run = mysqli_query($connection, $edit_chk_query);
                        if (mysqli_num_rows($edit_chk_run) > 0) {
                            $editrow = mysqli_fetch_array($edit_chk_run);
                            $upcat = $editrow['BloodGroup'];
                            ?>

                            <div class="box box-danger">
                                <div class=" box-title   text-primary" style="padding:10px;">
                                    <i class="fa fa-upload "></i> Update Category
                                    <?php
                                    if (isset($up_msg)) {
                                        echo "<span class='pull-right' style='color:green;'>$up_msg</span>";
                                    } else if (isset($up_error)) {
                                        echo "<span class='pull-right' style='color:red;'>$up_error</span>";
                                    }
                                    ?>
                                </div>
                                <div class="box-body box-profile">
                                    <form action="" method="post">
                                        <div class="col-sm-12">
                                            <div class="form-group-sm">
                                                <label for="inputCatName" class="col-sm-4 control-label">Category Name</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="upcname" id="upcname" class="form-control"  placeholder="Category Name" value="<?php echo $upcat; ?>"><br/>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <input type="submit" id="update" name="update" class="btn btn-sm btn-primary pull-left" value="update Blood Group">
                                            </div>

                                        </div>



                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>


                </div><!--end of col-md-5-->


                <div class="col-md-7">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Blood Group List</h3>
                            <?php
                            if (isset($errors)) {
                                echo "<span class='text-danger pull-right'>$errors</span><script>setTimeout(\"location.href = 'bloodgroup.php';\",1500);</script>";
                            } else if (isset($msgs)) {
                                echo "<span class='text-success pull-right'>$msgs</span><script>setTimeout(\"location.href = 'bloodgroup.php';\",1500);</script>";
                            }
                            ?>
                        </div>
                        <div class="box-body">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>Blood Group Name</th>
                                        <th>Posting Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cat = "SELECT * FROM tblbloodgroup";
                                    $cat_run = mysqli_query($connection, $cat);
                                    if (mysqli_num_rows($cat_run) > 0) {
                                        while ($rows = mysqli_fetch_array($cat_run)) {
                                            $id = $rows['id'];
                                            $catname = $rows['BloodGroup'];
                                            $pdate = $rows['PostingDate'];
                                            ?>
                                            <tr>

                                                <td><?php echo $catname; ?></td>
                                                <td><?php echo $pdate; ?></td>
                                                <td><span class="text-danger"><a href="bloodgroup.php?edit=<?php echo $id; ?>"><i class="fa fa-plus-square-o"></i></a></span> &nbsp; |  &nbsp;
                                                    <span class="text-lime"><a href="bloodgroup.php?del=<?php echo $id; ?>"><i class="fa fa-trash-o"></i></a></span>
                                                </td>
                                            </tr>


                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td>No Record Available</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>

                                        <th>Blood Group Name</th>
                                        <th>PostingDate</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            Category List
                        </div>
                        <!-- /.box-footer-->
                    </div>
                    <!-- /.box -->

                </div><!--end of col-md-6-->
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
<script>
    $('#active').on('change', function () {
        if ($(this).val() === "on") {
            $("#hassub").show()
        } else {
            $("#hassub").hide()
        }
    });


    $('#cats').on('change', function () {
        if ($(this).val() === "yes") {
            $("#hascat").show()
        } else {
            $("#hascat").hide()
        }
    });


    /* for update category*/
    $('#upactive').prop('selected', function () {
        if ($(this).val() === "on") {
            $("#hassubcat").show();
            //$("#catsub").show();
        }
    });

    $('#upactive').on('change', function () {
        if ($(this).val() === "on") {
            $("#hassubcat").show();
            //$("#catsub").show();
            $('#hassubcat').prop('selected', function () {
                if ($(this).val() === "yes") {
                    $("#catsub").show();
                } else {
                    $("#catsub").hide();
                }
            });

        } else {
            $("#hassubcat").hide();
            $("#catsub").hide();
        }
    });

    $('#upcats').prop('selected', function () {
        if ($(this).val() === "yes") {
            $("#catsub").show();
        }
    });

    $('#upcats').on('change', function () {
        if ($(this).val() === "yes") {
            $("#catsub").show();
        } else {
            $("#catsub").hide();
        }
    });



</script>