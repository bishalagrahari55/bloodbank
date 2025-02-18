<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php
                if (empty($eimage) or ! file_exists("../dist/img/profiles/$eimage")) {
                    echo "../dist/img/user2-160x160.jpg";
                } else {
                    echo "../dist/img/profiles/$eimage";
                }
                ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo ucfirst($username); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">BBM SYSTEM</li>
            <li class="active">
                <a href="dashboard.php">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-database"></i>
                    </span>
                </a>

            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Manage Profiles</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="change-password.php"><i class="fa fa-key"></i> Change Password</a></li>
                    <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>


                </ul>
            </li>

           <!-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
                        <!--<small class="label pull-right bg-yellow">12</small>
                        <small class="label pull-right bg-green">16</small>
                        <small class="label pull-right bg-red">5</small>
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="mailbox.php"><i class="fa fa-inbox"></i> Inbox
                            <small class="label pull-right bg-yellow">12</small>
                        </a>
                    </li>
                    <li>
                        <a href="compose.php"><i class="fa fa-plus"></i> Compose
                        
                        </a>
                    </li>
                </ul>
            </li>-->




        </ul>
    </section>
    <!-- /.sidebar -->
</aside>