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
    <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json">

    <!--<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>-->
    

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
        <h2 class="mb-4">Vista Regularizacion</h2>
       
              <br>
              <hr>
              <table class="table table-bordered" id="cliente" width="100%" cellspacing="0">
                  <thead>
                    <?php include 'f_buscar/Vista_Fusion.php'?>
                  </tbody>
              </table>
             
   
</div>
<!--------------------Modal------------->
<div class="modal fade" id="Ingreso1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modificar Regularizacion</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Regularizacion
        <form class="form-horizontal" id="formulario" method="POST" action="f_modificar/mod_fusion.php">
        <div class="form-group">
        <div class="col-sm-6">
        <input type="hidden" class="form-control form-control-user" id="cod" name="cod" required>    
        </div>    
        <div class="card p-3 shadow-sm">
        <h5 class="mb-3 text-primary">Documentos Requeridos</h5>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opciones[opcion1]" value="1" id="check1">
                    <label class="form-check-label" for="check1">Fotocopia Título de Dominio</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opciones[opcion2]" value="1" id="check2">
                    <label class="form-check-label" for="check2">Fotocopia de Inscripción</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opciones[opcion3]" value="1" id="check3">
                    <label class="form-check-label" for="check3">Fotocopia de Certificado Número</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opciones[opcion4]" value="cedula" id="check4">
                    <label class="form-check-label" for="check4">Fotocopia de Dominio</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opciones[opcion5]" value="1" id="check5">
                    <label class="form-check-label" for="check5">Fotocopia Cedula</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opciones[opcion6]" value="1" id="check6">
                    <label class="form-check-label" for="check6">Poder Notarial</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opciones[opcion7]" value="1" id="check7">
                    <label class="form-check-label" for="check7">Documento detallado SII</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
            <textarea class="form-control" id="com" name="com" rows="3" required></textarea>
        </div>
                 <BR>
                 <BR>
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                 <button class="btn btn-primary" type="submit" id="btnEnviar" name="btnEnviar">Modificar Regularizacion</button>
        </form>
        <HR>
        <BR>
        <BR>
        <div class="col-sm-6">
        <p class="respuesta"></p>
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
 

  <!-- Bootstrap core JavaScript-->
   <!-- jQuery (debe ir antes de cualquier código que lo use) -->
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
<script>
  $('.product').click(function() {
    var clienteId = $(this).data('id');
    console.log(clienteId); // Aquí puedes realizar acciones con el ID del cliente, como cargar datos en el modal
});
$('#Ingreso2').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Botón que activó el modal
    var clienteId = button.data('id'); // Obtiene el data-id del botón
    var modal = $(this);
    modal.find('.modal-body #cliente-id').text(clienteId); // Inserta el ID del cliente en el modal
});
</script>
  <script type="text/javascript">
   $('.product1').click(function(event){
    event.preventDefault();
    var borrar = $(this).attr('codigo1');
    var titulo = $(this).attr('titulo');
    var incrip = $(this).attr('incrip');
    var cnumero = $(this).attr('cnumero');
    var dom = $(this).attr('dom');
    var cedula = $(this).attr('cedula');
    var nota = $(this).attr('nota');
    var sii = $(this).attr('sii');
    var com = $(this).attr('com');
    //var borrar1 = $(this).attr('codigo2');
    var action = 'infoProducto1';
    $('#cod').val(borrar);
    $('#com').val(com);
    if (titulo == 1) {
        $('#check1').prop('checked', true);
    } else {
        $('#check1').prop('checked', false);
    }
    if (incrip == 1) {
        $('#check2').prop('checked', true);
    } else {
        $('#check2').prop('checked', false);
    }
    if (cnumero == 1) {
        $('#check3').prop('checked', true);
    } else {
        $('#check3').prop('checked', false);
    }
    if (dom == 1) {
        $('#check4').prop('checked', true);
    } else {
        $('#check4').prop('checked', false);
    }
    if (cedula == 1) {
        $('#check5').prop('checked', true);
    } else {
        $('#check5').prop('checked', false);
    }
    if (nota == 1) {
        $('#check6').prop('checked', true);
    } else {
        $('#check6').prop('checked', false);
    }
    if (sii == 1) {
        $('#check7').prop('checked', true);
    } else {
        $('#check7').prop('checked', false);
    }
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

<!-- Incluir CSS de DataTable -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<!-- Incluir CSS de Responsive -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
<!-- Incluir CSS de Buttons para exportar -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

<!-- Incluir jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Incluir el script de DataTable -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- Incluir el script de Responsive -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<!-- Incluir el script de SearchBuilder -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/searchbuilder/1.3.0/js/dataTables.searchBuilder.min.js"></script>
<!-- Incluir el script de Buttons -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<!-- Incluir los scripts necesarios para exportar a Excel y PDF -->
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    new DataTable('#cliente', {
      order: [[0, 'desc']], // Orden inicial
      autoWidth: true, // Ajuste automático de las columnas
      responsive: true, // Habilitar la respuesta para pantallas pequeñas
      dom: 'Bfrtip', // Incluir los botones de exportación
      buttons: [
        {
          extend: 'excelHtml5',
          text: 'Exportar a Excel',
          title: 'Regularizacion Clientes',
          className: 'btn btn-success',
          exportOptions: {
            columns: [1,2,3,4,5,6,7,8,9,10,11,12,12,13,14, 15, 16,17], // Especifica las columnas manualmente por su índice
          },
          customize: function(xlsx) {
            var sheet = xlsx.xl.worksheets['Regularizacion_Cliente.xml'];

            // Ajustar automáticamente el ancho de las columnas
            $('col', sheet).each(function(index) {
              var maxWidth = 0;
              // Obtener el contenido máximo de cada columna
              $('row c[r^="R'+(index+1)+'"]', sheet).each(function() {
                var textLength = $(this).text().length;
                if (textLength > maxWidth) maxWidth = textLength;
              });
              // Ajustar el ancho según el contenido
              var adjustedWidth = Math.min(maxWidth + 5, 100); // Asegura que el ancho no sea más de 100
              $(this).attr('width', adjustedWidth);
            });
          }
        }
      ],
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
