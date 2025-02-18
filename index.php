
<?php
include_once 'connection.php';
?>


<!DOCTYPE html>
<html lang = "en">

    <head>
        <title>BBMS | Blood Bank Management System</title>
        <!--meta tags -->
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <meta name = "keywords" content = "" />
        <!--//meta tags ends here-->
        <!--booststrap-->
        <link href = "css/bootstrap.css" rel = "stylesheet" type = "text/css" media = "all">
        <!--//booststrap end-->
        <!--font-awesome icons -->
        <link href = "css/font-awesome.css" rel = "stylesheet">
        <!--//font-awesome icons -->
        <!--stylesheets-->
        <link href = "css/style.css" rel = 'stylesheet' type = 'text/css' media = "all">
        <!--//stylesheets-->
        <link href = "//fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel = "stylesheet">

        <style>
            *{padding:0;margin:0;}

            

            .float{
                position:fixed;
                width:60px;
                height:60px;
                bottom:40px;
                left:20px;
                background-color:#0C9;
                color:#FFF;
                border-radius:50px;
                text-align:center;
                box-shadow: 2px 2px 3px #999;
            }

            .my-float{
                margin-top:22px;
            }

            .modal-body .form-horizontal .col-sm-2,
            .modal-body .form-horizontal .col-sm-10 {
                width: 100%
            }

            .modal-body .form-horizontal .control-label {
                text-align: left;
            }
            .modal-body .form-horizontal .col-sm-offset-2 {
                margin-left: 15px;
            }
        </style>

    </head>

    <body>
        <!--header-->
        <div class = "header-top">
            <div class = "header-bar">
                <nav class = "navbar navbar-default">
                    <div class = "navbar-header navbar-left">
                        <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#bs-example-navbar-collapse-1">
                            <span class = "sr-only">Toggle navigation</span>
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                        </button>
                        <h1><a class = "navbar-brand" href = "index.php">BBMS</a></h1>
                    </div>
                    <!--Collect the nav links, forms, and other content for toggling -->
                    <div class = "collapse navbar-collapse navbar-right" id = "bs-example-navbar-collapse-1">
                        <nav>
                            <ul class = "nav navbar-nav">
                                <li class = "active"><a href = "index.php">Home</a></li>
                                <li><a href = "#about" class = "scroll">About</a></li>
                                <li><a href = "#services" class = "scroll">Services</a></li>
                                <li><a href = "#gallery" class = "scroll">Available Group</a></li>
                                <!--<li><a href = "#team" class = "scroll">Team</a></li> -->
                                <li><a href = "#contact" class = "scroll">Become A Donor</a></li>
                                <li><a href = "login.php" class = "btn-sm btn-warning">LogIn</a></li>
                            </ul>

                        </nav>
                    </div>
                </nav>
            </div>
            <div class = "clearfix"> </div>
        </div>
        <!--//header-->
        <!--Slideshow 4 -->
        <div class = "slider">
            <div class = "callbacks_container">
                <ul class = "rslides" id = "slider4">
                    <li>
                        <div class = "slider-img wthree-oneimg">
                            <div class = "container">
                                <div class = "slider-info">
                                    <h4>Donate Blood</h4>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class = "slider-img wthree-twoimg">
                            <div class = "container">
                                <div class = "slider-info">

                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class = "slider-img wthree-threeimg">
                            <div class = "container">
                                <div class = "slider-info">
                                    <h4>Be Great</h4>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class = "clearfix"> </div>
            <!--This is here just to demonstrate the callbacks -->
            <!--<ul class = "events">
            <li>Example 4 callback events</li>
            </ul> -->
        </div>
        <!--//banner -->
        <!--about -->
        <div class = "about" id = "about">
            <div class = "container">
                <h3 class = "title">About</h3>
                <div class = "about-top-grids">
                    <div class = "col-md-6 about-top-grid">
                        <h2>Why We Beat
                        </h2>
                        <p>A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components). Donation may be of whole blood (WB), or of specific components directly (the latter called apheresis). Blood banks often participate in the collection process as well as the procedures that follow it.
                        </p>
                        <div class = "w3layouts_more-buttn ser-buttn">
                            <a href = "#services" class = "scroll">Read More</a>
                        </div>
                    </div>
                    <div class = "col-md-6 about-top-image">
                    </div>
                    <div class = "clearfix"> </div>
                </div>
            </div>
        </div>
        <!--//about -->
        <!--services-->
        <div class = "services" id = "services">
            <div class = "container">
                <h3 class = "title clr">What We Do</h3>

                <div class = "banner-bottom-girds ">
                    <div class = "col-md-3  col-sm-6 col-xs-6  its-banner-grid">
                        <div class = "w3-services-clr">
                            <div class = " left-icon-grid">
                                <span class = "fa fa-briefcase banner-icon" aria-hidden = "true"></span>
                                <h4>Blood Availability</h4>
                                <p>Availability Of blood at a time of need</p>
                                <div class = "clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-3  col-sm-6 col-xs-6  its-banner-grid">
                        <div class = "w3-services-clr">
                            <div class = " left-icon-grid">
                                <span class = "fa fa-thumbs-o-up  banner-icon" aria-hidden = "true"></span>

                                <h4>Event planning</h4>
                                <p>
                                    create time-to-time survey for blood bank resource</p>
                                <div class = "clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-3  col-sm-6 col-xs-6  its-banner-grid">
                        <div class = "w3-services-clr">
                            <div class = " left-icon-grid">
                                <span class = "fa fa-users banner-icon" aria-hidden = "true"></span>
                                <h4>Support</h4>
                                <p>
                                    24 X 7 support to Donor & those who require blood</p>
                                <div class = "clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-3 col-sm-6 col-xs-6  its-banner-grid">
                        <div class = "w3-services-clr">
                            <div class = " left-icon-grid">
                                <span class = "fa fa-line-chart banner-icon" aria-hidden = "true"></span>
                                <h4>Fast & Efficient</h4>
                                <p>
                                    Faster in providing the Blood Bank Service</p>
                            </div>
                            <div class = "clearfix"> </div>
                        </div>
                    </div>
                    <div class = "clearfix"> </div>
                </div>
            </div>
        </div>
        <!--//services-->
        <!--gallery-->
        <div class = "gallery" id = "gallery">
            <h3 class = "title">Donor Available</h3>
            <div class = "container">
                <?php
                if (empty($_POST)) {
                    $sqlbl = mysqli_query($connection, "select * from users where Status = 'Active' AND Public = 1 AND LastDonatedDate <= (NOW() - INTERVAL 90 DAY) ");
                    $rowbl = mysqli_num_rows($sqlbl);
                    while ($row = mysqli_fetch_array($sqlbl)) {
                        $eimage = $row['DonorImage'];
                        ?>
                        <div class = "col-md-4 col-sm-4 col-xs-6 agileinfo_portfolio_grid project">
                            <a href = "<?php
                            if (empty($eimage) or ! file_exists("dist/img/profiles/$eimage")) {
                                echo "dist/img/user2-160x160.jpg";
                            } else {
                                echo "dist/img/profiles/$eimage";
                            }
                            ?>" class = "lsb-preview" data-lsb-group = "header" width="630px" height="426px">

                                <div class = "agileits_portfolio_grid project_icon">
                                    <img src = "<?php
                                    if (empty($eimage) or ! file_exists("dist/img/profiles/$eimage")) {
                                        echo "dist/img/user2-160x160.jpg";
                                    } else {
                                        echo "dist/img/profiles/$eimage";
                                    }
                                    ?>" alt = " " class = "img-responsive" width="640px" height="426px">
                                         <?php echo "<span class='text-bold label label-success'>" . $row['FullName'] . " - " . $row['BloodGroup'] . "</span>"; ?>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                } elseif (isset($_POST['search'])) {
                    $bgroup = mysqli_real_escape_string($connection, $_POST['bgroup']);
                    $address = mysqli_real_escape_string($connection, $_POST['address']);

                    $sql = mysqli_query($connection, "select * from users where Status = 'Active' AND Public = 1 AND LastDonatedDate <= (NOW() - INTERVAL 90 DAY) AND BloodGroup = '$bgroup' AND Address LIKE '%{$address}%' ");
                    if (mysqli_num_rows($sql) > 0) {
                        while ($rowi = mysqli_fetch_array($sql)) {
                            $image = $rowi['DonorImage'];
                            ?>
                            <div class = "col-md-4 col-sm-4 col-xs-6 agileinfo_portfolio_grid project">
                                <a href = "<?php
                                if (empty($image) or ! file_exists("dist/img/profiles/$image")) {
                                    echo "dist/img/user2-160x160.jpg";
                                } else {
                                    echo "dist/img/profiles/$image";
                                }
                                ?>" class = "lsb-preview" data-lsb-group = "header" width="630px" height="426px">

                                    <div class = "agileits_portfolio_grid project_icon">
                                        <img src = "<?php
                                        if (empty($image) or ! file_exists("dist/img/profiles/$image")) {
                                            echo "dist/img/user2-160x160.jpg";
                                        } else {
                                            echo "dist/img/profiles/$image";
                                        }
                                        ?>" alt = " " class = "img-responsive" width="640px" height="426px">
                                             <?php echo "<span class='text-bold label label-success'>" . $rowi['FullName'] . " - " . $rowi['BloodGroup'] . "</span>"; ?>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<span class='text-bold label label-warning'>No Result Found</span>";
                    }
                }
                ?>
                <div class = "clearfix"> </div>
            </div>

        </div>
        <!--//gallery-->

        <!--news letter-->
        <div class = "newsletter">
            <div class = "container">
                <div class = "subscribe">
                    <h3 class = "title">Search Blood</h3>
                    <form action = "#gallery" method = "post">
                        <div class = "col-md-6 col-sm-6 col-xs-6 sub-letter">
                           
                            <select name="bgroup" id="bgroup" style="border-color: black;" class="select2 form-control" required style="width:300px;">
									<option value="">Choose From Blood Group</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
								</select>
                        </div>
                        <div class = "col-md-6 col-sm-6 col-xs-6 sub-letter">
                            <input type = "text" name = "address" id = "address" placeholder = "Location" >
                        </div>
                        <div class = "clearfix"> </div>
                        <div class = "w3-agile-click">
                            <input type = "submit" name = "search" id = "search" value = "SEARCH">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--//news letter-->
        <div class = "contact" id = "contact">
            <div class = "container">
                <h3 class = "title clr">Become A Donor</h3>
                <div class = "agileinfo-contact-two-grids">

                    <div class = "col-md-7 contact-us">
                        <form action = "savetodb.php" method = "post">
                            <div class = "col-md-6 col-sm-6 col-xs-6 styled-input">
                                <input type = "text" name = "Name"  placeholder = "Full Name" required = "">
                            </div>
                            <div class = "col-md-6 col-sm-6 col-xs-6 styled-input">
                                <input type = "email" name = "Email"  placeholder = "Email" required = "">

                            </div>
                            <div class = "col-md-6 col-sm-6 col-xs-6 styled-input">
                                <input type = "text" name = "age"  placeholder = "Age" required = "">
                            </div>
                            <div class = "col-md-6 col-sm-6 col-xs-6 styled-input">
                                <input type = "text" name = "phone"  placeholder = "Phone" required = "">
                            </div>

                            <div class="clearfix"></div>
                            <div class="styled-input">
                                <textarea name="address" placeholder="Enter Address" required=""></textarea>
                            </div>

                            <div class = "col-md-6 col-sm-6 col-xs-6 styled-input">
                                <select name="gender" id="gender" style="border-color: black;" class="select2 form-control" required style="width:300px;">
									<option value="">Gender</option>
									<option value="Male">Male</option>
									<option value="FeMale">FeMale</option>
								</select>
                            </div>
                            <div class = "col-md-6 col-sm-6 col-xs-6 styled-input">
                                <select name="blood" id="blood" style="border-color: black;" class="select2 form-control" required style="width:300px;">
									<option value="">Choose From Blood Group</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
								</select>
							</div>
                            <div>
                                <div class="contact-buttn">
                                    <input type="submit" name="submit" id="submit" value="Become Donor">
                                </div>
                            </div>
                        </form>
                    </div>
                    <a href="#myModal" class="float" data-target="#myModal" data-toggle="modal" title="Contact Us">
                        <i class="fa fa-user-secret my-float"></i>
                    </a>
                    <div class=" col-md-5 col-sm-8 col-xs-7 contact-map">
                        <div class="map-grid">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.504508999176!2d87.28441561446424!3d26.47169618530987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef7413e1b748d3%3A0xb7c681940d3614e2!2sEastern+College+of+Engineering+(P)+Ltd.!5e0!3m2!1sen!2snp!4v1528983272994" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                        <div class="contact-icons">
                            <div class="footer_grid_left">
                                <h5>Address</h5>
                                <p>Eastern College of Engineering, Near Radha Krishna Mandir, Biratnagar-2, Morang, Nepal
                                </p>
                            </div>
                            <div class="footer_grid_left">
                                <h5> Contact Us</h5>
                                <p> +(977)9842464506</p>
                            </div>
                            <div class="footer_grid_left">
                                <h5>Email Us</h5>
                                <a href="mailto:blood.info44@gmail.com">blood.info44@gmail.com</a>

                            </div>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer>
            <div class="container">
                <div class="col-md-3 wls-bottom-head">
                    <h4><a href="index.php">BBMS</a></h4>
                </div>
                <div class="col-md-6 header-side">
                    <p>© 2018 MAKAB. All Rights Reserved </p>
                </div>
                <div class="col-md-3 header-side">
                    <div class="buttom-social-grids">

                    </div>
                </div>
            </div>
        </footer>
        <!-- //footer  -->

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog ">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header ">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Contact Us </h4>
                    </div>


                    <div class="modal-body">

                        <form class="form-horizontal" role="form" method="post" action="contactus.php">
                            <div class="form-group">
                                <label  class="col-sm-2 control-label"
                                        for="inputEmail3">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" 
                                           name="email" id="inputEmail3" placeholder="Email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"
                                       for="inputPassword3" >Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                           name="fname" id="fname" placeholder="Full name"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label"
                                       for="inputPassword3" >Mobile Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                           maxlength="10"   name="mobile" id="mobile" placeholder="Mobile Number"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label"
                                       for="inputPassword3" >Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control"
                                              name="message" id="message" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" name="submit" class="btn-sm btn-default btn-success" id="submit" value="Contact Us">
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                    </div>


                </div>

            </div>
        </div>

        <!--js working-->
        <script src='js/jquery-2.2.3.min.js'></script>

        <!-- //js  working-->
        <script src="js/responsiveslides.min.js"></script>

        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 900,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
        </script>
        <!--// banner-->
        <!-- gallery-pop-up -->
        <script src="js/jquery.chocolat.js"></script>
        <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
        <!--light-box-files -->
        <script>
            $(function () {
                $('.agileinfo_portfolio_grid a').Chocolat();
            });
        </script>
        <!-- //gallery-pop-up -->
        <!-- start-smoth-scrolling -->
        <script src="js/move-top.js"></script>
        <script src="js/easing.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->

        <!-- here stars scrolling icon -->
        <script>
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //here ends scrolling icon -->

        <!--bootstrap-->
        <script src="js/bootstrap.js"></script>
        <!--// bootstrap-->
    </body>

</html>