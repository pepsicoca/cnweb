<?php
include ('head.php');
if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'GV'))
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
                        <a class="nav-link" href="RoleGiangVien.php">
                        <i class="fas fa-home"></i>
                            <p>Trang chủ</p>
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="RoleGVLop.php?class=">
                        <i class="fas fa-store-alt"></i>
                            <p>Lớp</p>
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
                        <a class="nav-link" href="RoleGVChiTietMH.php">
                        <i class="fas fa-book-open"></i>
                            <p>Chi tiết môn học</p>
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
    <?php include ("HoSoGV.php")?>
    <!-- Search form -->
    <form class="form-inline md-form form-sm mt-0 search">
        <!--Dropdown primary-->
        <div class="dropdown">

        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Danh sách lớp</button>
        <!--Menu-->
        <div class="dropdown-menu dropdown-primary">
        <?php
             $sql2 = "SELECT * FROM lop";
             $result1 = mysqli_query($connect,$sql2);
             if(mysqli_num_rows($result1)>0)
             {
                 while($row = mysqli_fetch_assoc($result1))
                 { 
        ?> 
        <a class="dropdown-item" id="class" href="../TrangSauDangNhap/RoleGVLop.php?class=<?php echo $row['MaLop']?>" name="class" ><?php echo $row["MaLop"]?></a>
        <?php
                 }
            }
            
        ?>
        </div>
        </div>
        <!--/Dropdown primary-->
    </form>
    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class=" lop1">STT</th>
								<th class=" lop2">Mã lớp</th>
                                <th class=" lop3">Mã khoa</th>
                                <th class="lop4">Tên lớp</th>
								<th class=" lop5">Sĩ số</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php
                            
                            $count = 1;
                            $sql = "SELECT * FROM lop WHERE MaLop = '".$_GET['class']."'";
                            $sql1 = "SELECT * FROM lop";
                            if(isset($_GET["class"]))
                            {
                                $result = mysqli_query($connect,$sql);
                            }
                            if(empty($_GET["class"]))
                            {
                                $result = mysqli_query($connect,$sql1);
                            }
                            if(mysqli_num_rows($result)>0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    ?>
								<tr>
									<td class="lop1"><?php echo $count++?></td>
									<td class="lop2"><?php echo $row["MaLop"]?></td>
									<td class="lop3"><?php echo $row["MaKhoa"]?></td>
									<td class="lop4"><?php echo $row["TenLop"]?></td>
									<td class="lop5"><?php echo $row["SiSo"]?></td>
                                </tr>	
                               
                                <?php
                                 }
                             }
                             else
                             {
                                 echo("NO! Value");
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