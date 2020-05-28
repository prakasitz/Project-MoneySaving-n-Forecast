<div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= ROOT ?>/index.php"><img src="<?= ROOT ?>/images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="<?= ROOT ?>/index.php"><img src="<?= ROOT ?>/images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                
                        <a>สวัสดี 
                        <!-- start php code -->
                        <?php
                            if(isset($_SESSION['users'])) {
                                echo ucfirst($_SESSION['users']['user_fname']." ".$_SESSION['users']['user_sname'] );   
                            } else {
                               // echo "ชื่อผู้ใช้ สกุล";
                            }
                        ?>
                        <!-- end php code -->
                        </a>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= ROOT ?>/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="index.php"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="http://localhost/zocute/login/login.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->