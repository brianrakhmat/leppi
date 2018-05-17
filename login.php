<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Leppi - Login Sistem Pendukung Keputusan Laptop</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="admin/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="admin/assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="admin/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="admin/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="admin/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="admin/assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="admin/assets/img/4.png" width="150px" alt="Klorofil Logo"></div>
								<!-- <p class="lead">Login to your account</p> -->
							</div>
							<form class="form-auth-small" method="post" action="proses_login.php">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" name="username" class="form-control"  placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password"  name="pass" class="form-control" placeholder="Password">
								</div>
								<button type="submit" id="login" class="btn btn-primary btn-lg btn-block">MASUK</button>
								<!-- <div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div> -->
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">DECISSION SUPPORT SYSTEM</h1>
							<p>PEMILIHAN LAPTOP</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
