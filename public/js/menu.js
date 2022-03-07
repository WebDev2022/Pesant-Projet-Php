$(function() {

    $('.icon-menu').on('click', function() {

        if (!$('.mobile').is(':visible')) {

            /* mobile menu display none to block */
            $('.mobile').show()

            /* Menu to cross icon */
            $('.fa-bars').hide()
            $('.fa-times').show()

            /* Logo and icons menu z-index */
            $('.logo').toggleClass('menu-open');
            $('.icon-menu').toggleClass('menu-open')

            /* Animation menu appearing */
            $('.mobile').stop().animate({ top: '0px' }, 500)

            /* Animation delay li mobile */
            $('li[class*="mobile-"]').toggleClass('reveal-visible')

        } else {
            /* Sinon */

            $('.fa-times').hide()
            $('.fa-bars').show()

            $('li[class*="mobile-"]').toggleClass('reveal-visible')
            $('li[class*="mobile-"]').toggleClass('reverse-visible')

            setTimeout(function() {
                $('.mobile').stop().animate({ top: '-900px' }, function() {
                    $('.logo').toggleClass('menu-open')
                    $('.icon-menu').toggleClass('menu-open')
                    $('li[class*="mobile-"]').toggleClass('reverse-visible')
                    $('.mobile').hide()
                })
            }, 1200);
        }
    })
})