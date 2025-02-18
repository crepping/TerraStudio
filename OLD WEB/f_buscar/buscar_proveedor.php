<?php
ini_set("display_errors", 1);
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
            $query = mysqli_query($conexion,"select * from proveedor where id_pro='$variable' and estado =1");
            ?>
             
            <?php
            while ($dat=mysqli_fetch_assoc($query)){
               $empresa=$dat['empresa'];
               $telefono=$dat['telefono'];
               $email=$dat['email'];
               $dir=$dat['direccion'];
               $cont=$dat['vendedor'];
              
            }
            echo $empresa;
         ?>
<div class="form-group row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="social" name="social" value="<?php echo $empresa; ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="Text" class="form-control form-control-user" id="telefono" name="telefono" value="<?php echo $telefono; ?>" required>
                  </div>
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
                </div>
         <?php
         }else{
         
        echo "Error 1";
         }
    }else{
    
    	echo "Error 2";
    }
    
 ?>



 
 