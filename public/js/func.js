$(document).ready(function () {

    var id_usuario_encargado = $('#usuario_table').find('tbody tr td button');
    if (id_usuario_encargado) {
        $(id_usuario_encargado).on('click', function (e) {
            var clicked = $(e.target),
                data = clicked.data('usu-id');
            $('#usuario').val(data);
        })
    }


    var regiones = $("#region");
  if (regiones.length) {
      $(regiones).change(function (e) {
          $.get(`../api/provincia/${$(this).val()}`, function (res, status) {
              $("#provincia").empty();

              $.each(res, function (index, value) {
                  $("#provincia").append(`<option value=${value.PV_COD}>${value.PV_DESC}</option>`);
              })
          });
      });

      $("#provincia").change(function (e) {
          $.get(`../api/ciudad/${$(this).val()}`, function (res, status) {
              $("#ciudad").empty();

              $.each(res, function (index, value) {
                  $("#ciudad").append(`<option value=${value.COM_COD}>${value.COM_NOMBRE}</option>`);
              })
          });
      })
  }
});


function append_what(array, element) {
    for (i in array) {
        $(element).append(`<option value="${array[i]}" data-val="${i}">${array[i]}</option>`);
    }
}
