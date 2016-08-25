<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="../assets/css/login.css" media="screen" title="no title" charset="utf-8">
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row text-center">
      <div class="col-md-3 col-md-offset-4">
        <div class="thumbnail loginImg">
          <img class="img-responsive" src="../assets/img/login.png" alt="" />
        </div>
        <h5><strong>Admin Login</strong></h5>
        <p>Sign in to your account</p>
        <form class="form-signin" action="check.php" method="post">
          <input type="text" class="form-control" name="email" placeholder="Email"  autofocus>
          <input type="password" class="form-control" name="password" placeholder="Password" >
          <input class="btn btn-lg btn-primary btn-block" name="submit" value="Sign In" type="submit">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
