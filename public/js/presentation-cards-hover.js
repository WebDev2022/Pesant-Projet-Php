$(document).ready(function () {

    function animate() {
        var windowSize = $(window).width();

        if (windowSize > 991) {
            $("#presentation-secu-incendie").hover(
                function () {
                    $(this).css("flex", "2.5");
                },
                function () {
                    $(this).css("flex", "1");
                }
            );

            $("#presentation-surete-secu").hover(
                function () {
                    $(this).css("flex", "2.5");
                },
                function () {
                    $(this).css("flex", "1");
                }
            );

            $("#presentation-secourisme").hover(
                function () {
                    $(this).css("flex", "2.5");
                },
                function () {
                    $(this).css("flex", "1");
                }
            );

            $("#presentation-hab-elec").hover(
                function () {
                    $(this).css("flex", "2.5");
                },
                function () {
                    $(this).css("flex", "1");
                }
            );
        }
    }
    
     // Execute on load
     animate();
     // Bind event listener
     $(window).resize(animate);
});
