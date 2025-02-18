<?php
require_once 'connection.php';
require_once 'PHPMailer/PHPMailerAutoload.php';
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($connection, strtolower($_POST['email']));
    $sqlCheckEmail = "SELECT * FROM `users` WHERE `email` = '$email' LIMIT 1";
    $result = mysqli_query($connection, $sqlCheckEmail);
    $Count = mysqli_num_rows($result);
    if ($Count > 0) {
        while ($row = mysqli_fetch_array($result)) {

            $member_name = $row['UserName'];
            $member_mail = $row['Email'];
            $member_pass = $row['Password'];
            $member_active = $row['Status'];
            $subject = 'Country Login - Password Information';
            $message = '<div style="width:100%;padding:5px 10px 0px 10px;float:left;color:black; background-color:#ffffff;">
<p style="text-align:left;font-family:font-family: Calibri;color:#3c3b3b;font-weight:100%;">
<b>Hello ' . ucwords($member_name) . ',</b><br><br>
We have received a request that you forgot your password.<br><br>
If you did not make the request, just ignore this email.<br><br>
Otherwise, you can use the  password below.<br>
</p>
<p style="font-family:Calibri;color:#000000;">
<span style="font-size:16px; font-weight:bold;">Your Password</span><br><br>
<font style="color:#3399dd">
' . $member_pass . '<br>
</font>
</p>

</div>
<div style="width:100%;padding:5px 10px 0px 10px;float:left;color:black; background-color:#ffffff;">
<p style="text-align:left;font-family:Calibri;color:black;">
Thanks & Regards,<br>
<b>Country Directory</b>,<br />
<b>9804341835</b>
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
            $mail->FromName = 'Blood Bank Management System';
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->IsHTML(true);
            $mail->AddAddress($member_mail);

            if ($member_active == 'Active') {
                $mailsent = $mail->Send();
                if ($mailsent) {

                    echo "<script type='text/javascript'>alert('Password has been email to you successfully - Please check your email');window.location='login.php';</script>";
                }
            } else {

                echo "<script type='text/javascript'>alert('Opps Your ID exist but not activated! Please contact for support at below mention address..');window.location='forgot.php';</script>";
            }
        }
    } else {
        $error = "Sorry Your Email does not exist in the database! please register to coninue!";
    }
}
?>
<!DOCTYPE html>

<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Blood Bank Management System | Forgot Password</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->

        <link href="dist/css/admin.css" rel="stylesheet" type="text/css"/>

    </head>
    <body class="bg-black-gradient">

        <div class="form-box" id="login-box">
            <div class="header">Forgot Password</div>
            <form action="#" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <p>Forgot your password? No problem we will sort it out! </p>
                    </div>                    
                </div>
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Please enter your email address"/>
                        <span class="text-danger text-center" style="margin-top:10px;">
                            <?php
                            if (isset($error)) {
                                echo "<span class='text-danger'>$error</span><script>setTimeout(\"location.href = 'forgot.php';\",2000);</script>";
                            }
                            ?></span>

                    </div>                    
                </div>
                <div class="footer">
                    <input type="submit" name="submit" class="btn bg-olive btn-block" value="Submit" />                    
                </div>
                <div class="footer">
                    <a href="login.php" class="btn btn-primary">Login</a>                    
                </div>
            </form>            
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>

