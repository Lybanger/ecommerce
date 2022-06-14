<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAC music</title>
    <link rel="stylesheet" href="loginstyles/styles/styles.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

    <div class="container-all">

        <div class="container-form">
            <img src="loginstyles/resources/logo.png" alt="" class="logo">
            <h1 class="title">Iniciar Sesión</h1>

<?php
    if (isset($_REQUEST['Iniciar'])){
        session_start();
        $email = $_REQUEST['email']??'';
        $password = $_REQUEST['password']??'';
        $password = md5($password);
        include_once "dbecommerce.php";
        $con=mysqli_connect($host,$user,$pass,$db);


        $query="SELECT id, email, nombre from usuarios where email='".$email."'and password='".$password."' ";
        //$query="call login_Admin('".$email."','".$password."');";
        $res=mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($res);
        if($row){
            $_SESSION['id']=$row['id'];
            $_SESSION['email']=$row['email'];
            $_SESSION['nombre']=$row['nombre'];
            header("location: panel.php");
        }else{
?>
    <div class="alert alert-danger" role="alert">
    <label for="">Error de login </label>
    <img src="images/haha.png" width="200">
    </div>
<?php
        }
    }
?>
            <form  method="post">

                <label style="color: white;" >Email</label>
                <input type="text" name="email">
                <span class="msg-error"></span>
                <label style="color: white;"  >Password</label>
                <input type="password" name="password">
                <span class="msg-error"></span>

                <input type="submit" value="Iniciar" name="Iniciar">

            </form>

            <span class="text-footer">¿Aún no te has registrado?
                <a href="register.php">Registrate.</a>
            </span>
        </div>

        <div class="container-text">
            <div class="capa"></div>
        </div>

    </div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>