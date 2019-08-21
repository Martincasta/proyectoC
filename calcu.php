<!DOCTYPE html>
<html lang="en">
<?php   error_reporting(0);
          include_once "login/dbh.inc.php"; ?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Maths Calculadora</title>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/smaths.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="container">
    <?php include("sidebar.php");  ?>
    <div id="content-wrapper" class="d-flex flex-column">
     <?php include("navbar.php"); ?>

      <div id="content">
        <div class="container-fluid justify-content flex-grow-1" align="center" style="height:300%;">
        <form name="myform" action="" method="post">
        <input type="text" class="form-control form-control-user" name="display">
        <hr>
        <hr><p align="center" class="flex-grow-1" style ="width: 100%; height: 300%; font-size: 26px; float:center;">
    <input type="button" class="calc-btn btn btn-outline-danger" name="btn-del" value="DEL" onclick="del()">
    <input type="button" class="calc-btn btn btn-outline-danger" name="btn-ac" value="AC" onclick="ac()">
    <input type="button" class="calc-btn btn btn-outline-danger" name="btn-plus" value="+" onclick="myclick('+')">
    <input type="button" class="calc-btn btn btn-outline-danger" name="btn-sin" value="sin" onclick="fnsin()">
    <input type="button" class="calc-btn btn btn-outline-danger" name="btn-asin" value="asin" onclick="fnasin()">
    <input type="button" class="calc-btn btn btn-outline-danger" name="btn-sin" value="sin" onclick="fnsin()">       
    </p><p align="center" style ="width: 100%; height: 300%; font-size: 24px; float:center;">
    <input type="button" class="calc-btn btn btn-outline-dark" name="btn-7" value="7" onclick="myclick('7')">
    <input type="button" class="calc-btn btn btn-outline-dark" name="btn-8" value="8" onclick="myclick('8')">
    <input type="button" class="calc-btn btn btn-outline-dark" name="btn-9" value="9" onclick="myclick('9')">
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-minus" value="-" onclick="myclick('-')">
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-cos" value="cos" onclick="fncos()"> 
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-acos" value="acos" onclick="fnacos()">
    <input type="button" class="calc-btn btn btn-outline-danger" name="btn-sin" value="sin" onclick="fnsin()">   
    </p><p align="center" style ="width: 100%; height: 300%; font-size: 24px; float:center;">
    <input type="button" class="calc-btn btn btn-outline-dark" name="btn-4" value="4" onclick="myclick('4')">
    <input type="button" class="calc-btn btn btn-outline-dark" name="btn-5" value="5" onclick="myclick('5')">
    <input type="button" class="calc-btn btn btn-outline-dark" name="btn-6" value="6" onclick="myclick('6')">
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-mul" value="*" onclick="myclick('*')">
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-tan" value="tan" onclick="fntan()">
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-atan" value="atan" onclick="fnatan()">
    <input type="button" class="calc-btn btn btn-outline-danger" name="btn-sin" value="sin" onclick="fnsin()">         
    </p><p align="center" style ="width: 100%; height: 300%; font-size: 24px; float:center;">
    <input type="button" class="calc-btn btn btn-outline-dark" name="btn-1" value="1" onclick="myclick('1')">
    <input type="button" class="calc-btn btn btn-outline-dark" name="btn-2" value="2" onclick="myclick('2')">
    <input type="button" class="calc-btn btn btn-outline-dark" name="btn-3" value="3" onclick="myclick('3')">
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-div" value="%" onclick="myclick('/')">
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-sqrt" value="√­" onclick="fnsqrt()">
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-cbrt" value="∛" onclick="fncbrt()">
    <input type="button" class="calc-btn btn btn-outline-danger" name="btn-exp" value="EXP" onclick="fnEXP()">     
    </p><p align="center" style ="width: 100%; height: 300%; font-size: 24px; float:center; ">
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-cent" value="." onclick="myclick('.'')">
    <input type="button" class="calc-btn btn btn-outline-dark" name="btn-zero" value="0" onclick="myclick('0')">
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-equal" value="=" onclick="equalto()" >
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-sqr" value="a²" onclick="fnsqr()">
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-pow" value="a³" onclick="fnpow()">
    <input type="button" class="calc-btn btn btn-outline-info" name="btn-pi" value="π" onclick="fnpi()">
    <input type="button" class="calc-btn btn btn-outline-danger" name="btn-log" value="log" onclick="fnlog()">

    <?php

    if (isset($_SESSION['mail'])) {
      echo "<hr><button type ='submit' name='submit' value='mandar a la base de datos' class='btn btn-outline-success'> Guardar en el historial</button>";
    }

    if (isset($_SESSION['mail'])) {

      $historial = $_POST['display'];

      $query = "INSERT INTO `historial`(`historial`) VALUES ('$historial')";
      
    if(mysqli_query($conn, $query))
       {
      echo "<script>alert('Historial Guardado!);</script>";
      }
    else
       {
       echo "<script>alert('Fallo al subir!');</script>";
       }

    echo "<br>Todavia no usaste la base de datos?";
 }

    ?>
     </p>
      <div></div>
      <?php include("footer.php") ?>
    </div>
  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="calc.js"></script>
  
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
