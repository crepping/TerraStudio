<?php
ini_set('display_errors', 1);
$mysqli = mysqli_connect("localhost","aiepnet1_root","Jugando123","aiepnet1_proyecto");

$salida ="";
$query ="select *from cliente c, vehiculo v where c.id_cliente = v.id_cliente order by v.id_vehiculo DESC";
if (isset($_POST['consulta'])) {
	$q = $mysqli->real_escape_string($_POST['consulta']);
	$query = "select *from cliente c, vehiculo v where c.id_cliente = v.id_cliente";
}
$resultado = $mysqli->query($query);
if ($resultado->num_rows >0){
	$salida.="
	        <tr>
                <td></td>
                <td>Codigo</td>
		<td>Patente</td>
		<td>Rut</td>
		<td>Nombres</td>
                <td>Modelo</td>
		<td>Tipo</td>
                <td>Ingresado</td>
		</tr>
		</thead>
		<tbody>";
	while($fila=$resultado->fetch_assoc()){
		//$number++;
		$nom = $fila['nombres'].' '.$fila['apellidos'];
		$salida.="<tr>
                    <td><a class=\"btn btn-success product\" codigo1=".$fila['id_vehiculo']." data-toggle=\"modal\" data-target=\"#Ingreso\"><i class=\"fas fa-edit\"></i></a></td>
                    <!--
                    <td><a class=\"btn btn-danger product1\" borrar=".$fila['id_vehiculo']." data-toggle=\"modal\" data-target=\"#Ingreso1\"><i class=\"far fa-trash-alt\"></i></a></td>
                    -->
		    <td>".$fila['id_vehiculo']."</td>
                    <td>".$fila['patente']."</td>
                    <td>".$fila['rut']."</td>
                    <td>".$nom."</td>
		    <td>".$fila['modelo_vehiculo']."</td>
                    <td>".$fila['tipo_vehiculo']."</td>
                    <td>".$fila['fechavehiculo']."</td>		
		</tr>";	
	}
	$salida.="";
}else{
	$salida.="
	<div class='col-sm-6'>
	<div class='alert alert-danger'><strong>Oh no!</strong> no hay Proveedores</div>
	<div class='col-sm-6'>
	";

	}
	$mysqli->close();
	echo $salida;
	 
?>