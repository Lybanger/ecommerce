<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
  if(isset($_REQUEST['sesion']) && $_REQUEST['sesion']=="cerrar"){
    session_destroy();
    header("location: index.php");
  }


  if(isset($_SESSION['id'])==false){
    header("location: index.php");
  }
  $modulo=$_REQUEST['modulo']??'';
?>



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LAC Music | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
 <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="loginstyles/styles/styles.css">


<link rel="stylesheet" href="  https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="  https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="   https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
<link rel="stylesheet" href="  https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">
<link rel="stylesheet" href="   css/editor.dataTables.min.css">




</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <ul class="navbar-nav ml-auto">
     
        <a class="nav-link"  href="panel.php?modulo=editarUsuario&id=<?php echo $_SESSION['id'] ?>"  title="Editar Usuario">
          <i class="far fa-user"></i>
        </a>
        <a class="nav-link text-danger"  href="panel.php?modulo=&sesion=cerrar" title="Cerrar Sesion">
          <i class="fas fa-door-closed"></i>
        </a>
      
    </ul>
  </nav>
  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LAC Music</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nombre']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <p>
                Lac Admin
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="panel.php?modulo=usuarios" class="nav-link <?php echo ($modulo=="usuarios"||$modulo=="crearUsuarioTest#"||$modulo=="editarUsuario")?"active":""; ?>">
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="panel.php?modulo=productos" class="nav-link <?php echo ($modulo=="productos")?"active":""; ?>">
                  <p>Productos</p>
                </a>
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<?php

if($modulo=="usuarios"){
  include_once "usuarios.php";
}
if($modulo=="productos"){
  include_once "productos.php";
}

if($modulo=="crearUsuarioTest"){
  include_once "crearUsuarioTest.php";
}
if($modulo=="editarUsuario"){
  include_once "editarUsuario.php";
}
if($modulo=="productos"){
  include_once "productos.php";
}
?>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
<script src="js/dataTables.editor.min.js"></script>
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
    editor = new $.fn.dataTable.Editor( {
        ajax: "controllers/productos.php",
        table: "#tablaProductos",
        fields: [ {
                label: "Nombre:",
                name: "nombre"
            }, {
                label: "Precio:",
                name: "precio"
            }, {
                label: "Existencia:",
                name: "existencia"
            }, {
                label: "Imagenes:",
                name: "files[].id",
                type: "uploadMany",
                display: function ( fileId, counter ) {
                    return '<img src="'+editor.file( 'files', fileId ).web_path+'"/>';
                },
                noFileText: 'No hay imagenes'
            }
        ]
    } );
 
    $('#tablaProductos').DataTable( {
        dom: "Bfrtip",
        ajax: "controllers/productos.php",
        columns: [
            { data: "nombre" },
            { data: "precio", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) },
            { data: "existencia" },
            {
                data: "files",
                render: function ( d ) {
                    return d.length ?
                        d.length+' imagen(es)' :
                        'No hay imagen(es)';
                },
                title: "Imagen"
            }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } );
  });
</script>

</body>
</html>
