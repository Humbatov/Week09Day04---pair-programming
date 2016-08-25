<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300italic,300,700,700italic,400italic' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/font-lineicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <div class="main">
    <div class="container">
      <h1>Xəbər əlavə et</h1>
      <form class="" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="email">Başlıq</label>
          <input type="text" name="header" class="form-control" >
        </div>
      <div class="form-group">
        <label for="email">Xəbər</label>
        <textarea class="form-control" name="text" rows="8" cols="40"></textarea>
      </div>
      <div class="form-group">
        <label for="email">Şəkil seç</label>
        <input type="file" name="upload" class="form-control" >
      </div>
      <input class="btn btn-success pull-right" type="submit" name="submit" value="Əlave et">
      </form>
    </div>
  </div>
  <?php
    include "db_connect.php";


    if (isset($_POST["submit"])) {
      $name = $_POST["header"];
      $text = $_POST["text"];
      $fname = $_FILES["upload"]["name"];
      $tmp_name = $_FILES["upload"]["tmp_name"];
      $imgName = rand() . rand() . $fname;
      $targetDir = "../assets/img/";
      $imgSrc = $targetDir . $imgName;


      if ($db_con) {
        $sql = "INSERT INTO article (header, text, image) VALUES ('$name','$text','$imgName')";
        $query = mysqli_query($db_con,$sql);
        move_uploaded_file($tmp_name, $imgSrc);
        header("Location:index.php");
      }


    }else {
      
    }
   ?>

    <script src="../assets/js/vendor/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>
