<?php
include "../funciones/config.php";
$cnn = Conectar();
$cod = $_POST['cod'];
$patente = $_POST['patente'];
$cars = $_POST['cars'];
$tipo = $_POST['tipo'];
$hoy = date("Y-m-d H:i:s");

$ver ="SELECT * FROM vehiculo WHERE patente ='$patente' ";
$busqueda= mysqli_query($cnn,$ver);
if(mysqli_num_rows($busqueda)>0) { 
   echo"<br>"."<br>";
//echo"<script>alert('El producto ya Existe')</script>";
//echo"<script type='text/javascript'>window.location='../pages/ingreso_proveedor.php'</script>";
echo "<script> swal({
  position: 'top-center',
  icon: 'error',
  title: 'El vehiculo ya existe',
  buttons: false,
  timer: 1500
});</script>";

//echo '<div class="alert alert-danger"><strong>Oh no!</strong> Reserva ya Reservada.</div>';
} else {
$in="insert into vehiculo(id_cliente,patente,modelo_vehiculo,tipo_vehiculo,fechavehiculo) values ('$cod','$patente','$cars','$tipo','$hoy')";   
$dato=mysqli_query($cnn,$in); 
if (!$dato) {
echo"<br>"."<br>";
  //echo"<script>alert('Error de ingresar producto')</script>";
  echo "<script> swal({
    title: '¡ERROR!',
    icon: 'error',
    text: 'Al ingresar el vehiculo',
    type: 'error',
  });</script>";
}else{
echo"<br>"."<br>";
echo "<script> swal({
  position: 'top-center',
  icon: 'success',
  title: 'Vehiculo Ingresado',
  buttons: false,
  timer: 1500
});</script>";
//echo '<div class="alert alert-success"><strong>Excelente!</strong> Proveedor Ingresado.</div>';
//echo"<script>alert('Producto Ingreso')</script>";
//echo"<script type='text/javascript'>window.location='../pages/ingreso_proveedor.php'</script>";
//echo"<script type='text/javascript'>window.location='alumnotodos.php'</script>";
}
}
?>