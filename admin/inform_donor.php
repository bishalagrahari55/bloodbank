<?php
include_once 'topconnect.php';
include_once 'header.php';
$id = $_GET['id'];
require_once '../PHPMailer/PHPMailerAutoload.php';
if (isset($_POST['submit'])) {
    /* user info */
    $contactno = mysqli_real_escape_string($connection, $_POST['mobile']);
    $full = mysqli_real_escape_string($connection, $_POST['fullname']);
    $msg = mysqli_real_escape_string($connection, $_POST['message']);
    $mail = mysqli_real_escape_string($connection, $_POST['mail']);
    $pdate = mysqli_real_escape_string($connection, $_POST['pdate']);
    
    
    $email = mysqli_real_escape_string($connection, $_POST['Email']);
    $sqlCheckEmail = "SELECT * FROM users WHERE Email = '$email' LIMIT 1";
    $result = mysqli_query($connection, $sqlCheckEmail);
    $Count = mysqli_num_rows($result);
    if ($Count > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $member_name = $row['UserName'];
            $member_mail = $row['Email'];
            $member_active = $row['Status'];
            $subject = 'BBMS - Urgent Needed';
            $message = '<div style="width:100%;padding:5px 10px 0px 10px;float:left;color:black; background-color:#ffffff;">
                        <p style="text-align:left;font-family:font-family: Calibri;color:#3c3b3b;font-weight:100%;">
                        <b>Hello ' . ucwords($member_name) . ',</b><br><br>
                        We have received a request like - '. $msg .'<br><br>
                        If you are not ready to donate this time, just ignore this email.<br><br>
                        Otherwise, you can use the  info below.<br>
                        </p>
                        <p style="font-family:Calibri;color:#000000;">
                        <span style="font-size:16px; font-weight:bold;">From </span><br><br>
                        <font style="color:#3399dd">
                        ' . $full . '<br>
                        </font>
                        </p>
                        <p style="font-family:Calibri;color:#000000;">
                        <span style="font-size:16px; font-weight:bold;">Email </span><br><br>
                        <font style="color:#3399dd">
                        ' . $mail . '<br>
                        </font>
                        </p>
                        <p style="font-family:Calibri;color:#000000;">
                        <span style="font-size:16px; font-weight:bold;">ContactNumber </span><br><br>
                        <font style="color:#3399dd">
                        ' . $contactno . '<br>
                        </font>
                        </p>
                        <p style="font-family:Calibri;color:#000000;">
                        <span style="font-size:16px; font-weight:bold;">QueryDate </span><br><br>
                        <font style="color:#3399dd">
                        ' . $pdate . '<br>
                        </font>
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

                    echo "<script type='text/javascript'>alert('Contact Query Has Been Successfully Delivered to $member_mail ');window.location='contactus.php';</script>";
                }
            } else {

                echo "<script type='text/javascript'>alert('Opps Your ID exist but not activated! Please contact for support at below mention address..');window.location='members.php';</script>";
            }
        }
    } else {
        $error = "Sorry Your Email does not exist in the database! please register to coninue!";
    }
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
                Search Donor page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>

                <li class="active">Search Donor</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Donor Search</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    <?php
                    $search = mysqli_query($connection, "select * from tblcontactusquery where id = '$id'");
                    $rowc = mysqli_fetch_array($search);
                    $name = $rowc['name'];
                    $EmailId = $rowc['EmailId'];
                    $Contact = $rowc['ContactNumber'];
                    $Message = $rowc['Message'];
                    $pdate = $rowc['PostingDate'];
                    ?>

                    <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">

                        <div class="col-xs-6">

                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">FullName</label>

                                <div class="col-sm-10">
                                    <input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo $name; ?>" placeholder="Full Name" readonly>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" name="mail" class="form-control" id="mail" value="<?php echo $EmailId; ?>" placeholder="Email" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">PostedDate</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pdate" class="form-control" id="pdate" value="<?php echo $pdate; ?>" placeholder="Email" readonly>
                                </div>
                            </div>



                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="inputPhone" class="col-sm-2 control-label">Mobile</label>

                                <div class="col-sm-10">
                                    <input type="text" maxlength="10" name="mobile" class="form-control" id="mobile" value="<?php echo $Contact; ?>" placeholder="Mobile Number" readonly>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputExperience" class="col-sm-2 control-label">Message</label>

                                <div class="col-sm-10">
                                    <textarea name="message" class="form-control" id="message"  placeholder="Message" readonly><?php echo $Message; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPhone" class="col-sm-2 control-label">Donor</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" name="Email" id ="Email" required="true">
                                        <option>Select Donor</option>
                                        <?php
                                        
                                        $see = mysqli_query($connection, "select * from users where Role = '1' and Status = 'Active' and Public = '1' ");
                                        while ($rows = mysqli_fetch_array($see)) {
                                            $now = time(); // or your date as well
                                            $your_date = strtotime($rows['LastDonatedDate']);
                                            $datediff = $now - $your_date;
                                            $p = round($datediff / (60 * 60 * 24));
                                            if ($p > 90) {
                                                ?>
                                                <option value="<?php echo $rows['Email']; ?>"><?php echo $rows['FullName'] . " - " . $rows['Email'] . " - " . $p . " Days - " . $rows['BloodGroup']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="submit" name="submit" id="Update" class="btn btn-danger btn-block " value="Send Message">
                            </div>
                            <div class="col-sm-6">
                                <a href="contactus.php" class="btn btn-primary  pull-left btn-block">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Donor Search
                </div>
                <!-- /.box-footer-->
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
