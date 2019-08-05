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
          <button class="btn btn-secondary" type="button" data-dismiss="modal">:)</button>
          <a class="btn btn-warning" href="../calculadora/login/login.php" name="logout">Salir</a>

  
        </div>
      </div>
    </div>
  </div>
<?php 

  if (isset($_POST['logout'])) {
      session_destroy();
      session_unset();

      header("Location: login.php")
  }

 ?>
