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
    
    /*$(".dial").knob({
        
    });*/
    
        
        $('#object').on('inview.uk.scrollspy', function(){
            $('.dial').each(function () { 
                var elm = $(this);
                var color = elm.attr("data-fgColor");  
                var perc = elm.attr("value");   
                elm.knob({ 
                     'value': 0, 
                      'min':0,
                      'max':100,
                      "skin":"tron",
                      "readOnly":true,
                      "thickness":.2,
                      'dynamicDraw': true,
                      'format' : function (v) { return v + '%' }

                });
                $({value: 0}).animate({ value: perc }, {
                    duration: 2000,
                    easing: 'swing',
                    progress: function () {  
                        elm.val(Math.ceil(this.value)).trigger('change')
                    }
                });
              });
        });
       var scene = document.getElementById('scene');
var parallax = new Parallax(scene);
});
})(jQuery);
function initMap() {
    var mapDiv = document.getElementById('map');
    if(mapDiv.length != 0) {
	//var mapDiv = document.getElementById('map');
	var map = new google.maps.Map(mapDiv, {
	    center: {lat: 36.798711, lng: 10.185847},
	    zoom: 18,
	    disableDefaultUI: true
	});
        var marker = new google.maps.Marker({
            position: {lat: 36.798711, lng: 10.185847},
            map: map,
            title: 'Hello World!',
            icon: urlimage+'marker.png'
          });
    }
}