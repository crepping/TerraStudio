<style>
  /* Estilo para las celdas de la tabla */
  table.dataTable td, table.dataTable th {
    padding: 8px 12px; /* Espaciado para dar margen a los textos */
    word-wrap: break-word; /* Permite que las palabras largas se dividan y ajusten dentro de las celdas */
    white-space: nowrap; /* Evita que el texto se divida en varias líneas */
    text-overflow: ellipsis; /* Si el texto es muy largo, se agregará '...' al final */
    overflow: hidden; /* Evita que el texto se desborde fuera de la celda */
    text-align: left; /* Alinea el texto a la izquierda */
    max-width: 150px; /* Establece un ancho máximo para las celdas */
  }

  /* Para hacer que las celdas largas muestren un scroll horizontal en lugar de desbordarse */
  table.dataTable td {
    overflow-x: auto; /* Activar scroll horizontal si el contenido es demasiado largo */
  }

  /* Estilo para las tablas responsivas (en pantallas pequeñas) */
  .dataTable {
    width: 100%; /* Hace que la tabla ocupe el 100% del contenedor */
    table-layout: auto; /* Asegura que las columnas se ajusten al contenido */
  }

  /* Estilo adicional para mejorar la legibilidad */
  .dataTable th {
    background-color: #f4f4f4; /* Color de fondo de las cabeceras */
    font-weight: bold; /* Hace que el texto de las cabeceras sea más visible */
  }
  .check.green {
    color: green;
    font-size: 24px; /* Aumenta el tamaño del tick */
    font-weight: bold; /* Hace que el símbolo sea más prominente */
  }

  .check.red {
    color: red;
    font-size: 24px; /* Aumenta el tamaño de la X */
    font-weight: bold; /* Hace que el símbolo sea más prominente */
  }

</style>

<?php
error_reporting(0);
ini_set('display_errors', 1);
$mysqli = mysqli_connect("localhost", "root", "", "topografia");

// Verifica conexión
if (!$mysqli) {
    die("Error de conexión: " . mysqli_connect_error());
}

$salida = "
                <tr>
                  <th>Editar</th>
                    <th>ID Fusion</th>
                    <th>Fecha Ingreso</th>
                    <th>Rol</th>
                    <th>Ubicacion</th>
                    <th>Titulo Dominio</th>
                    <th>Titulo Incripcion</th>
                    <th>C. Numero</th>
                    <th>C. Dominio</th>
                    <th>F. Cedula</th>
                    <th>P. Notarial</th>
                    <th>SII Detallado</th>
                    <th>Rut Cliente: </th>
                    <th>Nombres: </th>
                    <th>Email:</th>
                    <th>Telefono: </th>
                    <th>Atendido: </th>
                    <th>Comentario: </th>
                </tr>
            </thead>
            <tbody>";

$query = "SELECT 
    r.id_fusion,
    r.fecha_ingreso,
    rl.numero_rol,
    rl.ubicacion AS ubicacion_rol,
    r.f_titulodominio,
    r.f_incripcion,
    r.f_certificadonumero,
    r.f_certificadodominio,
    r.f_cedula,
    r.f_podernotarial,
    r.f_siidetallado,
    c.id_cliente,
    c.rut_cliente,
    c.nombres,
    c.apellidos,
    c.email,
    c.telefono,
    c.ubicacion AS ubicacion_cliente,
    c.profesional,
    r.comentario,
    r.estado
FROM fusion r
LEFT JOIN rol rl ON r.id_rol = rl.id_rol
LEFT JOIN cliente c ON r.id_cliente = c.id_cliente where r.estado = 0 ORDER by r.id_fusion desc";

$resultado = $mysqli->query($query);

