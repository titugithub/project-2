( function( $ ) {
    $(window).load(function() {
        var $container = $('#folio-container');
       // init
       $container.isotope({
       // options
       itemSelector: '.folio-item',
       animationOptions: {
               duration: 750,
               easing: 'linear',
               queue: false
           },
       });

       // filter items when filter link is clicked
       jQuery('#filters a').click(function(){
           var selector = $(this).attr('data-filter');
           $container.isotope({ filter: selector });
           return false;
       });

       jQuery('#filters li a').click(function(){

           jQuery('#filters li').removeClass('current');
           jQuery(this).parent().addClass('current');
       });
   });



   $(function() {
    $('.crsl-items').carousel({
        visible: 1,
        itemMinWidth: 320,
        itemEqualHeight: 320,
        itemMargin: 9,
    });
    $(".crsl-nav a[href=#]").on('click', function(e) {
        e.preventDefault();
    });
});





   
} )( jQuery );




    
