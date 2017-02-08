/**
 * Created by italo on 08/02/17.
 */
function tratarCampos() {
    if (2 == $('[name="f_str_deficiencia"]').val()) {
        $('#f_str_informacao_deficiencia').attr('disabled', 'disabled')
    }
}

$(document).ready(function () {
    tratarCampos()
});