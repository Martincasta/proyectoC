<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Maths Recuperar Contraseña</title>

    <!-- Custom styles for this template-->
  <link href="../css/smaths.css" rel="stylesheet">


  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/socialmedia.css">

  </head>

<body class="bg-gradient-warning">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Te olvidaste la contraseña?</h1>
                    <p class="mb-4">Tranquilo/a, son cosas que pasan, querés probar poner tu mail de nuevo?</p>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="mail" placeholder="Ingresa tu E-Mail aca">
                    </div>
                    <?php
                      include "dbh.inc.php";

                      if (isset($_POST['registrar'])) {
                      
                      $conexion = getConexion();

                      $sql= "SELECT * FROM usuarios WHERE mail = '" . $_POST["mail"] . "'";

                      $resultado = $conexion->query ($consulta);

                      if ($resultado->num_rows == 1) {

                          }
                        }
                                           ?>
                    <div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                              aria-hidden="true">
                              <div class="modal-dialog modal-notify modal-warning" role="document">
                                <!--Content-->
                                <div class="modal-content">
                                  <!--Header-->
                                  <div class="modal-header text-center">
                                    <h4 class="modal-title white-text w-100 font-weight-bold py-2">Contraseña Nueva</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true" class="white-text">&times;</span>
                                    </button>
                                  </div>

                                  <!--Body-->
                                  <div class="modal-body">

                                    <div class="md-form mb-5">
                                  
                                    <input type="password" id="form3" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form3">Repeti la contraseña</label>
                                  </div>

                                    <div class="md-form">
                                   
                                      <input type="password" id="form1" class="form-control validate ">
                                      <label data-error="wrong" data-success="right" for="form2">Pone tu contraseña nueva</label>
                                    </div>
                                  </div>

                                  

                                  <!--Footer-->
                                  <div class="modal-footer justify-content-center">
                                    <a class="btn btn-default btn-outline-warning waves-effect btn-outline-danger" href="login.php">Volver al login <i class="fas fa-file-import-o ml-1"></i></a>
                                  </div>
                                </div>
                                <!--/.Content-->
                              </div>
                            </div>

                            <div class="text-center">
                              <a href="login.php" class="btn btn-default btn-rounded btn-outline-warning" data-toggle="modal" data-target="#orangeModalSubscription">Crear una contraseña nueva!</a>
                            </div>
                
                    </input>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="register.php">Crea una cuenta!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login.php">Ya tenes cuenta?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <?php

  include ("../../calculadora/footer.php");

  ?>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>