<?php
header("Content-Type: text/html;charset=utf-8");
ini_set("default_charset", "UTF-8");
error_reporting(0);
include("funciones/config.php");
session_start();
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<css>
<style>
    body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>
</head>
<body>
<div class="sidenav">
         <div class="login-main-text">
            <h2>Application<br> Login Aplicacion</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="POST">
                  <div class="form-group">
                     <label>Usuario</label>
                     <input type="text" name="login" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Contraseña</label>
                     <input type="password" name="pass" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" name="btnAceptar" value="Aceptar" class="btn btn-black">Login</button>
                  <!--<button type="submit" class="btn btn-secondary">Register</button>-->
               </form>
               <?php  
if($_POST['btnAceptar'] == "Aceptar") 
{
   $user=$_POST['login'];
   $clave=$_POST['pass'];
   $sql="Select * from usuario where user='$user' and pasword='$clave'";
   $cnn= Conectar();
$rs=mysqli_query($cnn,$sql);

if (mysqli_num_rows($rs)!=0) 
   
   {
  
   if ($row=mysqli_fetch_array($rs)) 
   {  
$_SESSION['$nuestroNombre']=$row["nombres"];
$_SESSION['$apellidos']=$row["apellidos"];
//$_SESSION['$nestroCargo']=$row["cargo"];
$_SESSION['$nuestroTipo']=$row["tipo"];
$_SESSION['$id_login']=$row["id"];

   
   switch ($_SESSION['$nuestrotipo']=$row["tipo"]) 
   {

     case 1:
        echo '<div class="alert alert-Success"><strong>Bienvenido!</strong> </div>';
        header("refresh:2;url=ingreso/dasboard.php");
     break;

     case 2:
     echo '<div class="alert alert-Success"><strong>Bienvenido!</strong> </div>';
       echo"<script type='text/javascript'>window.location='acp_precitacion1.php';</script>";
       break;
     
     case 3:
      echo"<script>alert('Bienvenido(a)')</script>";
       echo"<script type='text/javascript'>window.location='acp_precitacion1.php';</script>";
       break;

     default:
       echo"<script>alert('Usted no es usuario') </script>";
       echo"<script type='text/javascript'>window.location='index.php';</script>";
       break;
    

    }
    }
    
    }else{
    
   echo '<div class="alert alert-danger"><strong>Error!</strong>Usuario Incorrecto o Contrasena Incorrecta </div>';
    
        
   }
}
?>
            </div>
         </div>
      </div>
</body>   
</html>