$(document).ready(function(){
    var scrollTop = 0;
    $(window).scroll(function(){
    scrollTop = $(window).scrollTop();
    if (scrollTop >= 1) {
      $('#global-nav').addClass('scrolled-nav');
    } else if (scrollTop < 1 && $(".hidden").hasClass("open") == false ) {
      $('#global-nav').removeClass('scrolled-nav');
    } 
    }); 
    $(".mobile-nav").on('click', function(){
        $(this).toggleClass("open");
        $(".hidden").toggleClass("open");
        var scrollCheck=$( "#global-nav" ).hasClass( "scrolled-nav" );
        console.log(scrollCheck);
        if( scrollTop < 1){
            $('#global-nav').toggleClass('scrolled-nav');
        }
    });
    $("a").click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
    });
});