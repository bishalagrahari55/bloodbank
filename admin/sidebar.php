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

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Manage Donor</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="members.php"><i class="fa fa-list"></i>Donor List</a></li>
                    <li><a href="addmember.php"><i class="fa fa-plus-circle"></i>Add Donor</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i> <span>Manage Blood</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="bloodgroup.php"><i class="fa fa-list"></i>Blood Group List</a></li>
                </ul>
            </li>

            <?php
            $sql = mysqli_query($connection, "select * from tblcontactusquery where status = 0");
            $crow = mysqli_num_rows($sql);
            ?>

            <li class="active">
                <a href="contactus.php">
                    <i class="fa fa-mobile"></i> <span>Contact Us Query</span>
                    <span class="pull-right-container">
                        <?php
                        if ($crow > 0) {
                            ?>
                            <small class="label pull-right bg-yellow"><?php echo $crow; ?></small>
                            <?php
                        }
                        ?>
                    </span>
                </a>

            </li>




        </ul>
    </section>
    <!-- /.sidebar -->
</aside>