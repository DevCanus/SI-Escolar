<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI Escolar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="Vistas/Assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vistas/Assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="Vistas/Assets/dist/css/ajustes.css">

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="Vistas/Assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="Vistas/Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="Vistas/Assets/dist/js/adminlte.min.js"></script>

</head>

<body class="hold-transition sidebar-mini">

  <div class="wrapper">

    <?php
      include "Modulos/navbar.php";
      include "Modulos/aside.php";
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <?php include "Vistas/Examenes/fechas.php"; ?>

    </div>
    <!-- /.content-wrapper -->

    <?php include "Modulos/footer.php"; ?>

  </div>
<!-- ./wrapper -->

<script> 
  function CargarPagina(pagina, contenedor) {
    $("." + contenedor).load(pagina);
  }
</script>

</body>
</html>