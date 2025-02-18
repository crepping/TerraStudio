
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
$patente = $_POST['patente'];
$modelo = $_POST['cars'];
$tipo = $_POST['tipo'];
$in="update vehiculo set patente='$patente',modelo_vehiculo='$modelo',tipo_vehiculo='$tipo' Where id_vehiculo='$cod'";   
$dato=mysqli_query($cnn,$in); 
if (!$dato) {
  echo "<script> swal({
    title: '¡ERROR!',
    icon: 'error',
    text: 'Al Modificar el vehiculo',
    type: 'error',
  });</script>";
}else{
echo"<br>"."<br>";
echo "<script> swal({
  position: 'top-center',
  icon: 'success',
  title: 'Vehiculo  Modificado',
  buttons: false,
  timer: 1500
});</script>";
//echo"<script type='text/javascript'>window.location='../pages/ingresoproductos.php'</script>";
//echo"<script type='text/javascript'>window.location='alumnotodos.php'</script>";
}
  

?>
