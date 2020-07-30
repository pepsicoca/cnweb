<html>
<head>
	<title>Trang Quên Mật Khẩu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
   img{height:100px;width:50px;object-fit:contain}
  </style>
</head>
<body>
  <header>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <a class="navbar-brand" href="#">
    <img src="images/logo_TLU.png" alt="logo" style="width:300px;">
  </a>
  <h1 style="color: #024282; margin-left: 200px">Forget Password</h1>
  </nav>
  </header>
  <div class="container" style="margin-top:50px; ">  
  <div class="form-group" style="margin-left:300px">
      <label for="email">Tài Khoản:</label>
      <input type="password" class="form-control" id="p.pw" placeholder="Enter Email" name="p.pw" style="width:500px">
    </div>
    <div class="form-group" style="margin-left:300px">
      <label for="email">New Password:</label>
      <input type="password" class="form-control" id="p.pw" placeholder="Enter New Password" name="p.pw" style="width:500px">
    </div>
    <div class="form-group" style="margin-left:300px">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="c.pw" placeholder="Enter confirm password" name="c.pw" style="width:500px">

    </div>
    <div class="form-group" style="margin-left:300px">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" id="mail" placeholder="Enter mail" name="mail" style="width:500px">
      </div>
    <button type="submit" id ="btndangnhap" class="btn btn-primary" name="btn_dangnhap" style="margin-left:300px">Submit</button>

  <div id="error" style="color: red; margin-left:300px; "></div>
 
</div>