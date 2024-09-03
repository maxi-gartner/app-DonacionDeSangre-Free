<body class="hold-transition sidebar-mini" id="sidebar">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../pages/index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../pages/contact.php" class="nav-link">Contact</a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <!-- Cuando el sidebar está abierto -->
        <div class="user-panel mt-1 mb-3 d-flex p-0 align-items-center justify-content-between">
            <div class="image d-flex justify-content-center align-items-center mr-0" style="width: 70px; height: 70px; padding: 0;">
                <img
                    src="../public/logo.jpg"
                    class="img-circle elevation-2"
                    alt="User Image"
                    style="width: 50px; height: 50px;"/>
            </div>
            <div class="info" id="text-container">
                <p> CONTROL DONADORES <br>DE SANGRE <br>CUARTEL DE BOMBEROS
                </p>
            </div>
        </div>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebar');
            const textContainer = document.getElementById('text-container');

            sidebarToggle.addEventListener('click', function() {
                if (document.getElementById('sidebar').classList.contains('sidebar-collapse')) {
                    textContainer.classList.remove('d-none');
                    //console.log('sidebar detectado');
                } else {
                    textContainer.classList.add('d-none');
                    //console.log('sidebar NO detectado');
                }
            });
        });
        </script>

          <div class="form-inline">
          </div>
      <nav class="mt-2 navbar-dark bg-dark">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
            <li class="nav-item mt-2">
                <a href="#" class="nav-link" style="box-shadow: 0 0 5px white;">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Administrar Donadores </p>
                </a>
            </li>

            <li class="nav-item mt-2">
                <a href="#" class="nav-link" style="box-shadow: 0 0 5px white;">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>Programar Donación </p>
                </a>
            </li>

            <li class="nav-item mt-2">
                <a href="#" class="nav-link" style="box-shadow: 0 0 5px white;">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Listado de Donadores </p>
                </a>
            </li>

            <li class="nav-item mt-2">
                <a href="#" class="nav-link" style="box-shadow: 0 0 5px white;">
                    <i class="nav-icon fas fa-chart-bar"></i>
                    <p>Reportes y Estadísticas </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <Main class="pt-3 pl-3">
        