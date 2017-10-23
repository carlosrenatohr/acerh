$(function() {
  $('.btn-del').on('click', function(e) {
    e.preventDefault();
    if (confirm('Estas seguro que deseas eliminar este elemento?')) {
        $(this).parents('form').submit();
    }
  });
});