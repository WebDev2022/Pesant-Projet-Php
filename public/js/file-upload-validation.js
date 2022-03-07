$('#formControlFile1').on('change', function() {
    if ($(this).get(0).files.length > 0) {
        $('.fa-check-circle').removeClass('d-none')
        $('.fa-exclamation-triangle').addClass('d-none')
        $('label[for="formControlFile1"]').removeClass('invalid-form')
        return
    }
})