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
    <!-- <link href="css/sweetalert.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>-->
    <style>
      .form-check {
    padding: 8px;
    border-radius: 5px;
    transition: background-color 0.3s ease-in-out;
}

.form-check:hover {
    background-color: #f8f9fa; /* Efecto al pasar el mouse */
}

.form-check-input {
    margin-right: 10px;
    transform: scale(1.2); /* Hace que los checkboxes sean más grandes */
}

.card {
    border-left: 4px solid #007bff; /* Línea de color para resaltar la sección */
}

    </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
    <?php
			include "navbar/navbar.php";
      ?>
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
        <h2 class="mb-4">Ingreso Proyecto Regularizacion</h2>
       
              <br>
              <hr>
              <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  <thead>
                    <?php include 'f_buscar/buscar_rol.php'?>
                  </tbody>
                </table>
   
</div>
<!--------------------Modal------------->
<div class="modal fade" id="Ingreso1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingresar Proyecto Subdivición</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body ">
        <form class="form-horizontal" id="formulario" method="POST" action="f_guardar/ingreso_subdivicion.php">
        <div class="form-group">
    <!--<div class="col-sm-6 mb-3">
        <input type="text" class="form-control form-control-user" id="cod" name="cod" placeholder="Código" required>  
    </div>
    <div class="col-sm-6 mb-3">
        <input type="text" class="form-control form-control-user" id="id_cliente" name="cliente" placeholder="ID Cliente" required>  
    </div>-->

    <div class="card p-3 shadow-sm">
        <h5 class="mb-3 text-primary">Documentos Requeridos</h5>
        
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="opciones[opcion1]" value="1" id="check1">
            <label class="form-check-label" for="check1">Fotocopia Rol Evaluo</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="opciones[opcion2]" value="1" id="check2">
            <label class="form-check-label" for="check2">Fotocopia de Escritura</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="opciones[opcion3]" value="1" id="check3">
            <label class="form-check-label" for="check3">Fotocopia de Cédula de Identidad</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="opciones[opcion4]" value="1" id="check4">
            <label class="form-check-label" for="check4">Fotocopia Certificado Rural</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="opciones[opcion5]" value="1" id="check5">
            <label class="form-check-label" for="check5">Fotocopia de Certificado de Dominio</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="opciones[opcion6]" value="1" id="check6">
            <label class="form-check-label" for="check6">Copia Certificado de Previas</label>
        </div>
    </div>
</div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="3" required></textarea>
        </div>
        <BR><BR>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary" type="submit" id="btnEnviar" name="btnEnviar">Ingresar Proyecto</button>
    </div>
</form>
        <HR>
        <p class="respuesta">
        <BR>
        <BR>
        <div class="col-sm-6">
      
        </div>
        </div>
        <div class="modal-footer">
        <!--
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary" id="ingresar" type="submit">Reservar</button>
          -->
        </div>
      </div>
    </div>
  </div>
  


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.8.2/js/dataTables.searchBuilder.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.8.2/js/searchBuilder.dataTables.js"></script>
<script src="https://cdn.datatables.net/datetime/1.5.5/js/dataTables.dateTime.min.js"></script>

  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
<!------ Validador Rut------->
<script src="js/validar.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>-->

<script type="text/javascript">
 $('.product1').click(function(event){
  event.preventDefault();
  var borrar = $(this).attr('codigo1');
  var borrar1 = $(this).attr('codigo2');
  var action = 'infoProducto1';
  $('#cod').val(borrar);
  $('#id_cliente').val(borrar1);
  //alert(borrar);
  //alert(borrar1);
 });
 </script>
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
<script>
$(document).ready(function() {
  new DataTable('#roles', {
    order: [[0, 'desc']],
    language: {
      "searchBuilder": {
        "add": "Añadir condición",
        "button": { "_": "Filtros (%d)", "0": "Filtrar" },
        "condition": "Condición",
        "conditions": {
          "date": { "after": "Después", "before": "Antes", "between": "Entre", "empty": "Vacío", "equals": "Igual a", "notBetween": "No entre", "notEmpty": "No vacío", "not": "No es" },
          "number": { "between": "Entre", "empty": "Vacío", "equals": "Igual a", "gt": "Mayor que", "gte": "Mayor o igual que", "lt": "Menor que", "lte": "Menor o igual que", "notBetween": "No entre", "notEmpty": "No vacío", "not": "No es" },
          "string": { "contains": "Contiene", "empty": "Vacío", "endsWith": "Termina en", "equals": "Igual a", "notEmpty": "No vacío", "startsWith": "Empieza con", "not": "No es" },
          "array": { "contains": "Contiene", "empty": "Vacío", "equals": "Igual a", "not": "No es", "notEmpty": "No vacío", "without": "Sin" }
        },
        "data": "Columna",
        "deleteTitle": "Eliminar regla de filtrado",
        "leftTitle": "Criterio de agrupación",
        "logicAnd": "Y",
        "logicOr": "O",
        "rightTitle": "Criterio de agrupación",
        "title": { "_": "Filtros activos (%d)", "0": "Filtrar" },
        "value": "Valor"
      },
      "lengthMenu": "Mostrar _MENU_ registros",
      "zeroRecords": "No se encontraron resultados",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
      "infoEmpty": "Mostrando 0 a 0 de 0 registros",
      "infoFiltered": "(filtrado de _MAX_ registros en total)",
      "search": "Buscar:",
      "paginate": { "first": "Primero", "last": "Último", "next": "Siguiente", "previous": "Anterior" }
    }
  });
});
</script>
</body>
</html>
