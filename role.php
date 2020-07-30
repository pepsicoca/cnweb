<?php
session_start();
if(isset($_SESSION['lv'])){
    if($_SESSION['lv'] == 'admin'){
        header("location:TrangSauDangNhap/RoleGiangVien.php");
        
    }   
    if($_SESSION['lv'] == 'sv'){
        header("location:TrangSauDangNhap/RoleSinhVien.php");
        
    } 
}
?>