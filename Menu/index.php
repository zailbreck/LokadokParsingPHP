<?php  
session_start();
if(isset($_SESSION['PHPSESSID'])){
  header('location: dashboard.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="/Assets/css/all.css">
	<link rel="stylesheet" type="text/css" href="/Assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="/Assets/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row" style="padding-top: 15%; ">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="login_execute.php" method="POST">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Username" required >
                <label for="inputEmail">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="passwd" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
  <script type="text/javascript" src="/Assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="/Assets/js/bootstrap.bundle.js"></script>
</body>
</html>