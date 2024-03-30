jQuery(document).ready(function($) {
    $('#add-field').click(function(e) {
        e.preventDefault();
        $('#custom-fields').append('<input type="text" name="custom_field[]" value="" />');
    });
});
