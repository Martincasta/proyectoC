    <?php include "login/dbh.inc.php" ?>
        <nav class="navbar navbar-expand navbar-light bg-gradient-warning topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
              
           
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-flex text-white small">
                  <?php echo $_SESSION['fn'] . " " . $_SESSION['ln'] ?> 

               </span>
                <img class="img-profile rounded-circle" src="https://picsum.photos/200/300">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>

          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">No me digas que te estás yendo!</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Toca salir si querés terminar tu sesión, o quedate resolviendo ecuaciones un ratito más.</div>
        <div class="modal-footer">
          <button class="btn btn-warning" type="button" data-dismiss="modal">:)</button>
          <a href="../calculadora/login/logout.php"><button name="logout" class="btn btn-danger">Salir</button></a>

  
        </div>
      </div>
    </div>
  </div>
