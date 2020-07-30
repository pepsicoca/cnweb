<?php
include "../connect.php";

$mamh=$_POST['mamh'];
$sotc=$_POST['sotc'];
$lanhoc=$_POST['lanhoc'];
$lanthi=$_POST['lanthi'];

$masv=$_POST['masv'];
$diemqt=$_POST['diemqt'];
$diemthi=$_POST['diemthi'];


$query1="INSERT INTO diemsv VALUES ('".$mamh."','".$sotc."','".$lanhoc."','".$lanthi."',NULL,'".$masv."','".$diemqt."','".$diemthi."',NULL,NULL)"; 
if(isset($_POST['mamh']) && isset($_POST['sotc']) && isset($_POST['lanhoc']) && isset($_POST['lanthi']) && isset($_POST['masv']) && isset($_POST['diemqt']) && isset($_POST['diemthi']))
         {
            if(empty($_POST['mamh']) || empty($_POST['sotc']) || empty($_POST['lanhoc']) || empty($_POST['lanthi']) || empty($_POST['masv']) || empty($_POST['diemqt']) || empty($_POST['diemthi']))
                    {
                           echo "Mời bạn nhập đầy đủ thông tin .<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                           exit();
                 }
            if (mysqli_query($connect, $query1)) {
                header("location:../TrangSauDangNhap/RoLeGVDiemSV.php");
            } else {
                echo "Lỗi: " . $query1 . "<br>" . mysqli_error($connect);
            }
         }
?>