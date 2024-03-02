<!doctype html>
<html lang="en">
  <head>
  	<title>Gallery Art</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/logo.jpg);"></div>
		      		<h3 class="text-center mb-0">Welcome</h3>
		      			<p class="text-center">Sign in by entering the information below</p>
							<form action="" method="post" class="login-form">
		      					<div class="form-group">
		      						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      							<input name="user" class="form-control" placeholder="Username" required>
		      						</div>
	            				<div class="form-group">
	            					<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	             						 <input type="password" name="pass" class="form-control" placeholder="Password" required>
	            					</div>
	            				<div class="form-group d-md-flex">
									<div class="w-100 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
	            				</div>
	            				<div class="form-group">
	            					<button type="submit" class="btn form-control btn-primary rounded submit px-3" name="login">LOGIN</button>
	            				</div>
	          			</form>
	        		</div>
				</div>
			</div>
		</div>
	</section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

<?php
session_start();
if (isset($_POST['login'])) {
include "app/koneksi.php";
$user = $_POST['user'];
$pass = $_POST['pass'];

$cari = $konek->query("SELECT * from login where user='$user' and pass='$pass'");
$cek = $cari->num_rows;
if ($cek == 0){

?>
<div class="alert alert-danger mt-2" role="alert">
	Username/pass tidak di temukan
</div>
<?php

} else {
	$_SESSION['user']= $user;
?>
	<script>
		document.location.href = 'app/index.php';
	</script>

<?php
	}
}
