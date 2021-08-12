<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="../assets/admin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="../assets/admin/css/login.css">

  </head>
  <body>

  <div class="container">

    <!--Admin Login For start-->
  	<div class="row justify-content-center h-100vh" id="login-form-box"  >
  		<div class="col-lg-10 my-auto">
  			<div class="card-group">
  				<div class="card p-4">
  					<h2 class="text-center text-primary font-weight-bold">Login to your account</h2>
  					<hr class="my-3">
                    <div id="loginError"></div>
  					<form class="px-3" method="post" id="login-form">
  						<div class="input-group input-group-lg form-group">
  							<div class="input-group-prepend">
  								<span class="input-group-text">
  									<i class="fas fa-envelope"></i>
  								</span>

  							</div>
  							<input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email">

  						</div>

  					<div class="input-group input-group-lg form-group">
  							<div class="input-group-prepend">
  								<span class="input-group-text">
  									<i class="fas fa-key"></i>
  								</span>

  							</div>
  							<input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password">

  						</div>
  						<div class="form-group">
  							<div class="float-left custom-control custom-checkbox">
  								<input type="checkbox"  id="rememberMe" name="rememberMe">
  								<label for="rememberMe">Remember me</label>
  								<input type="checkbox" class="custom-control-input" name="">

  							</div>

  							<div class="float-right">
  								<a href="javascript:" class="text-decoration-none" id="showForgottPasswordForm">Forgot password</a>

  							</div>
  							<div class="clearfix"></div>

  						</div>
  						<div class="form-group">
  							<input type="submit" id="loginBtn" value="Sig In" class="btn btn-primary btn-block">

  						</div>

  					</form>
  				</div>
  				<div class="card p-4 justify-content-center" style="background: #363C43">
  					<h2 class="text-center text-white forn-mweght-blod">Welcome back</h2>
  					<hr class="my-3">
  					<p class="text-center text-light lead">Please login in useing your email and pssword.if you have not register yet.you can register free</p>
  					<button class="btn btn-outline-light btn-lg align-self-center mt-4" id="showSignupForm">Sign Up</button>

  				</div>

  			</div>
  		</div>

  	</div>

    <!--Admin Login Form End-->

    <!--Admin register Form start-->


    <div class="row justify-content-center h-100vh" id="register-form-box" style="display: none" >
      <div class="col-lg-10 my-auto">
        <div class="card-group">
          <div class="card p-4">
            <h2 class="text-center text-primary font-weight-bold">Create New account</h2>
            <hr class="my-3">
              <div id="registerError"></div>
            <form class="px-3" method="post" id="register-form">
          <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-user"></i>
                  </span>

                </div>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name">
                <div class="invalid-feedback">This name field is required</div>

              </div>

              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-envelope"></i>
                  </span>

                </div>
                <input type="email" name="email" class="form-control" id="r_email" placeholder="Enter your Email">
                  <div class="invalid-feedback">This email field is required</div>


              </div>

            <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-key"></i>
                  </span>

                </div>
                <input type="password" name="password" class="form-control" id="r-password" placeholder="Enter your Password">
                  <div class="invalid-feedback">This password field is required</div>

              </div>

                 <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-key"></i>
                  </span>

                </div>
                <input type="password" name="c_password" class="form-control" id="c_password" placeholder="Enter your Confirm Password">
                  <div class="invalid-feedback">This confirm password does not match</div>
                  <div class="passerror"></div>

              </div>

              <div class="form-group">
                <input type="submit" value="Register" id="registerUser" class="btn btn-primary btn-block">

              </div>

            </form>
          </div>
          <div class="card p-4 justify-content-center" style="background: #363C43">
            <h2 class="text-center text-white forn-mweght-blod">Welcome back</h2>
            <hr class="my-3">
            <p class="text-center text-light lead">Please login in useing your email and pssword.if you have not register yet.you can register free</p>
            <button class="btn btn-outline-light btn-lg align-self-center mt-4" id="showSignInForm">Sign In</button>

          </div>

        </div>
      </div>

    </div>

    <!--Admin register Form end-->

<!--Admin Forgot password Start-->

    <div class="row justify-content-center h-100vh" id="forgotten-form-box" style="display: none" >
      <div class="col-lg-10 my-auto">
        <div class="card-group">
          <div class="card p-4">
            <h2 class="text-center text-primary font-weight-bold">Forgot Password</h2>
            <hr class="my-3">
            <form class="px-3" method="post" id="forgotten-form">
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-envelope"></i>
                  </span>

                </div>
                <input type="email" name="email" class="form-control" id="email1" placeholder="Enter your Email">

              </div>
              <div class="form-group">
                <input type="submit" name=" submit" value="Reset Password" class="btn btn-primary btn-block">

              </div>

            </form>
          </div>
          <div class="card p-4 justify-content-center" style="background: #363C43">
            <h2 class="text-center text-white forn-mweght-blod">Welcome back</h2>
            <hr class="my-3">
            <p class="text-center text-light lead">Please login in useing your email and pssword.if you have not register yet.you can register free</p>
            <button class="btn btn-outline-light btn-lg align-self-center mt-4" id="showSignForm">Back</button>

          </div>

        </div>
      </div>

    </div>

    <!--Admin Forgot password End-->

  </div>



  <script type="text/javascript" src="../assets/admin/js/jquery-3.5.1.min.js"></script>

     <!-- <script type="text/javascript" src="../assets/admin/js/jquery-3.5.1.slim.min.js"></script> -->
      <script type="text/javascript" src="../assets/admin/js/popper.min.js"></script>
      <script type="text/javascript" src="../assets/admin/js/bootstrap.min.js"></script>
       <script type="text/javascript" src="../assets/admin/js/login.js"></script>

  </body>
</html>
