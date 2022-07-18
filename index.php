<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
    <title>Siakad UIN Sudra</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="aset/fa/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="aset/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="aset/plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
		<div class="login-logo">
			<h2>Siakad UIN Sunan Drajat Lamongan</h2>
		</div>
		<div class="login-box-body">
			<b><p class="login-box-msg">Login Siakad</p></b>
			<form action="cek_login.php" method="post">
				<div class="form-group has-feedback">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Username" required="required" />
					<span class="form-control-feedback"><i class="fa fa-user"></i></span>
				</div>
				<div class="form-group has-feedback">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password" required="required" />
					<span class="form-control-feedback"><i class="fa fa-unlock"></i></span>
				</div>
				<div class="row">
					<div class="col-xs-8">
					</div><!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary" value="login">Sign In<i class="fa fa-sign-in"></i></button>
					</div>
				</div>
				<br>
				<?php
				if(isset($_GET['pesan'])){
					if($_GET['pesan']=="gagal"){
						echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
					}
				}
				?>
				</br>
			</form>
		</div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
	<!-- jQuery 2.1.4 -->
    <script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="aset/plugins/iCheck/icheck.min.js"></script>
</body>
</html>