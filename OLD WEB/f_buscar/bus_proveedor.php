<?php
ini_set('display_errors', 1);
$mysqli = mysqli_connect("localhost","aiepnet1_root","Jugando123","aiepnet1_proyecto");

$salida ="";
$query ="select *from proveedor where estado = 1";
if (isset($_POST['consulta'])) {
	$q = $mysqli->real_escape_string($_POST['consulta']);
	$query = "select * from proveedor where estado = 1";
}
$resultado = $mysqli->query($query);
if ($resultado->num_rows >0){
	$salida.="
				<tr>
                <td></td>
                <td></td>
				    <td>Codigo</td>
					<td>Rut</td>
					<td>Empresa</td>
                    <td>Vendedor</td>
					<td>Email</td>
                    <td>Telefono</td>
                    <td>Direccion</td>
				</tr>
				</thead>
				<tbody>";
	while($fila=$resultado->fetch_assoc()){
		//$number++;
		$salida.="<tr>
                    <td><a class=\"btn btn-success product\" codigo1=".$fila['id_pro']." data-toggle=\"modal\" data-target=\"#Ingreso\"><i class=\"fas fa-edit\"></i></a></td>
                    <td><a class=\"btn btn-danger product1\" borrar=".$fila['id_pro']." data-toggle=\"modal\" data-target=\"#Ingreso1\"><i class=\"far fa-trash-alt\"></i></a></td>
					<td>".$fila['id_pro']."</td>
                    <td>".$fila['rut']."</td>
					<td>".$fila['empresa']."</td>
                    <td>".$fila['vendedor']."</td>
                    <td>".$fila['email']."</td>
                    <td>".$fila['telefono']."</td>
                    <td>".$fila['direccion']."</td>
               
                   
					
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