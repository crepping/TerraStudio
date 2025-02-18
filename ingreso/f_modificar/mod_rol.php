<html>
  
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</head>
<html>
<?php
ini_set('display_errors', 1);
include "../funciones/config.php";
$cnn = Conectar();
$cod =$_POST['cod'];
$rol = $_POST['rol'];
$ubi = $_POST['direccion'];

$ver ="SELECT * FROM rol WHERE numero_rol ='$rol'";
$busqueda= mysqli_query($cnn,$ver);
if(mysqli_num_rows($busqueda)>0) { 
   echo"<br>"."<br>";
//echo"<script>alert('El producto ya Existe')</script>";
//echo"<script type='text/javascript'>window.location='../pages/ingreso_proveedor.php'</script>";
echo "<script>
        setTimeout(function() {
            swal({
                position: 'top-center',
                icon: 'error',
                title: 'ROL YA Existe',
                buttons: false,
                timer: 1500
            }).then(() => {
                window.location = 'Listado_Roles.php';
            });
        }, 1500);
      </script>";
} else {
$in="update rol set numero_rol = '$rol', ubicacion ='$ubi' Where id_rol='$cod'";   
$dato=mysqli_query($cnn,$in); 
if (!$dato) {
  echo "<script>
  setTimeout(function() {
      swal({
          position: 'top-center',
          icon: 'error',
          title: 'ROL YA ESTA INGRESADO',
          buttons: false,
          timer: 1500
      }).then(() => {
          window.location = 'Listado_Roles.php';
      });
  }, 1500);
</script>";
}else{
echo"<br>"."<br>";
echo "<script>
        setTimeout(function() {
            swal({
                position: 'top-center',
                icon: 'success',
                title: 'ROL Modificado Correctamente',
                buttons: false,
                timer: 1500
            }).then(() => {
                window.location = 'Listado_Roles.php';
            });
        }, 1500);
      </script>";
//echo '<div class="alert alert-success"><strong>Excelente!</strong> Reserva Aceptada</div>';
//echo"<script type='text/javascript'>window.location='../pages/ingresoproductos.php'</script>";
//echo"<script type='text/javascript'>window.location='alumnotodos.php'</script>";
}
}
?>
