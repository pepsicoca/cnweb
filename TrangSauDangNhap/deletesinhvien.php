<?php 
include "../connect.php";
if(isset($_GET['id'])){
    $masv=$_GET['id'];
    $query="delete from sinhvien where MaSV='$masv'";
    mysqli_query($connect,$query) or die('Xóa không thành công');
    header('location:../TrangSauDangNhap/RoLeGVSinhVien.php');
}
?>