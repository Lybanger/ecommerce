  <!-- Content Wrapper. Contains page content -->
 <?php
    include_once "dbecommerce.php";
    $con=mysqli_connect($host,$user,$pass,$db);
    if(isset($_REQUEST['idBorrar'])){
      $id=$_REQUEST['idBorrar']??'';

     // $query="DELETE from usuarios where id='".$id."';";
      $query="call delete_Admin('".$id."');";
      $res=mysqli_query($con,$query);
    }
 ?>
 
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administradores</h1>
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
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones
                    <a href="panel.php?modulo=crearUsuarioTest" >+</i></a>
                  </th></tr>
                  </thead>
                  <tbody>
                  <?php 
                     $query=" call show_Admins()";
                    //$query="SELECT id, email, nombre from usuarios; ";
                    $res=mysqli_query($con,$query);
                    while ($row = mysqli_fetch_assoc($res)){
                  ?>
                  <tr>
                  <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td>
                        <a href="panel.php?modulo=editarUsuario&id=<?php echo $row['id'] ?>"  style="margin-right:5px;">Editar Usuario</a>
                        <a href="panel.php?modulo=usuarios&idBorrar=<?php echo $row['id'] ?>" class="borrar" style="margin-right:25px;">Borrar Usuario</a>

                    </td> 
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