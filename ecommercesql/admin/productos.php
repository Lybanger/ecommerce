<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAC music</title>
    <link rel="stylesheet" href="loginstyles/styles/styles_copy.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body> <!-- Content Wrapper. Contains page content -->
  <?php
    include_once "dbecommerce.php";
    $con=mysqli_connect($host,$user,$pass,$db);

 ?>
 
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Productos</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tablaProductos" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                    <th>Imagen(es)</th>
                </tr>
                  </thead>





                  <tbody>
                  <?php 

                    $query="SELECT id, nombre, precio, existencia from productos; ";
                    $res=mysqli_query($con,$query);
                    while ($row = mysqli_fetch_assoc($res)){
                  ?>
                  <tr>
                
                  <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['precio'] ?></td>
                    <td><?php echo $row['existencia'] ?></td> 
                    
                  </tr>
                  <?php  
                     }
                  ?>
                  </tbody>





                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  </body>
</html>