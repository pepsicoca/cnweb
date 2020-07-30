<?php
include ('head.php');

if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'sv'))
{
 header("Location:../dangnhap.php");
exit();}


include ("leftBody.php");
?>
      <div class="sidebar-wrapper">
        <ul class="nav menu">
                    <li  class="nav-item active  ">
                        <a class="nav-link" href="RoleSinhVien.php">
                        <i class="fas fa-home"></i>
                            <p>Trang chủ</p>
                        </a>
                    </li>
                   
                    <li class="nav-item ">
                        <a class="nav-link" href="RoleSVDiem.php?tensv=&masv=&tenmonhoc=">
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
    <?php
   
        include ("main_page.php");

    ?>
    </main>
    <?php
    include ("footerLogin.php");
    ?>
</div>
<?php
include ("foot.php");

?>