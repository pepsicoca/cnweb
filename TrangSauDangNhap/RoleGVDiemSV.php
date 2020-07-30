<?php
include ('head.php');
if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'admin'))
{
 header("Location:../dangnhap.php");
exit();}
?>
<?php
include ("leftBody.php");

// include("../lib_db.php");
// $sql="SELECT * from diemsv";
// $result=  select_list($sql);
?>
<div class="sidebar-wrapper">
        <ul class="nav menu">
                    <li class="nav-item   ">
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
                    <li class="nav-item active">
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
    <?php
    include ("headerLogin.php");
    ?>
    <main>

    <div class="dropdown" >
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Danh sách lớp</button>
                            <!--Menu-->
                            <div class="dropdown-menu dropdown-primary">
                                <?php
                                    $sql2 = "SELECT * FROM Lop";
                                    $result1 = mysqli_query($connect,$sql2);
                                    if(mysqli_num_rows($result1)>0)
                                    {
                                        while($row = mysqli_fetch_assoc($result1))
                                        { 
                                ?>
                                    <a class="dropdown-item" id="class"
                                        href="../TrangSauDangNhap/RoleGVDiemSV.php?class=<?php echo $row['MaLop']?>"
                                        name="class"><?php echo $row["MaLop"]?></a>
                                <?php
                                        }
                                    }
                    
                                ?>
                            </div>
        </div>

        <!-- search form -->
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
        <!-- search form -->

    <button class="ADD" id="add" onclick="ADD()">ADD</button>
            <script>
            function ADD() {
                document.getElementById("ADD").style.display = "block";
                document.getElementById("add").style.display = "none";
            }
            </script>
            
        <div class="card" id="ADD">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong style="color:white;">Hello!</strong>
        </h5>

        
        <div class="card-body px-lg-5">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="addiemsv.php" method='post'>
            
            <div class="md-form mt-3">
                    <input name='tenmh' type="text" class="" style="">
                    <label >Tên môn học</label>
                </div>

                
                
                <div class="md-form mt-3">
                    <input name='sotc' type="text" class="form-control">
                    <label >Số tín chỉ</label>
                </div>
                <div class="md-form mt-3">
                    <input name='lanhoc' type="text" class="form-control">
                    <label >Lần học</label>
                </div>

                
                <div class="md-form">
                    <input name='lanthi' type="text"  class="form-control">
                    <label >Lần thi</label>
                </div>
               
                <div class="md-form mt-3">
                    <input name='tensv' type="text" class="form-control">
                    <label >Tên sinh viên</label>
                </div>
               
                <div class="md-form mt-3">
                    <input name='masv' type="text" class="form-control">
                    <label >Mã sinh viên</label>
                </div>

                
                <div class="md-form">
                    <input name='diemqt' type="text"  class="form-control">
                    <label >Điểm quá trình</label>
                </div>
                <div class="md-form mt-3">
                    <input name='diemthi' type="text" class="form-control">
                    <label >Điểm thi</label>
                </div>

                
                
                
                
                
                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">ADD</button>

            </form>
            <!-- Form -->

            </div>

        </div>
    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="Diem1" style="">STT</th>
								<th class="Diem2">Tên môn học</th>                               								
								<th class="Diem4">Số tín chỉ</th>
                                <th class="Diem2">Lần học</th>								
                                <th class="Diem5">Lần thi</th>
                                <th class="Diem6">Đánh giá</th>
                                <th class="Diem6">Tên sinh viên</th>
                                <th class="Diem8">Mã sinh viên</th>
                                <th class="Diem9">Điểm quá trình</th>
                                <th class="Diem10">Điểm thi</th>
                                <th class="Diem11">TKHP</th>
                                <th class="Diem12">Điểm chữ</th>
                                <td class="Diem5"></td>
                                <td class="Diem5"></td>								
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