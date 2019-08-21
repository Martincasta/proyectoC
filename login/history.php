 <?php include("dbh.inc.php")?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Maths Historial</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/smaths.css" rel="stylesheet">
   <link rel="stylesheet" href="../css/socialmedia.css">  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper" class="d-flex flex-column">

    <?php include("../../calculadora/sidebar.php")?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php

        include("../../calculadora/navbar.php")

        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-1 text-gray-800">Historial</h1>
          <p class="mb-4"></p>
          <hr>

          <!-- Content Row -->
          <div class="row">

            <!-- Border Left Utilities -->
            <div class="col-lg-12">
              <div>
              
              <?php 
              $sql= "SELECT * FROM historial";
              $result= mysqli_query($conn,$sql);
              $resultcheck = mysqli_num_rows($result);

              if($resultcheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<table class='table  table-borderless'>" . "<tr class='table-warning'>" . "<td>" . $_SESSION['mail'] . "</td>" . "<td>" . $row['historial'] . "</td>" . "</tr>" . "</table>";
                }

              }  
               ?>

              </div>


              
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php

  include ("../../calculadora/footer.php");

  ?>
    

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
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

</html>

