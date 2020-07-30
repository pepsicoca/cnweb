
<?php
include ('head.php');

if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'sv'))
{
 header("Location:../dangnhap.php");
exit();}

?>
<?php
include ("leftBody.php");
?>
    <div class="sidebar-wrapper">
        <ul class="nav menu">
            <li class="nav-item   ">
                <a class="nav-link" href="RoleSinhVien.php">
                 <i class="fas fa-home"></i>
                    <p>Trang chủ</p>
                 </a>
             </li>
                   
             <li class="nav-item active ">
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

   
  
   
    <!-- Search form -->
    <form class="form-inline md-form form-sm mt-0 search" method="get">
            <div class="tk">
                
               <div>
                    <i class="fas fa-search" aria-hidden="true"></i>
                    <input class="form-control form-control-sm ml-3 w-75 input_search"  type="text" id="tensv" name="tensv"  placeholder="Tìm theo tên"
                    aria-label="Search" >      
               </div>
                <div class="year">
                    <i class="fas fa-search" aria-hidden="true"></i>
                    <input class="form-control form-control-sm ml-3 w-75 input_search"  type="text" id="masv" name="masv"  placeholder="Tìm theo mã sinh viên"
                    aria-label="Search" >
                </div>
                <div class="year">
                    <i class="fas fa-search" aria-hidden="true"></i>
                    <input class="form-control form-control-sm ml-3 w-75 input_search"  type="text" id="tenmonhoc" name="tenmonhoc"  placeholder="Tìm theo tên môn học"
                    aria-label="Search"  >
                </div>
            </div>
            <input type="submit" value="tìm kiếm" class="sb">
            
    </form>
    
    <!-- đổ dữ liệu ra bảng-->
    <?php 

    ?>

    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="Diem1">STT</th>
								<th class="Diem2">Tên môn học</th>
								<th class="Diem3">Số tín chỉ</th>
								<th class="Diem4">Lần học</th>
                                <th class="Diem5">Lần thi</th>
                                <th class="Diem6">Đánh giá</th>
                                <th class="Diem7">Tên sinh viên</th>
                                <th class="Diem8">Mã sinh viên</th>
                                <th class="Diem9">Điểm quá trình</th>
                                <th class="Diem10">Điểm thi</th>
                                <th class="Diem11">TKHP</th>
                                <th class="Diem12">Điểm chữ</th>
								
							</tr>
						</thead>
						<tbody>
                            <?php
                            include("../lib_db.php");
                            
                            $count = 1;
                            $sql = "SELECT * from diemsv";
                            $sql1 = "SELECT * from diemsv where TenSV = '".$_GET['tensv']."' ";
                            $sql2 = "SELECT * from diemsv where MaSV = '".$_GET['masv']."' ";
                            $sql3 = "SELECT * from diemsv where TenMH = '".$_GET['tenmonhoc']."' ";
                            $sql4 = "SELECT * from diemsv where TenSV = '".$_GET['tensv']."' AND MaSV = '".$_GET['masv']."' AND TenMH = '".$_GET['tenmonhoc']."' ";
                
                            if(empty($_GET["tensv"]) && empty($_GET["masv"]) && empty($_GET["tenmonhoc"])){
                                $result = select_list($sql);
                            }
                            elseif(isset($_GET["tensv"]) && empty($_GET["masv"]) && empty($_GET["tenmonhoc"])){
                                $result = select_list($sql1);
                            }
                            elseif(empty($_GET["tensv"]) && isset($_GET["masv"]) && empty($_GET["tenmonhoc"])){
                                $result = select_list($sql2);
                            }
                            elseif(empty($_GET["tensv"]) && empty($_GET["masv"]) && isset($_GET["tenmonhoc"])){
                                $result = select_list($sql3);
                            }
                            else{
                                $result = select_list($sql4);
                            }
                            
                            foreach($result as $diem){
                                echo'<tr>
                                    <td>'.$count++.'</td>
                                    <td>'.$diem['TenMH'].'</td>
                                    <td>'.$diem['SoTC'].'</td>
                                    <td>'.$diem['LanHoc'].'</td>
                                    <td>'.$diem['LanThi'].'</td>
                                    <td>'.$diem['DanhGia'].'</td>
                                    <td>'.$diem['TenSV'].'</td>
                                    <td>'.$diem['MaSV'].'</td>
                                    <td>'.$diem['QuaTrinh'].'</td>
                                    <td>'.$diem['Thi'].'</td>
                                    <td>'.$diem['TKHP'].'</td>
                                    <td>'.$diem['DiemChu'].'</td> 
                                    </tr>';
                            }
                            
                            ?>
								
						</tbody>
					</table>
				</div>
			</div>
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