$(function() {

    /*----------------------------------------------------------*/
    // HOVERS DESKTOP

    $('.DropDown-main-first').stop().hover(
        /* Hover On */
        function() {
            $(this).find('.DropDown-menu-first').stop().slideToggle('medium');
            $(this).find('.DropDown-link-first .fa-caret-down').stop().toggleClass('rotate')
        },
        /* Hover Off */
        function() {
            $(this).find('.DropDown-menu-first').stop().slideToggle('medium');
            $(this).find('.DropDown-link-first .fa-caret-down').stop().toggleClass('rotate')
        })

    $('.DropDown-main-second').stop().hover(
        function() {
            $(this).find('.DropDown-menu-second').stop().slideToggle('medium');
            $(this).find('.DropDown-link-second .fa-caret-down').toggleClass('rotate')
        },
        function() {
            $(this).find('.DropDown-menu-second').stop().slideToggle('medium');
            $(this).find('.DropDown-link-second .fa-caret-down').stop().toggleClass('rotate')
        })

    /*----------------------------------------------------------*/
    // BUTTONS MOBILE
    $('.btn-drop-resp').on('click', function(e) {
        /* On change le Z-index du logo => sur mobile le menu rentre dans le logo en haut */
        $('.logo').toggleClass('menu-open');
        $(this).find('.fa-caret-down').toggleClass('rotate')
        $(this).parent().find('.DropDown-menu-resp').slideToggle()
    })

    // IF CLICK OUT OF DROPDOWN MOBILE => DROPDOWN DISAPPEAR

    $(document).on('click', function(e) {
        // IF WE CLICK OUTSIDE THE DROPDOWN => CLOSING DROPDOWNS
        if ($(e.target).closest('.btn-drop-resp').length == 0 && !$(e.target).hasClass('fa-bars', 'fa-times')) {
            if ($('.DropDown-menu-resp').is(':visible')) {
                $('.DropDown-menu-resp').slideToggle()
                $('.fa-caret-down').toggleClass('rotate')
                    /* On change le Z-index du logo => sur mobile le menu rentre dans le logo en haut */
                $('.logo').toggleClass('menu-open');
            }
        }
    });
})