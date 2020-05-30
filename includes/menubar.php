    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?= ROOT ?>/index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                        </li>
                        <li class="menu-title">menu-title</li><!-- /.menu-title -->
                        <li class="">
                            <a href="<?= ROOT ?>/planing/planing.php"> <i class="menu-icon fa fa-calendar"></i> วางแผนเป้าหมาย</a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-agenda"></i>บันทึกประจำวัน</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa ti-wallet"></i><a href="<?= ROOT ?>/daily/income.php">บันทึกรายรับ</a></li>
                                <li><i class="fa ti-shopping-cart-full"></i><a href="<?= ROOT ?>/daily/expenses.php">บันทึกรายจ่าย</a></li>
                                <li><i class="fa ti-receipt"></i><a href="<?= ROOT ?>/daily/summarydaily.php">สรุปธุรกรรมประจำวัน</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="<?= ROOT ?>/summary/monthly.php"> <i class="menu-icon fa ti-bar-chart"></i> สรุปรายรับรายจ่าย</a>
                        </li>
                        <li class="">
                            <a href="<?= ROOT ?>/forecast/forecast.php"> <i class="menu-icon fa ti-image"></i> การพยากรณ์รายจ่าย</a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-agenda"></i>คำนวณ</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa ti-wallet"></i><a href="<?= ROOT ?>/cal/calIn.php">รายรับ</a></li>
                                <li><i class="fa ti-shopping-cart-full"></i><a href="<?= ROOT ?>/cal/calEx.php">รายจ่าย</a></li>
                                <li><i class="fa ti-shopping-cart-full"></i><a href="<?= ROOT ?>/cal/calMonth.php">รายจ่ายทั้งเดือน</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside>
        <!-- /#left-panel -->
        