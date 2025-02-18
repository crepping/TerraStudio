<html>
  
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</head>
<html>
<?php
include "../funciones/config.php";
$cnna = Conectar();
$rol = $_POST['rol'];
$cod = $_POST['cod'];
$dir = $_POST['direccion'];
$hoy = date("Y-m-d");

$ver ="SELECT * FROM rol WHERE numero_rol ='$rol'";
$busqueda= mysqli_query($cnna,$ver);
if(mysqli_num_rows($busqueda)>0) { 
   echo"<br>"."<br>";
//echo"<script>alert('El producto ya Existe')</script>";
//echo"<script type='text/javascript'>window.location='../pages/ingreso_proveedor.php'</script>";
echo "<script>
        setTimeout(function() {
            swal({
                position: 'top-center',
                icon: 'error',
                title: 'ROL YA ESTA INGRESADO',
                buttons: false,
                timer: 1500
            }).then(() => {
                window.location = 'Listado_Cliente.php';
            });
        }, 1500);
      </script>";

//echo '<div class="alert alert-danger"><strong>Oh no!</strong> Reserva ya Reservada.</div>';
} else {
$in="insert into rol(numero_rol,ubicacion,id_cliente,fecha_rol) values ('$rol','$dir','$cod','$hoy')";   
$dato=mysqli_query($cnna,$in); 
if (!$dato) {
echo"<br>"."<br>";
  //echo"<script>alert('Error de ingresar producto')</script>";
  echo "<script> swal({
    title: '¡ERROR!',
    icon: 'error',
    text: 'Al ingresar N° ROL',
    type: 'error',
  }).then(() => {
                window.location = 'Listado_Cliente.php';
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
                title: 'ROL Ingresado Correctamente',
                buttons: false,
                timer: 1500
            }).then(() => {
                window.location = 'Listado_Cliente.php';
            });
        }, 1500);
      </script>";
//echo '<div class="alert alert-success"><strong>Excelente!</strong> Proveedor Ingresado.</div>';
//echo"<script>alert('Producto Ingreso')</script>";
//echo"<script type='text/javascript'>window.location='../pages/ingreso_proveedor.php'</script>";
//echo"<script type='text/javascript'>window.location='alumnotodos.php'</script>";
}
}
?>