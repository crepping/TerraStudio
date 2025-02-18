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
            $query = mysqli_query($conexion,"select * from cliente where id_cliente='$variable'");
            ?>
            <?php
            while ($dat=mysqli_fetch_assoc($query)){
                $auto= 0;
               $cod =$dat['id_cliente'];
               
               ?> 
               <?php 
            }
            ?>
            </select>
            <input type="hidden" class="form-control form-control-user codigo" id="exampleInputPassword" name="cod" value="<?php echo $cod; ?>" required>
             <div class="form-group row">
            <div class="col-sm-6">
            <label for="cars">Modelo: </label>
                    <input type="text" class="form-control form-control-user" id="social" name="patente" placeholder="jh-st-kk" required>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                     <label for="cars">Modelo: </label>
                    <select class="form-control form-control-user" name="cars" id="cars">
                    <option>Selecione Una Opcion</option>
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
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="cars">Tipo Vehiculo: </label>
                    <select class="form-control form-control-user" name="tipo" id="cars">
                    <option>Selecione Una Opcion</option>
                    <option value="Camioneta">Camioneta</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Jeep">Jeep</option>
                    <option value="Camion">Camion</option>
                    </select>
                  </div>
                  <!--
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="email" name="email" value="<?php echo $email; ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="Text" class="form-control form-control-user" id="dir" name="dir" value="<?php echo utf8_encode($dir); ?>" required>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="Text" class="form-control form-control-user" id="cont" name="cont" value="<?php echo $cont; ?>" required>
                  </div>
                  -->
                </div>
          <?php 
         }else{
         
        echo "Error 1";
         }
    }else{
    
    	echo "Error 2";
    }
 ?>


 
 