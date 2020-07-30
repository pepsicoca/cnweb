<?php
include ('head.php');
if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'admin'))
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
                                                     
                    <li class="nav-item ">
                        <a class="nav-link" href="RoleGVSinhVien.php">
                        <i class="fas fa-graduation-cap"></i>
                            <p>Sinh viên</p>
                        </a>
                    </li>
                    <li class="nav-item active">
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
    <?php
    include ("headerLogin.php");
    ?>
    <main>
    <!-- Search form -->
    <form class="form-inline md-form form-sm mt-0 search">
         <!--Dropdown primary-->
        <div class="dropdown">

        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Danh môn học</button>
        <!--Menu-->
        <div class="dropdown-menu dropdown-primary">
        <?php
            $sql2 = "SELECT * FROM monhoc ";
            $result1 = mysqli_query($connect,$sql2);
            if(mysqli_num_rows($result1)>0)
            {
                while($row = mysqli_fetch_assoc($result1))
                { 
        ?> 
        <a class="dropdown-item" id="class" href="../TrangSauDangNhap/RoleGVMonHoc.php?class=<?php echo $row['TenMH']?>" name="class" ><?php echo $row["TenMH"]?></a>
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
								<th class="column1">STT</th>
								<th class="column2">Tên môn học</th>			
								<th class="column4">Số tín chỉ</th>						
							</tr>
						</thead>
						<tbody>
                        <?php
                        
                        $sql = "SELECT * FROM MonHoc WHERE TenMH = '".$_GET['class']."'";
                        $sql1 = "SELECT * FROM MonHoc";
                        if(isset($_GET["class"]))
                        {
                            $result = mysqli_query($connect,$sql);
                        }
                        if(empty($_GET["class"]))
                        {
                            $result = mysqli_query($connect,$sql1);
                        }
                        
                        if(mysqli_num_rows($result)>0){
                            $i=0;
                            while($r=mysqli_fetch_assoc($result)){
                                $i ++;
                                $tenmh=$r['TenMH'];
                                $sotc=$r['SoTC'];                            
                             
                                echo "<tr>";
                                echo "<td class ='column1'>$i</td>";
                                echo "<td class ='column2'>$tenmh</td>";
                                echo "<td class ='column3'>$sotc</td>";
                               
                               
                            }
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