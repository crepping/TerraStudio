<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body>
<?php
include "../funciones/config.php";
$cnna = Conectar();

// Sanitizar entradas para evitar inyección SQL
$cod = mysqli_real_escape_string($cnna, $_POST['cod']);
$cli = mysqli_real_escape_string($cnna, $_POST['cliente']);
$dir = mysqli_real_escape_string($cnna, $_POST['comentario']);
$hoy = date("Y-m-d");

// Verificar el estado de cada checkbox
$f_titulodominio = isset($_POST['opciones']['opcion1']) ? 1 : 0;
$f_incripcion = isset($_POST['opciones']['opcion2']) ? 1 : 0;
$f_certificadonumero = isset($_POST['opciones']['opcion3']) ? 1 : 0;
$f_dominio = isset($_POST['opciones']['opcion4']) ? 1 : 0;
$f_cedula = isset($_POST['opciones']['opcion5']) ? 1 : 0;
$notario = isset($_POST['opciones']['opcion6']) ? 1 : 0;
$interno = isset($_POST['opciones']['opcion7']) ? 1 : 0;

// Insertar en la base de datos
$in = "INSERT INTO fusion (id_cliente, id_rol, fecha_ingreso, f_titulodominio, f_incripcion, f_certificadonumero, f_certificadodominio, f_cedula, f_podernotarial, f_siidetallado, comentario) 
       VALUES ('$cli', '$cod','$hoy', '$f_titulodominio', '$f_incripcion', '$f_certificadonumero', '$f_dominio', '$f_cedula', '$notario', '$interno', '$dir')";

$dato = mysqli_query($cnna, $in);

if (!$dato) {
    echo "<script> 
            swal({
                title: '¡ERROR!',
                icon: 'error',
                text: 'Al ingresar el Proyecto Fusion',
                type: 'error',
            }).then(() => {
                window.location = 'Ingreso_Fusion.php';
            });
          </script>";
} else {
    echo "<script>
            setTimeout(function() {
                swal({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Ingreso de Documentacion de Fusion con Exito!.',
                    buttons: false,
                    timer: 1500
                }).then(() => {
                    window.location = 'Ingreso_Fusion.php';
                });
            }, 1500);
          </script>";
}

mysqli_close($cnna);
?>
</body>
</html>
