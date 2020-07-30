<?php
include "../connect.php";
include("../lib_db.php");
$masv=$_POST['masv'];
$tensv=$_POST['tensv'];
$malop=$_POST['malop'];
$gioitinh=$_POST['gioitinh'];
$sodienthoai=$_POST['sodienthoai'];
$email=$_POST['email'];
$diachi=$_POST['diachi'];

$data = array();
$data['MaSV'] = $masv;
$data['TenSV'] = $tensv;
$data['MaLop'] = $malop;
$data['GioiTinh'] = $gioitinh;
$data['SDT'] = $sodienthoai;
$data['Email'] = $email;
$data['DiaChi'] = $diachi;

$table = "sinhvien";
$sql = data_to_sql_insert($table,$data);
//print_r($sql);exit();

$ret = exec_update($sql);

// $query1="INSERT INTO sinhvien VALUES('".$masv."','".$tensv."','".$malop."','".$gioitinh."','".$sodienthoai."','".$email."','".$diachi."')"; 
// if(isset($_POST['masv']) && isset($_POST['tensv']) && isset($_POST['malop']) && isset($_POST['gioitinh']) && isset($_POST['sodienthoai']) && isset($_POST['email']) && isset($_POST['diachi']))
//          {
//                 if(empty($_POST['masv']) || empty($_POST['tensv']) || empty($_POST['malop']) || empty($_POST['gioitinh']) || empty($_POST['sodienthoai']) || empty($_POST['email']) || empty($_POST['diachi']))
//                     {
//                            echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
//                            exit();
//                  }
// if (mysqli_query($connect, $query1)) {
//     header("location:../TrangSauDangNhap/RoLeGVSinhVien.php");
// } else {
//     echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
// }
//          }

if($ret){
    header("location:../TrangSauDangNhap/RoLeGVSinhVien.php");
}
else{
    echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
}
?>