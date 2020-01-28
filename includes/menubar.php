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
                            <a href="<?= ROOT ?>/planing/planing.php"> <i class="menu-icon fa fa-table"></i> วางแผนเป้าหมาย</a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>บันทึกประจำวัน</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-puzzle-piece"></i><a href="<?= ROOT ?>/daily/income.php">บันทึกรายรับ</a></li>
                                <li><i class="fa fa-id-badge"></i><a href="<?= ROOT ?>/daily/expenses.php">บันทึกรายจ่าย</a></li>
                                <li><i class="fa fa-id-card-o"></i><a href="<?= ROOT ?>/daily/summarydaily.php">สรุปธุรกรรมประจำวัน</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>สรุปรายรับรายจ่าย</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-th"></i><a href="<?= ROOT ?>/summary/monthly.php">รายเดือน</a></li>
                                <li><i class="menu-icon fa fa-th"></i><a href="<?= ROOT ?>/summary/quarter.php">รายไตรมาส</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="<?= ROOT ?>/forecast/forecast.php"> <i class="menu-icon fa fa-table"></i> การพยากรณ์รายรับรายจ่าย</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside>
        <!-- /#left-panel -->