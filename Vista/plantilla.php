<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>AdminLTE 2 | Blank Page</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="Vista/img/plantilla/icon.png">

  <!-- PLUGINS DE CSS --> 
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Vista/bower_components/bootstrap/dist/css/bootstrap.min.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vista/bower_components/font-awesome/css/font-awesome.min.css">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="Vista/bower_components/Ionicons/css/ionicons.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="Vista/dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins.  -->
  <link rel="stylesheet" href="Vista/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="Vista/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="Vista/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

   <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="Vista/plugins/iCheck/all.css">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="Vista/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="Vista/bower_components/morris.js/morris.css">


  <!-- PLUGINS DE JAVASCRIPT --> 

  <!-- jQuery 3 -->
  <script src="Vista/bower_components/jquery/dist/jquery.min.js"></script>
  
  <!-- Bootstrap 3.3.7 -->
  <script src="Vista/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  
  <!-- SlimScroll -->
  <script src="Vista/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  
  <!-- FastClick -->
  <script src="Vista/bower_components/fastclick/lib/fastclick.js"></script>
  
  <!-- AdminLTE App -->
  <script src="Vista/dist/js/adminlte.min.js"></script>

  <!-- jQuery Number -->
  <script src="Vista/plugins/jQueryNumber/jQueryNumber.min.js"></script>

  <!-- DataTables -->
  <script src="Vista/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="Vista/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="Vista/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="Vista/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <!-- SweetAlert 2 -->
  <script src="Vista/plugins/sweetalert2/sweetalert2.all.js"></script>

  <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- iCheck 1.0.1 -->
  <script src="Vista/plugins/iCheck/icheck.min.js"></script>

  <!-- InputMask -->
  <script src="Vista/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="Vista/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="Vista/plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <!-- daterangepicker http://www.daterangepicker.com/-->
  <script src="Vista/bower_components/moment/min/moment.min.js"></script>
  <script src="Vista/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
  <script src="Vista/bower_components/raphael/raphael.min.js"></script>
  <script src="Vista/bower_components/morris.js/morris.min.js"></script>

  <!-- ChartJS http://www.chartjs.org/-->
  <script src="Vista/bower_components/chart.js/Chart.js"></script>


</head>

  <!-- CUERPO DOCUMENTO -->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
<!-- Site wrapper -->


  <?php

    if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
        # code...
        

    echo '<div class="wrapper">';

    /*==================================== 
    CABEZOTE  
    ====================================*/

    include "Modulos/cabezote.php";

    /*==================================== 
    MENU  
    ====================================*/

    include "Modulos/menu.php";

    /*==================================== 
    CONTENIDO  
    ====================================*/

    if (isset($_GET["ruta"])) {
      if ($_GET["ruta"]=="inicio"||
          $_GET["ruta"]=="usuarios"||
          $_GET["ruta"]=="categorias"||
          $_GET["ruta"]=="productos"||
          $_GET["ruta"]=="clientes"||
          $_GET["ruta"]=="ventas"||
          $_GET["ruta"]=="crear-ventas"||
          $_GET["ruta"]=="editar-venta"||
          $_GET["ruta"]=="reportes"||
          $_GET["ruta"]=="salir"){
        include "Modulos/".$_GET["ruta"].".php";
      }else{
        include "Modulos/404.php";
      }
    }else{
        include "Modulos/inicio.php";
    }

    /*==================================== 
    FOOTER  
    ====================================*/

    include "Modulos/footer.php";

    echo '</div>';
  }else{
    include "Modulos/login.php";
  }
  ?> 

<script src="Vista/js/plantilla.js"></script>
<script src="Vista/js/usuarios.js"></script>
<script src="Vista/js/categorias.js"></script>
<script src="Vista/js/productos.js"></script>
<script src="Vista/js/clientes.js"></script>
<script src="Vista/js/ventas.js"></script>
<script src="Vista/js/reportes.js"></script>
</body>
</html>