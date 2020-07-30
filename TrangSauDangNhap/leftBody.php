
<div class="row">
    <div class="col-sm-2">
    <div class="sidebar" data-color="purple" data-background-color="black" >
        <div class="logo"><span>Xin chào! <?php echo $_SESSION['name']; ?> </span>
            <div class="nav_user">
            <nav class="nav flex-column ">
                <button style="width:100% ; text-align:left" name ="" class="nav-link " href="#"><i class="fas fa-home"></i>Trang chủ</button>
                <a class="nav-link" href="#!" onclick="myFunction()"><i class="fas fa-users"></i>Hồ sơ</a>
                <a onclick="logout()" id="logout" class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i>Logout</a>

            </nav>
            </div>
            <script>
            function myFunction() {
                document.getElementById("information").style.display = "block";
            }
            function logout(){
                var r = confirm("Bạn thật sự muốn thoát");
                if (r == true) {
                     window.location="logout.php";
              }
            }
            </script>
      </div>
     
    