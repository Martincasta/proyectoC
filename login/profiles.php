<!DOCTYPE html>
<html lang="en">
<?php
  include_once("dbh.inc.php"); 
  ?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Maths Profile</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/smaths.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/socialmedia.css">
  <link rel="stylesheet" href="../css/perfil.css"> 

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper flex-column bd-highlight">

 <?php
    include("../../calculadora/sidebar.php");
  ?>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" class="d-flex flex-column">

        <?php

        include("../../calculadora/navbar.php")

        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row d-flex justify-content-start">

            <!-- First Column -->
            <div class="col-lg-4">

             
                          
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <div class="profile-head ">
                                    <h5>
                                        <?php echo $_SESSION['userid'] ?>
                                    </h5>
                                    <h6>
                                       Perfil 
                                    </h6><hr>
                          </div>
                    </div>
                </div>
                      <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Id de Usuario</label>
                                            </div><hr>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['idusuarios'] ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombre</label>
                                            </div><hr>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['fn'] . " " . $_SESSION['ln'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>E-mail</label>
                                            </div><hr>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['mail'] ?></p>
                                            </div>
                                        </div> <hr>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

           </form>
              
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
  <?php

  include ("../../calculadora/footer.php");

  ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>



</html>
