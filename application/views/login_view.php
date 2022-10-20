<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tag Description -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <!-- Meta Tag Description -->

    <!-- Page Title Text -->
    <title>Login</title>
    <!-- Page Title Text -->

    <!--Fevicon Icon Start-->   
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/x-icon">
    <!--Fevicon Icon End-->

    <!--Font Description-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!--Font Description-->

    <!-- Css Part Start -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font/material-icon/materialdesignicons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font/font-awesome/font-awesome.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugin/AdminLTE.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    <!-- Css Part End -->

    <!--[if lt IE 9]>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/respond.min.js"></script>
   <![endif]-->

</head>

<body class="skin-blue sidebar-mini">
    <!-- <Start Of Header Section> -->
    

    <!-- <End Of Body Section> -->

    <!-- Javascript Start Here -->
    <script src="<?php echo base_url();?>assets/js/plugin/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugin/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugin/bootstrap.min.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/js/plugin/adminlte.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script> -->
    <!-- <script src="<?php echo base_url();?>assets/js/app.js"></script> -->
  
    <!-- Javascript End Here -->

    <div class="log-in">
		<div class="container-login">
                <div class="wrap-login">
				<form class="login-form validate-form">
					
					<span class="login-form-title p-b-48">
						<img src="<?php echo base_url();?>assets/images/mobio-logoaa.png">
					</span>
                    <div class="log-head">
                            <h2>Login</h2>
                        </div>
					<div class="wrap-input validate-input" data-validate = "Valid email is: a@b.c">
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
					</div>

					<div class="wrap-input validate-input" data-validate="Enter password">
						
                            <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
                    </div>
                    <div class="contact-form-checkbox">
							<input class="input-checkbox" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox" for="ckb1">
								Remember me
                            </label>
                        </div>

					<div class="container-login-form-btn">
						<div class="wrap-login-form-btn">
							<div class="login-form-bgbtn"></div>
							<button class="login-form-btn">
								<a href="index.html">Login</a>
							</button>
						</div>
					</div>

					<div class="text-center">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="sign-up.html">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>