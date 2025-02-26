<html>
  
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</head>
<html>
<?php
ini_set('display_errors', 1);
include "../funciones/config.php";

$cnn = Conectar();
// Sanitizar entradas para evitar inyección SQL
$cod = $_POST['cod'];
//$cli = mysqli_real_escape_string($cnna, $_POST['cliente']);
$dir = $_POST['com'];
//$hoy = date("Y-m-d");

// Verificar el estado de cada checkbox
$f_titulodominio = isset($_POST['opciones']['opcion1']) ? 1 : 0;
$f_incripcion = isset($_POST['opciones']['opcion2']) ? 1 : 0;
$f_certificadonumero = isset($_POST['opciones']['opcion3']) ? 1 : 0;
$f_cedula = isset($_POST['opciones']['opcion4']) ? 1 : 0;
$f_areapropiedad = isset($_POST['opciones']['opcion5']) ? 1 : 0;
$obras = isset($_POST['opciones']['opcion6']) ? 1 : 0;
$informe_tecnico = isset($_POST['opciones']['opcion7']) ? 1 : 0;
$ingreso_municipalidad = isset($_POST['opciones']['opcion8']) ? 1 : 0;


$in="update regularizacion set f_titulodominio = '$f_titulodominio', f_incripcion ='$f_incripcion',f_certificadonumero = '$f_certificadonumero', f_cedula = '$f_cedula', 
f_areapropiedad = '$f_areapropiedad', f_obrasmunicipales = '$obras', informe_tecnico = '$informe_tecnico', ingreso_municipalidad = '$ingreso_municipalidad', comentarios = '$dir' Where id_regularizar='$cod'";   
$dato=mysqli_query($cnn,$in); 
if (!$dato) {
  echo "<script>
  setTimeout(function() {
      swal({
          position: 'top-center',
          icon: 'error',
          title: 'Error al Modificar la Regularizacion',
          buttons: false,
          timer: 1500
      }).then(() => {
          window.location = 'Vista_Regularizacion.php';
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
                title: 'Regularizacion Modificado Correctamente',
                buttons: false,
                timer: 1500
            }).then(() => {
                window.location = 'Vista_Regularizacion.php';
            });
        }, 1500);
      </script>";
//echo '<div class="alert alert-success"><strong>Excelente!</strong> Reserva Aceptada</div>';
//echo"<script type='text/javascript'>window.location='../pages/ingresoproductos.php'</script>";
//echo"<script type='text/javascript'>window.location='alumnotodos.php'</script>";
}
?>
