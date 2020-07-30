<?php 
include "../connect.php";
if(isset($_GET['id'])){
    $mamh=$_GET['id'];
    $query="delete from diemsv where TenMH='$mamh'";
    mysqli_query($connect,$query) or die('Xóa không thành công');
    header('location:../TrangSauDangNhap/RoLeGVDiemSV.php');
}
?>