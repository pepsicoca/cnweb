<?php
include ('head.php');
if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'admin'))
{
 header("Location:../dangnhap.php");
exit();}


include ("leftBody.php");
?>
<div class="sidebar-wrapper">
    <ul class="nav menu">
        <li class="nav-item active  ">
            <a class="nav-link" href="RoleGiangVien.php">
                <i class="fas fa-home"></i>
                <p>Trang chủ</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="RoleGVSinhVien.php">
                <i class="fas fa-graduation-cap"></i>
                <p>Sinh viên</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="RoleGVMonHoc.php?class=">
                <i class="fas fa-book"></i>
                <p>Môn học</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="RoleGVDiemSV.php?tensv=&masv=&tenmonhoc=">
                <i class="fas fa-table"></i>
                <p>Điểm sinh viên</p>
            </a>
        </li>

    </ul>
</div>
</div>
</div>
<div class="col-sm-10 page_right">
    <header>
        <div class="container-fluid pageHeader">
            <h1>HỆ THỐNG ĐĂNG KÍ HỌC - TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
        </div>
    </header>
    <main>
        <div class="container-fluid main_page">
            <div class="panel panel-container">
                <div class="row">
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-teal panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
                                <div class="large">120</div>
                                <div class="text-muted">New Orders</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-blue panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
                                <div class="large">52</div>
                                <div class="text-muted">Comments</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-orange panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                                <div class="large">24</div>
                                <div class="text-muted">New Users</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-red panel-widget ">
                            <div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
                                <div class="large">25.2k</div>
                                <div class="text-muted">Page Views</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.row-->
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Site Traffic Overview

                            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em
                                    class="fa fa-toggle-up"></em></span></div>
                        <div class="panel-body">
                            <div class="canvas-wrapper">
                                <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row footer_main">
                <div class="col-xs-6 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body easypiechart-panel">
                            <h4>New Orders</h4>
                            <div class="easypiechart" id="easypiechart-blue" data-percent="92"><span
                                    class="percent">92%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body easypiechart-panel">
                            <h4>Comments</h4>
                            <div class="easypiechart" id="easypiechart-orange" data-percent="65"><span
                                    class="percent">65%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body easypiechart-panel">
                            <h4>New Users</h4>
                            <div class="easypiechart" id="easypiechart-teal" data-percent="56"><span
                                    class="percent">56%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body easypiechart-panel">
                            <h4>Visitors</h4>
                            <div class="easypiechart" id="easypiechart-red" data-percent="27"><span
                                    class="percent">27%</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->


    </main>
    <?php
    include ("footerLogin.php");
    ?>
</div>
<?php
include ("foot.php");
?>