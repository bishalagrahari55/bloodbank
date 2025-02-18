
        <header class="main-header">
            <!-- Logo -->
            <a href="dashboard.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>BMS</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>BBM SYSTEM</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php
                                if (empty($eimage) or !file_exists("../dist/img/profiles/$eimage")) {
                                    echo "../dist/img/user2-160x160.jpg";
                                } else {
                                    echo "../dist/img/profiles/$eimage";
                                }
                                ?>" class="user-image" alt="User Image">

                                <span class="hidden-xs"><?php echo ucfirst($username); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php
                                    if (empty($eimage) or ! file_exists("../dist/img/profiles/$eimage")) {
                                        echo "../dist/img/user2-160x160.jpg";
                                    } else {
                                        echo "../dist/img/profiles/$eimage";
                                    }
                                    ?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo ucfirst($username); ?>
                                        <small>Admin since <?php echo $month . " " . $year; ?> </small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row ">
                                        <div class="col-xs-4 text-center pull-left">
                                            <a href="change-password.php" class="btn btn-default btn-flat">Password</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="col-xs-4 text-center pull-right">
                                            <input type="button" id="button" class="btn btn-default btn-flat" onclick="getConfirmation();" value="Freeze">
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="">
                                        <a href="logout.php" class="btn btn-danger btn-block">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>