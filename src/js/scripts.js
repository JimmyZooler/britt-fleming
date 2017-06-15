( function( $ ) {
    var $document = $(document);
    $document.ready( function() {
        $(".slides > li:gt(0)").hide();

        setInterval(function() { 
          $('.slides > li:first')
            .fadeOut(2000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('.slides');
        }, 4500);
    });
    $document.ready( function() {
        $("#menu-button").on('click', function () {
            $(".navbar").toggleClass('menuOpen');
        });
    });
    
    
} )( jQuery );