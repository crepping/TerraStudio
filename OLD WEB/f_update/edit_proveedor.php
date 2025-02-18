<?php
ini_set('display_errors', 1);
// error_reporting(0);
// $mysqli =new mysqli("localhost","root","","proyecto");
// $salida ="";
// $variable=$_POST['codigo'];
// $query ="update reserva set estado_reserva=2 Where id_reserva='$variable'";
// $resultado = $mysqli->query($query);
// if($resultado >2){
// 	echo '<div class="alert alert-danger"><strong>Oh no!</strong> Reserva ya Agendada</div>';
// }else{
// echo '<div class="alert alert-Success"><strong>Excelente</strong> Reserva Aceptada.</div>';
// }
// //echo '<div class="alert alert-Success"><strong>Excelente</strong> Reserva Aceptada.</div>';
// ob_start(); 
//   //header("refresh: 1; url = ../reservapendientes.php"); 
// ob_end_flush();
// 	$mysqli->close();
// 	echo $salida; 
include "../funciones/config.php";
$cnn = Conectar();
$cod =$_POST['codigo'];
$social = $_POST['social'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$dir = $_POST['dir'];
$con = $_POST['cont'];

$in="update proveedor set empresa = '$social', vendedor ='$con', email ='$email', telefono ='$telefono', direccion ='$dir' Where id_pro='$cod'";   
$dato=mysqli_query($cnn,$in); 
if (!$dato) {
  echo "<script> swal({
    title: '¡ERROR!',
    icon: 'error',
    text: 'Al Modificar el Proveedor',
    type: 'error',
  });</script>";
}else{
echo"<br>"."<br>";
echo "<script> swal({
  position: 'top-center',
  icon: 'success',
  title: 'El Proveedor Modificado',
  buttons: false,
  timer: 1500
});</script>";
//echo '<div class="alert alert-success"><strong>Excelente!</strong> Reserva Aceptada</div>';
//echo"<script type='text/javascript'>window.location='../pages/ingresoproductos.php'</script>";
//echo"<script type='text/javascript'>window.location='alumnotodos.php'</script>";
}

?>
