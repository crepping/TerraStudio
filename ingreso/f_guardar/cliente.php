<html>
  
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</head>
<html>
<?php
include "../funciones/config.php";
$cnna = Conectar();
$rut = $_POST['rut'];
$nom = $_POST['name'];
$ape = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$dir = $_POST['ubicacion'];
$prof = $_POST['profesional'];
$hoy = date("Y-m-d");

$ver ="SELECT * FROM cliente WHERE rut_cliente ='$rut'";
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
                title: 'El Cliente ya existe',
                buttons: false,
                timer: 1500
            }).then(() => {
                window.location = '../cliente.php';
            });
        }, 1500);
      </script>";

//echo '<div class="alert alert-danger"><strong>Oh no!</strong> Reserva ya Reservada.</div>';
} else {
$in="insert into cliente(rut_cliente,nombres,apellidos,email,telefono,ubicacion,profesional,fecha_creacion) values ('$rut','$nom','$ape','$email','$telefono','$dir','$prof','$hoy')";   
$dato=mysqli_query($cnna,$in); 
if (!$dato) {
echo"<br>"."<br>";
  //echo"<script>alert('Error de ingresar producto')</script>";
  echo "<script> swal({
    title: '¡ERROR!',
    icon: 'error',
    text: 'Al ingresar el Cliente',
    type: 'error',
  }).then(() => {
                window.location = '../cliente.php';
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
                title: 'El Cliente Fue registrado con Exito!',
                buttons: false,
                timer: 1500
            }).then(() => {
                window.location = '../cliente.php';
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