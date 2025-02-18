<?php
ini_set('display_errors', 1);
//  include '../config/config.php';
// // include '../../login/session.php';
// $cnn=Conectar();
// if (!empty($_POST)){
//     if ($_POST['action']=='infoProducto'){
        
//  $variable=$_POST['codigo'];
//  $sql ="select *from vehiculo where id_cliente ='$variable'" ;
//  //"rut_apoderado='$variable'
// $rs = mysqli_query($cnn,$sql);

//             if ( $row = mysqli_fetch_assoc($rs) ) {
                
              
//                echo json_encode($row,JSON_UNESCAPED_UNICODE);
//                   exit;
//             }
//             echo "error";
//             exit;
//         }
//     }
$conexion = mysqli_connect("localhost","aiepnet1_root","Jugando123","aiepnet1_proyecto");
if (isset($_POST['codigo'])){
         if ($_POST['action']=='infoProducto'){
            $variable=$_POST['codigo'];
            $query = mysqli_query($conexion,"select * from vehiculo where id_vehiculo='$variable'");
             while ($dat=mysqli_fetch_assoc($query)){
                    $id=$dat['patente'];
                    $auto=$dat['modelo_vehiculo'];
                   $tipo =$dat['tipo_vehiculo'];
             
            ?>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="cars">Patente: </label>
                    <input type="text" class="form-control form-control-user" id="social" name="patente" value="<?php echo $id; ?>" required>
                  </div>
            <div class="col-sm-6 mb-3 mb-sm-0"">
            <label for="cars">Modelo: </label>
            <select class="form-control form-control-user" id="car" name="cars" onchange="myFunction()" required>
         
           
               <option value="<?php echo $auto; ?>"><?php echo $auto;?></option>
                <option>Seleccione Una Patente</option>
                <option value="volvo">Volvo</option>
                    <option value="saab">saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Chery">Chery</option>
                    <option value="Chevrolet">Chevrolet</option>
                    <option value="Citroen">Citroen</option>
                    <option value="Dodge">Dodge</option>
                    <option value="Ford">Ford</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="Jac">Jac</option>
               <?php 
            }
            ?>
            </select>
            </div>
            </div>
             <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="cars">Tipo Vehiculo: </label>
                    <select class="form-control form-control-user" name="tipo" id="tipo" onchange="myFunction1()" required>
                    <option value="<?php echo $auto; ?>"><?php echo $tipo;?></option>
                    <option>Selecione Una Opcion</option>
                    <option value="Camioneta">Camioneta</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Jeep">Jeep</option>
                    <option value="Camion">Camion</option>
                    </select>
                  </div>

            <input type="hidden" class="form-control form-control-user codigo" id="exampleInputPassword" name="cod" value="<?php echo $cod; ?>" required>
            
          <?php 
         
         }else{
         
        echo "Error 1";
         }
    }else{
    
    	echo "Error 2";
    }
 ?>


 
 