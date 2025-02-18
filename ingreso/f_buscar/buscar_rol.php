<?php
ini_set('display_errors', 1);
$mysqli = mysqli_connect("localhost", "root", "", "topografia");

// Verifica conexión
if (!$mysqli) {
    die("Error de conexión: " . mysqli_connect_error());
}

$salida = "<table id='roles' class='display table table-striped table-bordered' style='width:100%'>
            <thead>
                <tr>
                    <th>Ingresar Proyecto</th>
                    <th>ID ROL</th>
                    <th>Número Rol</th>
                    <th>Ubicación</th>
                    <th>Fecha Ingreso</th>
                    <th>RUT Cliente</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                </tr>
            </thead>
            <tbody>";

$query = "SELECT rol.id_rol, rol.numero_rol, rol.ubicacion, cliente.id_cliente, cliente.rut_cliente, cliente.nombres, cliente.apellidos, rol.fecha_rol
          FROM rol
          JOIN cliente ON rol.id_cliente = cliente.id_cliente";

$resultado = $mysqli->query($query);

if ($resultado && $resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Verifica que la fecha no sea nula antes de formatearla
        $fechaFormateada = !empty($fila['fecha_rol']) ? date("d-m-Y", strtotime($fila['fecha_rol'])) : "No especificada";

        $salida .= "<tr>
                        <td class='center'>
                            <a class='btn btn-primary product1' codigo1='".htmlspecialchars($fila['id_rol'])."' codigo2='".htmlspecialchars($fila['id_cliente'])."' data-toggle='modal' data-target='#Ingreso1'>
                                <i class='fa fa-edit'></i>
                            </a>
                        </td>
                        <td>".htmlspecialchars($fila['id_rol'])."</td>
                        <td>".htmlspecialchars($fila['numero_rol'])."</td>
                        <td>".htmlspecialchars($fila['ubicacion'])."</td>
                        <td>".$fechaFormateada."</td>
                        <td>".htmlspecialchars($fila['rut_cliente'])."</td>
                        <td>".htmlspecialchars($fila['nombres'])."</td>
                        <td>".htmlspecialchars($fila['apellidos'])."</td>
                    </tr>";    
    }
} else {
    $salida .= "<tr><td colspan='8' class='text-center'>No hay datos disponibles</td></tr>";
}

$salida .= "</tbody></table>";

$mysqli->close();
echo $salida;
?>
