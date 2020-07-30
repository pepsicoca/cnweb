<?php
 include ('head.php');
if (!isset($_SESSION['lv']) || ($_SESSION['lv'] != 'admin'))
{
 header("Location:../dangnhap.php");
exit();}
include ("leftBody.php");

include("../lib_db.php");

//print_r($result);exit();
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
                                        href="../TrangSauDangNhap/RoleGVSinhVien.php?class=<?php echo $row['MaLop']?>"
                                        name="class"><?php echo $row["MaLop"]?></a>
                                <?php
                                        }
                                    }
                    
                                ?>
                            </div>
                </div>
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
                <form class="text-center" style="color: #757575;" action="addsinhvien.php" method='post'>


                    <div class="md-form mt-3">
                        <input name='masv' type="text" class="form-control">
                        <label>Mã sinh viên</label>
                    </div>


                    <div class="md-form">
                        <input name='tensv' type="text" class="form-control">
                        <label>Tên sinh viên</label>
                    </div>
                    <div class="md-form mt-3">
                        <input name='malop' type="text" class="form-control">
                        <label>Mã lớp</label>
                    </div>


                    <div class="md-form">
                        <input name='gioitinh' type="text" class="form-control">
                        <label>Giới tính</label>
                    </div>
                    <div class="md-form">
                        <input name='sodienthoai' type="text" class="form-control">
                        <label>Số điện thoại</label>
                    </div>
                    <div class="md-form mt-3">
                        <input name='email' type="text" class="form-control">
                        <label>Email</label>
                    </div>


                    <div class="md-form">
                        <input name='diachi' type="text" class="form-control">
                        <label>Địa chỉ</label>
                    </div>
                    <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect"
                        type="submit">ADD</button>

                </form>
                <!-- Form -->

            </div>

        </div>

        <div class="limiter">
            <!---------inport------------------------>
            <form class="form-horizontal" action="" method="post" name="uploadCSV" enctype="multipart/form-data"
                style="position: relative; left:200px; bottom:45px">
                <div class="input-row">

                    <input type="file" name="file" id="file" accept=".csv">
                    <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
                    <br />

                </div>
                <div id="labelError"></div>
            </form>
            <!---------inport------------------------>
            <?php


if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT into sinhvien
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','" . $column[6] . "')";
            $result = mysqli_query($connect, $sqlInsert);
            
            if (! empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
    }
}
?>
            <!---------import------------------------>
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100">
                        <table>
                            <thead>
                                <tr class="table100-head">
                                    <th class="column1" style="backgroud-color:red">STT</th>
                                    <th class="column2">Mã sinh viên</th>
                                    <th class="column3">Tên sinh viên</th>
                                    <th class="column4">Mã lớp</th>
                                    <th class="column5">Giới tính</th>
                                    <th class="column6">Số điện thoại</th>
                                    <th class="column7">Email</th>
                                    <th class="column8">Địa chỉ</th>
                                    <td class="column4"></td>
                                    <td class="column5"></td>

                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                                        $count = 1;                                                 
                                        $sql1 = "select * from sinhvien";                                       
                                        $sql = "SELECT * from sinhvien where MaLop = '".$_GET['class']."' ";
                                        if(empty($_GET['class'])){
                                            $result = select_list($sql1);
                                        }
                                        else{
                                            $result = select_list($sql);
                                        }
                                        
                                        foreach($result as $sv){
                                            echo'<tr>
                                        <td class="lop1">'.$count++.'</td>
                                        <td class="lop2">'.$sv['MaSV'].'</td>
                                        <td class="lop3">'.$sv['TenSV'].'</td>
                                        <td class="lop4">'.$sv['MaLop'].'</td>
                                        <td class="lop5">'.$sv['GioiTinh'].'</td>
                                        <td class="lop4">'.$sv['SDT'].'</td>
                                        <td class="lop5">'.$sv['Email'].'</td>
                                        <td class="lop5">'.$sv['DiaChi'].'</td>
                                        <td class ="column4" name="update" class="lop5 update_Khoa" onclick="ADD()"><a href="../TrangSauDangNhap/updateRoleGVSinhVien.php?id='.$sv["MaSV"].'"><i class="fas fa-pencil-alt"></i></a></td>
                                        <td  class="column5 remove_Khoa"><a href="../TrangSauDangNhap/deletesinhvien.php?id='.$sv["MaSV"].'"><i class="fas fa-trash-alt"></i></a></td>
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