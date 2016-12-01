(function($){	
	$(document).ready(function(){

    var offset = 220;
    var duration = 500;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            $('.back-top').fadeIn(duration);
        } else {
            $('.back-top').fadeOut(duration);
        }
    });
    $('.back-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    });
    TweenMax.from(".logo", 1, {left: -600});
    TweenMax.to(".logo", 1, {left: 0,opacity:1, ease:Back.easeOut});
    TweenMax.from(".iso", 1, {scale:0});
    TweenMax.to(".iso", 1, {opacity:1, scale:1});
    TweenMax.to(".facebook", 1, {opacity:1, delay:1});
    TweenMax.to(".twitter", 1, {opacity:1, delay:1.2});
    TweenMax.to(".instagram", 1, {opacity:1, delay:1.4});
    TweenMax.to(".google", 1, {opacity:1, delay:1.6});
});
})(jQuery);
