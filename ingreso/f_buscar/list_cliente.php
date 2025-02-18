<?php
ini_set('display_errors', 1);
$mysqli = mysqli_connect("localhost","root","","topografia");

$salida ="";
$query ="select *from cliente";
if (isset($_POST['consulta'])) {
	$q = $mysqli->real_escape_string($_POST['consulta']);
	$query = "select * from cliente";
}
$resultado = $mysqli->query($query);
if ($resultado->num_rows >0){
	$salida.="
				<tr>
                <td>Ingreso Rol</td>
				    <td>Codigo</td>
					<td>Rut</td>
					<td>Nombres</td>
                    <td>Apellidos</td>
					<td>Email</td>
                    <td>Telefono</td> 
                    <td>Direccion</td>
                    <td>Fecha Creacion</td>
				</tr>
				</thead>
				<tbody>";
	while($fila=$resultado->fetch_assoc()){
		//$number++;
		$fechaMySQL = $fila['fecha_creacion'];
		$fechaFormateada = date("d-m-Y", strtotime($fechaMySQL));
		$salida.="<tr>
                    <td class=\"center\"><a class=\"btn btn-info product1\" codigo1=".$fila['id_cliente']." data-toggle=\"modal\" data-target=\"#Ingreso1\"><i class=\"fa fa-edit\"></i></a></td>
					<td>".$fila['id_cliente']."</td>
                    <td>".$fila['rut_cliente']."</td>
					<td>".$fila['nombres']."</td>
                    <td>".$fila['apellidos']."</td>
                    <td>".$fila['email']."</td>
                    <td>".$fila['telefono']."</td>
                    <td>".$fila['ubicacion']."</td>
                     <td>".$fechaFormateada."</td>
				</tr>";	
	}
	$salida.="";
}else{
	$salida.="
	<div class='col-sm-6'>
	<div class='alert alert-danger'><strong>Oh no!</strong> No Hay Clientes!.</div>
	<div class='col-sm-6'>
	";

	}
	$mysqli->close();
	echo $salida;
	 
?>