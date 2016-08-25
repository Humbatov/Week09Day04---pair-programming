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
        <h2>Xəbərlərin siyahısı
          <form class="" action="addnews.php" method="post">
            <input class="btn btn-succes pull-right" type="submit" name="create" value="Create">
          </form>
        </h2>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Header</th>
      <th>Text</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
  </thead>
  <?php
    include "db_connect.php";

    if ($db_con) {
      $sql = "SELECT * FROM article";
      $query = mysqli_query($db_con,$sql);
      $imgSrcRoot = "../assets/img/";


      while ($row = mysqli_fetch_assoc($query)) {

        ?>
        <tbody>
        <tr>
          <td style="width: 100px;"><?php echo $row["header"]  ?></td>
          <td style="width: 420px;"><?php echo $row["text"]  ?></td>
          <td>
            <div class="img">
              <img class="img-responsive" src="<?php echo $imgSrcRoot . $row["image"]  ?>" alt="" />
            </div>
          </td>
          <td>
            <form class="">
              <input type="button" formaction name="delete" value="Delete">
              <input type="button" name="update" value="Update">
            </form>
          </td>
        </tr>
        </tbody>
        <?php
      }
    }

   ?>


  <!-- <tbody>
    <tr>
      <td style="width: 100px;">Əhaliyə göstərilən ödənişli xidmətlərin dəyəri artıb</td>
      <td style="width: 420px;">
        Cari ilin 7 ayı ərzində əhaliyə göstərilən ödənişli xidmətlərin dəyəri 2015-ci ilin eyni dövrü ilə müqayisədə 1,1 faiz artaraq 4 milyard 036,7 milyon manat olub.Oxu.Az xəbər verir ki, Dövlət Statistika Komitəsindən fins.az-a bildirilib ki, artımın 51,0 faizini hüquqi şəxslər təmin edib və onlar tərəfindən əhaliyə 2 milyard 978,8 milyon manatlıq xidmət göstərilib.Bu isə ötən ilin müvafiq dövrünün göstəricisini 0,7 faiz üstələyib.Həmin dövr ərzində hər bir ölkə sakini orta hesabla 419,9 manatlıq və ya ötən ilin müvafiq dövrü ilə müqayisədə 18,5 manat çox müxtəlif ödənişli xidmətlərdən istifadə edib.
      </td>
      <td>
        <div class="img">
          <img class="img-responsive" src="../assets/img/3.jpg" alt="" />
        </div>
      </td>
      <td>
        <form class="">
          <input type="button" formaction name="delete" value="Delete">
          <input type="button" name="update" value="Update">
        </form>
      </td>
    </tr>
    <tr>
      <td>Mary</td>
      <td>Moe</td>
      <td>mary@example.com</td>
      <td>
        <form class="">
          <input type="button" formaction name="delete" value="Delete">
          <input type="button" name="update" value="Update">
        </form>
      </td>
    </tr>
    <tr>
      <td>July</td>
      <td>Dooley</td>
      <td>july@example.com</td>
      <td>
        <form class="">
          <input type="button" formaction name="delete" value="Delete">
          <input type="button" name="update" value="Update">
        </form>
      </td>
    </tr>

  </tbody> -->
</table>
</div>

    </div>

    <script src="../assets/js/vendor/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>
