<?php
include ('head.php');
if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'admin'))
{
 header("Location:../dangnhap.php");
exit();}

include("../lib_db.php");
?>
<?php
include ("leftBody.php");
?>
<div class="sidebar-wrapper">
        <ul class="nav menu">
        <li class="nav-item   ">
                        <a class="nav-link" href="RoleGiangVien.php">
                        <i class="fas fa-home"></i>
                            <p>Trang chủ</p>
                        </a>
                    </li>
                    
               
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="RoleGVSinhVien.php">
                        <i class="fas fa-graduation-cap"></i>
                            <p>Sinh viên</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVMonHoc.php">
                        <i class="fas fa-book"></i>
                            <p>Môn học</p>
                        </a>
                    </li>
                

                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVDiemSV.php">
                        <i class="fas fa-table"></i>
                            <p>Điểm sinh viên</p>
                        </a>
                    </li>
                    
                    
        </ul>
	  </div>
	  </div>
    </div>
<div class="col-sm-10 page_right">
    <?php
    include ("headerLogin.php");
    ?>
    <main>

    
        <div class="card" id="ADD" style="display:block;">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong style="color:white;">Hello!</strong>
        </h5>

        
        <div class="card-body px-lg-5">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" method="POST" action="../TrangSauDangNhap/xulyupdateRoleGVSinhVien.php?id=<?php echo $_GET['id']?>" >

               <?php 
                    $sql = "SELECT * FROM sinhvien WHERE MaSV ='".$_GET['id']."'";
                    $result = mysqli_query($connect,$sql);
                    $row = mysqli_fetch_assoc($result);                  
               ?>
                <div class="md-form mt-3">
                    <input name='masv' type="text" class="form-control" value="<?php echo $row['MaSV']?>">
                    <label >Mã sinh viên</label>
                </div>

                
                <div class="md-form">
                    <input name='tensv' type="text"  class="form-control" value="<?php echo $row['TenSV']?>">
                    <label >Tên sinh viên</label>
                </div>
                <div class="md-form mt-3">
                    <input name='malop' type="text" class="form-control" value="<?php echo $row['MaLop']?>">
                    <label >Mã lớp</label>
                </div>

                
                <div class="md-form">
                    <input name='gioitinh' type="text"  class="form-control" value="<?php echo $row['GioiTinh']?>">
                    <label >Giới tính</label>
                </div>
                <div class="md-form">
                    <input name='sodienthoai' type="text"  class="form-control" value="<?php echo $row['SDT']?>">
                    <label >Số điện thoại</label>
                </div>
                <div class="md-form mt-3">
                    <input name='email' type="text" class="form-control" value="<?php echo $row['Email']?>">
                    <label >Email</label>
                </div>

                
                <div class="md-form">
                    <input name='diachi' type="text"  class="form-control" value="<?php echo $row['DiaChi']?>">
                    <label >Địa chỉ</label>
                </div>

                
                <button name="update" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">UPDATE</button>
                
            </form>
            
            <!-- Form -->

            </div>

        </div>
    
    </main>
    <?php
    include ("footerLogin.php");
    ?>
</div>
<?php
include ("foot.php");
?>