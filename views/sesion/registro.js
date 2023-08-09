// Archivo registro.js

$(document).ready(function() {
    // Escuchar el evento de envío del formulario
    $('#Clientes_form').on('submit', function(e) {
      e.preventDefault(); // Prevenir el envío normal del formulario
      enviarFormulario(); // Llamar a la función para enviar el formulario
    });
  });
  
  // Función para enviar el formulario a través de AJAX
  function enviarFormulario() {
    var url = "../../controllers/cliente.controller.php?op=insertar";
    var form_Data = new FormData($("#Clientes_form")[0]);
    $.ajax({
      url: url,
      type: "POST",
      data: form_Data,
      processData: false,
      contentType: false,
      cache: false,
      success: function(respuesta) {
        try {
            var parsedResponse = JSON.parse(respuesta);
            if (parsedResponse.status === "ok") {
                Swal.fire('Registro de Clientes', 'Se guardó con éxito', 'success');
                limpiar();
            } else {
                Swal.fire('Registro de Clientes', 'Ocurrió un error: ' + parsedResponse.message, 'error');
            }
        } catch (error) {
            console.error("Error al analizar respuesta JSON:", error);
            Swal.fire('Registro de Clientes', 'Error al analizar la respuesta del servidor', 'error');
        }
    },
      error: function() {
        Swal.fire('Registro de Clientes', 'Error en la solicitud AJAX', 'error');
      }
    });
  }
  
  // Resto de tu código JavaScript existente...
  // (bloque de código para bloquear números, validar cédula, etc.)
  