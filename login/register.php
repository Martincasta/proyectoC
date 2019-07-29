<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Maths Registro</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/socialmedia.css"> 

  <!-- Custom styles for this template-->
  <link href="../css/smaths.css" rel="stylesheet">

</head>

<body class="bg-gradient-warning">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crear una cuenta</h1>
              </div>
             <form action="signup.inc.php" class="user" method="post">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" required="required" name="uid"   id="uid" placeholder="Nombre de Usuario...">
                  </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="fn" id="fn" placeholder="Nombre...">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="ln" id="ln" placeholder="Apellido...">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="mail" id="mail" placeholder="E-Mail...">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="pwd" id="pwd" placeholder="Contraseña...">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="rpwd" id="rpwd" placeholder="Repeti Contraseña...">
                  </div>
                </div>
                <button type="submit" name="registro-submit" class="btn btn-warning btn-user btn-block">Registrar</button>
               <hr>
                <a href="index.php" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Registrate con Google
                </a>
                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Registrate con Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Olvidaste tu contraseña?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Tenes cuenta?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

<?php

  include ("../../calculadora/footer.php");

  ?>

</html>
