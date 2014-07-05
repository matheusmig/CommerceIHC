
/** Formulário de procura dos produtos **/

$('#inputProcuraProduto').keydown(function(e) {
    if (e.keyCode == 13) {
        $(this).closest('form').submit();
    }
});