if ($resultado && $resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Verifica que la fecha no sea nula antes de formatearla
        $fechaFormateada = !empty($fila['fecha_ingreso']) ? date("d-m-Y", strtotime($fila['fecha_ingreso'])) : "No especificada";

        // Convierte los valores 0 y 1 a X o ✓ en las columnas correspondientes con color
        $f_titulodominio = ($fila['f_titulodominio'] == 1) ? '<span class="check green">✓</span>' : ($fila['f_titulodominio'] == 0 ? '<span class="check red">❌</span>' : $fila['f_titulodominio']);
        $f_incripcion = ($fila['f_incripcion'] == 1) ? '<span class="check green">✓</span>' : ($fila['f_incripcion'] == 0 ? '<span class="check red">❌</span>' : $fila['f_incripcion']);
        $f_certificadonumero = ($fila['f_certificadonumero'] == 1) ? '<span class="check green">✓</span>' : ($fila['f_certificadonumero'] == 0 ? '<span class="check red">❌</span>' : $fila['f_certificadonumero']);
        $f_certificadodominio = ($fila['f_certificadodominio'] == 1) ? '<span class="check green">✓</span>' : ($fila['ingreso_municipalidad'] == 0 ? '<span class="check red">❌</span>' : $fila['ingreso_municipalidad']);
        $f_cedula = ($fila['f_cedula'] == 1) ? '<span class="check green">✓</span>' : ($fila['f_cedula'] == 0 ? '<span class="check red">❌</span>' : $fila['f_cedula']);
        $f_podernotarial = ($fila['f_podernotarial'] == 1) ? '<span class="check green">✓</span>' : ($fila['f_areapropiedad'] == 0 ? '<span class="check red">❌</span>' : $fila['f_podernotarial']);
        $f_siidetallado = ($fila['f_siidetallado'] == 1) ? '<span class="check green">✓</span>' : ($fila['f_obrasmunicipales'] == 0 ? '<span class="check red">❌</span>' : $fila['f_siidetallado']);
        //$informe_tecnico = ($fila['informe_tecnico'] == 1) ? '<span class="check green">✓</span>' : ($fila['informe_tecnico'] == 0 ? '<span class="check red">❌</span>' : $fila['informe_tecnico']);
        //$ingreso_municipalidad = ($fila['ingreso_municipalidad'] == 1) ? '<span class="check green">✓</span>' : ($fila['ingreso_municipalidad'] == 0 ? '<span class="check red">❌</span>' : $fila['ingreso_municipalidad']);

        // Agregar las filas a la salida
        $salida .= "<tr>
                        <td class='center'>
                            <a class='btn btn-success product1' codigo1='".htmlspecialchars($fila['id_fusion'])."' titulo='".htmlspecialchars($fila['f_titulodominio'])."' incrip='".htmlspecialchars($fila['f_incripcion'])."' cnumero='".htmlspecialchars($fila['f_certificadonumero'])."' dom='".htmlspecialchars($fila['f_certificadodominio'])."' cedula='".htmlspecialchars($fila['f_cedula'])."' nota='".htmlspecialchars($fila['f_podernotarial'])."' sii='".htmlspecialchars($fila['f_siidetallado'])."' com='".htmlspecialchars($fila['comentario'])."' data-toggle='modal' data-target='#Ingreso1'>
                                <i class='fa fa-edit'></i>
                            </a>
                        </td>
                        </td>
                        <td>".htmlspecialchars($fila['id_fusion'])."</td>
                        <td>".$fechaFormateada."</td>
                        <td>".htmlspecialchars($fila['numero_rol'])."</td>
                        <td>".htmlspecialchars($fila['ubicacion_rol'])."</td>
                        <td>".$f_titulodominio."</td>
                        <td>".$f_incripcion."</td>
                        <td>".$f_certificadonumero."</td>
                        <td>".$f_certificadodominio."</td>
                        <td>".$f_cedula."</td>
                        <td>".$f_podernotarial."</td>
                        <td>".$f_siidetallado."</td>
                        <td>".htmlspecialchars($fila['rut_cliente'])."</td>
                        <td>".htmlspecialchars($fila['nombres'])." ".htmlspecialchars($fila['apellidos'])."</td>
                        <td>".htmlspecialchars($fila['email'])."</td>
                        <td>".htmlspecialchars($fila['telefono'])."</td>
                        <td>".htmlspecialchars($fila['profesional'])."</td>
                        <td>".htmlspecialchars($fila['comentario'])."</td>
                    </tr>";    
    }
} else {
    $salida .= "<tr><td colspan='8' class='text-center'>No hay datos disponibles</td></tr>";
}

$salida .= "</tbody></table>";

$mysqli->close();
echo $salida;
?>
