

<div class="container-all">

<div class="container-form">
    <img src="loginstyles/resources/logo.png" alt="" class="logo">
    <h1 class="title">Registrar Administrador</h1>

    <?php
    if (isset($_REQUEST['guardar'])){
        $email =$_REQUEST['email']??'';
        $password = $_REQUEST['password']??'';
        $username = $_REQUEST['username']??'';
        $password = md5($password);
        include_once "dbecommerce.php";
        $con=mysqli_connect($host,$user,$pass,$db);
        $query="SELECT  email from usuarios where email='".$email."'";
	  // $query="call compare_Email('".$email."')";
       $res=mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($res);
        if($res){
            if($row){
                ?>
                    <div class="alert alert-danger" role="alert">
                    <label for="">Administrador Existente </label>
                    <img src="images/haha.png" width="200">
                    </div>
                <?php
            }else{
                $query="call Add_User('".$email."','".$username."','".$password."');";
                $res=mysqli_query($con,$query);
               //  header("location:  panel.php?modulo=usuarios");
                echo '<meta http-equiv="refresh" content="0;url=panel.php?modulo=usuarios"/>';
            }
            
        }else{
?>
    <div class="alert alert-danger" role="alert">
    <label for="">Error de registro </label>
    <img src="images/haha.png" width="200">
    </div>
<?php
        }
    }
?>
            <form method="post" action="#">
            <label style="color: white;"for="">Nombre de Administrador</label>
            <input type="text" name="username" required="">
             <span class="msg-error"></span>
             <label style="color: white;" for="">Email</label>
             <input type="email" name="email"  required="">
             <span class="msg-error"></span>
             <label style="color: white;" for="">Password</label>
             <input type="password" name="password"   required="">
             <span class="msg-error"></span>

             <input type="submit" value="Registrarse" name="guardar" >

            </form>

</div>

<div class="container-text">
    <div class="capa"></div>
</div>

</div>