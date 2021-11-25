$(document).ready(function () {
    $('#btnsend').click(function () {
        var errores = '';

        if ($('#nombre').val() == '') {
            errores += '<p>Escriba un nombre </p>';
            $('#nombre').css("border-bottom-color", "#F14B4B")

        } else {
            $('#nombre').css("border-bottom-color", "#D1D1D1")
        }

        if ($('#marca').val() == '') {
            errores += '<p>Escriba la marca </p>';
            $('#marca').css("border-bottom-color", "#F14B4B")
        } else {
            $('#marca').css("border-bottom-color", "#D1D1D1")
        }

        if ($('#precio').val() == 0) {
            errores += '<p>Escriba el precio </p>';
            $('#precio').css("border-bottom-color", "#F14B4B")

        } else {
            $('#precio').css("border-bottom-color", "#D1D1D1")
        }

        if ($('#foto').val() == '') {
            errores += '<p>la url de la foto </p>';
            $('#foto').css("border-bottom-color", "#F14B4B")

        } else {
            $('#foto').css("border-bottom-color", "#D1D1D1")
        }

        if ($('#descripcion').val() == '') {
            errores += '<p>Escriba la descripcion </p>';
            $('#descripcion').css("border-bottom-color", "#F14B4B")

        } else {
            $('#descripcion').css("border-bottom-color", "#D1D1D1")
        }

        if (errores == '' == false) {
            var mensajeModal = '<div class="modal_wrap">' +
                '<div class="mensaje_modal">' +
                '<h3> errores encontrados </h3>' +
                errores +
                '<span id="btnClose">cerrar</span>' +
                '</div>'
            '</div>'
            $('body').append(mensajeModal);
        }
        $('#btnClose').click(function () {
            $('.modal_wrap').remove();
        });
    });
});