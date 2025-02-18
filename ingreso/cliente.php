<?php
include ("../login/session.php");
?>
<html lang="en">
  <head>
  	<title>Sidebar 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <link href="css/sweetalert.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<h1><a href="dasboard.php" class="logo"><img src="images/logo.png"/></a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="dasboard.php"><span class="fa fa-home"></span> Inicio</a>
          </li>
          <li>
              <a href="cliente.php"><span class="fa fa-user-plus"></span> Ingreso Clientes</a>
          </li>
          <li>
            <a href="Listado_Cliente.php"><span class="fa fa-list"></span> Listado Clientes</a>
          </li>
          <li>
          <a href="Listado_Roles.php"><span class=" fa fa-product-hunt"></span> Listado Roles</a>
          </li>
          <li>
          <a href="Listado_Roles.php"><span class="fa fa-tasks"></span> Ingreso Proyecto</a>
          </li>
        </ul>

        <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					</p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

           <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>-->
          </div>
        </nav>
        <h2 class="mb-4">Ingresar Cliente</h2>
        <div class="container">
        <div class="col-sm-4">
        <form class="form-horizontal" id="formulario" method="POST" action="f_guardar/cliente.php">
        <div class="form-group">
        <label class="control-label col-sm-2">Rut:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" oninput="checkRut(this)" name="rut" id="rut" placeholder="Rut Cliente o Empresa">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" >Nombres:</label>
        <div class="col-sm-10">          
        <input type="text" class="form-control" id="name" placeholder="Ingresar Nombres" name="name">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" >Apellidos:</label>
        <div class="col-sm-10">          
        <input type="text" class="form-control" id="apellido" placeholder="Ingresar Apellidos" name="apellido">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" >Email:</label>
        <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Ingresar Email" name="email">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" >Telefono:</label>
        <div class="col-sm-10">          
        <input type="numbrer" class="form-control" id="telefono" placeholder="Ingresar Telefono" name="telefono">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" >Direccion:</label>
        <div class="col-sm-10">          
        <input type="numbrer" class="form-control" id="ubicacion" placeholder="Ingresar Ubicación" name="ubicacion">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" >Profesional:</label>
        <div class="col-sm-10">          
        <select class="form-control" id="profesional" name="profesional">
            <option value="Ricardo Ruiz">Ricardo Ruiz</option>
            <option value="Scarlette Nova">Scarlette</option>
            <option value="Lorena">Lorena</option>
        </select>
        </div>
        </div>
        
                <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary btn-user btn-block">
                  Ingresar Cliente
                </button>
                <hr>
              </form>
              <br>
              <hr>
            <p class="respuesta">
    </div>
		</div>
</div>


  <!-- Bootstrap core JavaScript-->
   
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script>
  $(document).ready(function () {
    $("#formulario").bind("submit",function(){
        // Capturamnos el boton de envío
        var btnEnviar = $("#btnEnviar");
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data:$(this).serialize(),
            beforeSend: function(){
                /*
                * Esta función se ejecuta durante el envió de la petición al
                * servidor.
                * */
                // btnEnviar.text("Enviando"); Para button 
                btnEnviar.val("Enviando"); // Para input de tipo button
                btnEnviar.attr("disabled","disabled");
            },
            complete:function(data){
                /*
                * Se ejecuta al termino de la petición
                * */
                btnEnviar.val("Enviar formulario");
                btnEnviar.removeAttr("disabled");
            },
            success: function(data){
                /*
                * Se ejecuta cuando termina la petición y esta ha sido
                * correcta
                * */
             
                $(".respuesta").html(data);
               
            },
            error: function(data){
                /*
                * Se ejecuta si la peticón ha sido erronea
                * */
                alert("Problemas al tratar de enviar el formulario");
            }
        });
        // Nos permite cancelar el envio del formulario
        return false;
    });
});

  </script>
  <!-- Page level custom scripts -->
  <!-- <script>
  $('#id').click(function(){
    swal({
        title: "Seguro que quieres hacer esto?",
          text: "Esta acción ya no se podrá deshacer, Así que piénsalo bien.",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, estoy seguro',
          cancelButtonText: "Cancelar"
        });
});
  </script> -->
  <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  <script src="../js/demo/datatables-demo.js"></script>
<!------ Validador Rut------->
 <script src="js/validar.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
