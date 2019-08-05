<?php
session_start();
?>
<div id="wrapper">

    <ul class="navbar-nav sidebar bg-gradient-danger sidebar-dark accordion" id="accordionSidebar">

       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../calculadora/index.php">
        <div class="sidebar-brand-icon rotate-n-15">
                </div>
        <div class="sidebar-brand-text mx-3">Simple <sup>Maths</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="../../calculadora/calcu.php">
          <span>Calculadora</span></a>
      </li>

      <hr class="sidebar-divider">


       <?php

      if(isset($_SESSION['mail'])){

        echo '<div class="sidebar-heading">
        Usuarios
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Configuración</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="../calculadora/404.php">Diseño</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-address-card"></i>
          <span>Perfil</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="../../calculadora/login/profiles.php">Perfil</a>
            <a class="collapse-item" href="../../calculadora/login/history.php">Historial</a>
           </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Extras
      </div>


      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="graphs.php">
          <i class="fas fa-fw fa-wave-square"></i>
          <span>Gráficos</span></a>
      </li>';

      }


      else {

        echo ' <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="../../calculadora/graphs.php">
          <i class="fas fa-fw fa-wave-square"></i>
          <span>Gráficos</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Registro y Cuentas</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Usuario</h6>
            <a class="collapse-item" href="../calculadora/login/login.php">Entrar</a>
            <a class="collapse-item" href="../calculadora/login/register.php">Registrarse</a>
            <a class="collapse-item" href="../calculadora/login/forgot-password.php">Olvidaste tu contraseña?</a>
            <div class="collapse-divider"></div>          
          </div>
        </div>
      </li>
      ';


      }
     
    ?>  

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>