$(function() {
    $('.job-del .btn-del').on('click', function(e) {
        e.preventDefault();
        if (confirm('Estas seguro que deseas eliminar esta vacante?')) {
            $(this).parents('form').submit();
        }
    })
});