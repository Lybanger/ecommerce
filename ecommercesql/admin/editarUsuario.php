<div class="container-all">

<div class="container-form">
    <img src="loginstyles/resources/logo.png" alt="" class="logo">
    <h1 class="title">Registrar Administrador</h1>

    <?php
        include_once "dbecommerce.php";
        $con=mysqli_connect($host,$user,$pass,$db);
    if (isset($_REQUEST['guardar'])){
        $email =$_REQUEST['email']??'';
        $password = $_REQUEST['password']??'';
        $nombre = $_REQUEST['nombre']??'';
        $password = md5($password);
        $id =$_REQUEST['id']??'';

        $query="UPDATE  usuarios set
        email ='".$email."' ,nombre='".$nombre."',password='".$password."'
        where id ='".$id."';
        ";
       // $query="call edit_User('".$email."','".$nombre."',".$password."','".$id."');";
	    $res=mysqli_query($con,$query);
 
        if($res){
            echo '<meta http-equiv="refresh" content="0;url=panel.php?modulo=usuarios&mensaje=Usuario  '.$nombre.'editado Exitosamente"/>';           
       }else{
?>
    <div class="alert alert-danger" role="alert">
    <label for="">Error de edicion </label>
    <img src="images/haha.png" width="200">
    </div>
<?php
       }
    }
    $id=$_REQUEST['id']??'';
    $query="call edit_User_Show('".$id."');";
    //$query ="SELECT id,email,password,nombre from usuarios where id='".$id."';";

    $res= mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($res);


?>
            <form method="post" action="#">
            <label style="color: white;" for="">Nombre de Administrador</label>
            <input type="text" name="nombre" required="" value="<?php echo $row['nombre']?>">
             <span class="msg-error"></span>
             <label style="color: white;" for="">Email</label>
             <input type="email" name="email"  required="" value="<?php echo $row['email']?>">
             <span class="msg-error"></span>
             <label style="color: white;" for="">Password</label>
             <input type="password" name="password"   required="">
             <span class="msg-error"></span>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
             <input type="submit" value="Registrarse" name="guardar" >

            </form>

</div>

<div class="container-text">
    <div class="capa"></div>
</div>

</div>