<?php 
session_start();

if(!isset($_SESSION["username"]))
{
    header("location:../registro/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <link rel="icon"  href="../img/logo91.png">
  <title>Sistema Nacional de Emergencias 911</title>


 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../img/logo91.png" alt="Sistema Nacional de Emergencias 911" height="100" width="100">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
          </a>
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img width="30" height="30" class="img-profile rounded-circle" src="../registro/assets/profile/perfi.png" alt="">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small "style="font-size: 16px;"> <?php echo "" . $_SESSION["username"] . "";?></span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">

                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Cerrar Sesion
                    </a>
                </div>
            </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <center><img src="../img/logo91.png" width="70" height="70" alt=""></center>
     <span style="font-size: 12px;" class="brand-text font-weight-light">SISTEMA NACIONAL  DE EMERGENCIAS 911</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../indexad.php" class="nav-link">
              <i class="fas fa-home nav-icon"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>

          <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-ambulance nav-icon"></i>
                  <p>
                    Despacho
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="nuevoad.php" class="nav-link">
                      <i class="fas fa-plus-square nav-icon"></i>
                      <p>Nuevo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="consignasad.php" class="nav-link">
                      <i class="fas fa-calendar-check nav-icon"></i>
                      <p>Unidades</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="registro.php" class="nav-link">
                      <i class="fas fa-registered nav-icon"></i>
                      <p>Registro de Unidades</p>
                    </a>
                  </li>
                  </ul>  

         <li class="nav-item">
            <a href="detenidosad.php" class="nav-link">
                <i class="fas fa-users-slash nav-icon"></i>
              <p>
                Detenidos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="usuarios.php" class="nav-link">
              <i class="fas fa-users-cog nav-icon"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
            
            <li class="nav-item">
            <a href="../registro/register.php" class="nav-link">
              <i class="fas fa-user nav-icon"></i>
              <p>
                Crear Usuario
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php
    include ("../controllers/consultaunidades.php");
    ?>
    
  </head> 
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <!-- Begin Page Content -->
        <div class="container-fluid">
  <body>
 
    <center><h1>Registro de Unidades</h1></center>
<br>
       <form name="form1" id="form1" action="registrobusqueda.php" method="get">
        <div class="input-group">
           <input type="date" name="buscar" class="form-control">
           <span class="input-group-btn">
         <button style="width:200px;" type="submit" name="enviar" class="btn btn-primary btn-block"><span class="fas fa-search"></span> Buscar</button>
 </div>
       </form> 
       <br> 
   <table class="table table-hover table-bordered" >

    <thead>
      <tr>
        <th>#</th>
        <th>Fecha</th>
        <th>Usuario</th>
        <th>Grupo</th>
        <th>Turno</th>
        <th></th>
      </tr>

    </thead>

    <?php
    $cont=0;
    foreach ($resultado as $row) { ?>
      <tr>
        <td><?php echo ++$cont; ?></td> 
        <td><?php echo $row['consignafecha'] ?></td> 
        <td><?php echo $row['consignausuario'] ?></td>
        <td><?php echo $row['consignagrupo'] ?></td> 
        <td><?php echo $row['consignaturno'] ?></td>
        <td><?php echo "<a href='verunidades.php?consignaid=".$row['consignaid']."''><button type='button' class = 'btn btn-info'>Ver</button></a></td>"?></td>        
      </tr>
      <?php
    }  
    ?>
  </table>
</div>
</div>
</div>
  <!-- End of Main Content -->

  <!-- Footer -->

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong><center>Sistema Nacional de Emergencias 911 &copy;</center></strong>
  </footer>
 
  <!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Cerrar sesion?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Seleccione cerrar sesion para finalizar su sesion</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="../registro/logout.php">Salir</a>
        </div>
    </div>
</div>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
