
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="Vistas/Assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SI Escolar</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->

        <li class="nav-item menu">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Examenes
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="#" class="nav-link active" onclick="CargarPagina('Vistas/Examenes/fechas.php','content-wrapper')">
                <i class="far fa-circle nav-icon"></i>
                <p>Fechas para ET y ER</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link" onclick="CargarPagina('Vistas/Examenes/registroET.php','content-wrapper')">
                <i class="far fa-circle nav-icon"></i>
                <p>Registro de Examenes a Titulo</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link" onclick="CargarPagina('Vistas/Examenes/registroER.php','content-wrapper')">
                <i class="far fa-circle nav-icon"></i>
                <p>Registro de Examenes a Regularización</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link" onclick="CargarPagina('Vistas/Examenes/capturaER.php','content-wrapper')">
                <i class="far fa-circle nav-icon"></i>
                <p>Captura de Examenes a Regularización</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link" onclick="CargarPagina('Vistas/Examenes/listadoI.php','content-wrapper')">
                <i class="far fa-circle nav-icon"></i>
                <p>Listado de Examenes</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link" onclick="CargarPagina('Vistas/Examenes/ordenes.php','content-wrapper')">
                <i class="far fa-circle nav-icon"></i>
                <p>Generar Archivo para Ordenes de Pago</p>
              </a>
            </li>

          </ul>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<script> 
  $(".nav-link").on('click',function()
  {
    $(".nav-link").removeClass('active');
    $(this).addClass('active');
  })
</script>
