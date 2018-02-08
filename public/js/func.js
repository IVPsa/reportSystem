$(document).ready(function () {

    var id_usuario_encargado = $('#usuario_table').find('tbody tr td button');
    if (id_usuario_encargado) {
        $(id_usuario_encargado).on('click', function (e) {
            var clicked = $(e.target),
                data = clicked.data('usu-id');
            $('#usuario').val(data);
        })
    }

});
