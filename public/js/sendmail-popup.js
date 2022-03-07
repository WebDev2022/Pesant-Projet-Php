// MAKE THE POPUP APPEAR AND PREPARE DYNAMIC HEIGHT
let heightBottom = $(".formulaire-bas-de-page .bottom").height();

$(document).ready(function() {
    let heightBottom = $(".formulaire-bas-de-page .bottom").height();
    $('.formulaire-bas-de-page').css("bottom", '-' + heightBottom + 'px');
    //$('.hidden-test-test').delay(1000).css( "opacity", '1');
    setTimeout(function() {
        $('.hidden-test-test').css("opacity", '1');
    }, 300);
});

// POPUP SHOW/HIDE
$(".formulaire-bas-de-page .top").click(function() {
    let heightBottom = $(".formulaire-bas-de-page .bottom").height();
    $(".arrow-icon").toggleClass("open");

    $('#main-haut').toggleClass('d-none')
    $('#main-bas').toggleClass('d-none')

    if ($(".arrow-icon").hasClass("open")) {

        $('.formulaire-bas-de-page').stop().animate({ bottom: 0 })
    } else {
        $('.formulaire-bas-de-page').stop().animate({ bottom: '-' + heightBottom });
    };
});

// CLICK OUT OF POPUP CLOSE THE POPUP
$(document).on('click', function(e) {

    // IF WE CLICK OUTSIDE THE DROPDOWN => CLOSING DROPDOWNS
    if ($(e.target).closest('.formulaire-bas-de-page').length == 0) {
        if ($(".arrow-icon").hasClass("open")) {
            $(".arrow-icon").toggleClass("open");
            $('#main-haut').toggleClass('d-none')
            $('#main-bas').toggleClass('d-none')

            let heightBottom = $(".formulaire-bas-de-page .bottom").height();
            $('.formulaire-bas-de-page').stop().animate({ bottom: '-' + heightBottom });
        }
    }
});


// AJAX FORM POP UP
$('#popup-submit').click(function(e) {

    /* preventDefault send button */
    e.preventDefault()

    /* Disabling send button */
    $('#popup-submit').attr('disabled', true)

    /* verify console log */
    /* console.log('click'); */

    /* Variables */
    let $name = ($("#popup input[name='name']").val()).trim();
    let $phone = ($("#popup input[name='phone']").val()).trim();
    let $_token = ($("#popup input[name='_token']").val()).trim();
    let $submit = ($("#popup input[name='submit']").val()).trim();

    $array_inputs = [
        $name,
        $phone,
        $_token,
        $submit,
    ]

    /* Reinitialize invalid form for all inputs or pop up*/
    $("#popup :input").each(function() {
        $(this).removeClass('invalid-form');
    });

    $.ajax({
        url: "sendmail-popup", //Cible du script coté serveur à appeler 
        type: "POST", //Méthode à employer POST ou GET 
        data: {
            name: $name,
            phone: $phone,
            _token: $_token,
            submit: $submit,
        },
        success: function(response) {

            $response = JSON.parse(response);

            if ($response.errors) {

                $errors = $response.errors

                // Hide success popup 
                $('#success-popup').hide();

                // Clear all errors
                $('#errors-list').empty();

                // Displaying errors list
                for (const [key, value] of Object.entries($errors)) {
                    $('#errors-list').append('<li><i class="fas fa-exclamation-triangle"></i> ' + value + '</li>')

                    // Add invalid form to field target
                    $("#popup :input").each(function() {
                        if ($(this).attr('name') == key) {
                            $(this).addClass('invalid-form')
                        }
                    });
                };

                // Display Error div
                $('#errors-popup').show();

                // Remove disabled from submit button
                $('#popup-submit').attr('disabled', false)
            }

            if ($response.success) {

                //Hide errors
                $('#errors-popup').hide();

                //Show popup Success
                $('#success-popup').show();

                //Append success message
                $('#success-popup-message').append($response.success)

                //Removing Form from html page to avoid spam
                $('#form-popup').remove()

                //Removing some useless margins
                $('#popup').removeClass('mb-3')

                /* Animate and removing popup html to avoid spam */
                let heightBottom = $(".formulaire-bas-de-page .bottom").height();
                setTimeout(() => {
                    $('.formulaire-bas-de-page').stop().animate({ bottom: '-' + heightBottom + 'px' }, 500);
                    $(".arrow-icon").toggleClass("open");
                    $('#main-haut').toggleClass('d-none')
                    $('#main-bas').toggleClass('d-none')
                }, 4000);

            }
        },
        error: function(response) {
            $('#errors-list').append('<li>Une erreur sur le serveur est survenue, veuillez contacter l\'administrateur du site web</li>')
            console.log('fail');
            console.log(response);
        }
    })
})