(function($){	
	$(document).ready(function(){

    var offset = 220;
    var duration = 500;
    var flechmenu = true;
    var scroll = false;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            $('.back-top').fadeIn(duration);
            //TweenMax.from(".parent-header", 1, {top: 0});
            TweenMax.to(".parent-header", 1, {top: -153 , ease:Back.easeOut});
            flechmenu = false;
            scroll = true;
        } else {
            $('.back-top').fadeOut(duration);
            TweenMax.to(".parent-header", 1, {top: 0 , ease:Back.easeOut});
            flechmenu = true;
            scroll = false;
        }
        
    });
    
    $('.flech-menu').click(function(){
        if(scroll){
            if(flechmenu){
                TweenMax.to(".parent-header", 1, {top: -153 , ease:Back.easeOut});
                flechmenu = false;
            }else{
                TweenMax.to(".parent-header", 1, {top: 0 , ease:Back.easeOut});
                flechmenu = true;
            }
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

        $('#searchform > div').click(function(e){
            e.stopPropagation();           
            $(this).addClass('search-block-open');
        });
        $('#searchform > div > input[type="text"]').val(''); 
        $(document).click(function(){            
            if($('#searchform > div').hasClass('search-block-open')){
               $('#searchform > div').removeClass('search-block-open');
               $('#searchform > div > input[type="text"]').val(''); 
            }   
        });
        $('#map').on('inview.uk.scrollspy', function(){
            var marker = new google.maps.Marker({
                position: {lat: 36.798711, lng: 10.185847},
                map: map,
                title: 'Hello World!',
                icon: urlimage+'marker.png',
                animation: google.maps.Animation.DROP,
              });
              marker.addListener('click', function(){
                  if (this.getAnimation() !== null) {
                        this.setAnimation(null);
                      } else {
                        this.setAnimation(google.maps.Animation.BOUNCE);
                      }
              });
              
        });
        
        setInterval(function(){
            TweenMax.from(".iso", 1, {scale:0});
            TweenMax.to(".iso", 1, {opacity:1, scale:1}); 
            if(!flechmenu){
               TweenMax.from(".flech-menu", 1, {scale:0, opacity:0});
               TweenMax.to(".flech-menu", 1, {scale:1, opacity:1});    
            }
                
        }, 3000);
        
        $('.logo img').hover(function(){
            $(this).addClass('animated shake');
        }, function(){
            $(this).removeClass('animated shake');
        });
        
        $('.produit .item img').hover(function(){
            $(this).addClass('animated jello');
        }, function(){
            $(this).removeClass('animated jello');
        });
        
        $('#menu-main-menu a[href^="#"]').click(function(){
            var the_id = $(this).attr("href");
            console.log(the_id)
            $('html, body').animate({
                    scrollTop: ($(the_id).offset().top - 20)
            }, 1200);
            return false;
    });
initMap();
initMapProduction($);

        $("#locations").bootstrapNews({
            newsPerPage: 4,
            autoplay: false,
             autoplay: true,
             pauseOnHover: true,
            onToDo: function () {
                console.log(this);
            }
        });

        $('#locations').delegate('.news-item a', 'click', function(e){    
            e.preventDefault();
            //alert('salut');
            production_map.setZoom(14);
            lat = $(this).data('lat');
            long = $(this).data('long');
            production_map.setCenter(new google.maps.LatLng(lat, long));
        });
});
})(jQuery);
var map = "";
var production_map = "";
function initMap() {
    var mapDiv = document.getElementById('map');
    console.log(mapDiv);
    if(mapDiv != null ) {
	//var mapDiv = document.getElementById('map');
	map = new google.maps.Map(mapDiv, {
	    center: {lat: 36.798711, lng: 10.185847},
	    zoom: 18,
	    disableDefaultUI: true
	});
          //marker.addListener('click', toggleBounce);
    }
}

function initMapProduction($) {
    var mapDivs = document.getElementById('production_map');
    console.log(mapDivs);
    if(mapDivs != null ) {
	//var mapDiv = document.getElementById('map');
	production_map = new google.maps.Map(mapDivs, {
	    center: {lat: 36.798711, lng: 10.185847},
	    zoom: 22,
	    disableDefaultUI: true
	});
          //marker.addListener('click', toggleBounce);
          
          var address = "Tunisia";
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    production_map.setCenter(results[0].geometry.location);
                    production_map.fitBounds(results[0].geometry.bounds);
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
            
            $.ajax({
	          url: ajaxurl,
	          type: 'post',
	          data: {
	            action : "get_local",         
	          },
	          success: function (data) {
	          	poulinas = JSON.parse(data);
	          	setMarkers(production_map, poulinas); 
	          },
	          error: function (xhr, ajaxOptions, thrownError) {
	                console.log(xhr.status);
	                console.log(xhr.responseText);
	                console.log(thrownError);
	            },
	            beforeSend : function(){
	            	//alert('salut');
	            },
	            complete : function(){
	            	//alert('fin');
	            }
	        });
    }
}
function setMarkers(map, poulinas) {
    var infowindow= new google.maps.InfoWindow({
		    content: 'holding...',
		});
                var markers = [];
	for (var i = 0; i < poulinas.length; i++) {
		console.log(poulinas.length);
		var image = urlimage + '/marker.png';
		//if(pos == i) image = 'http://poulina.streamerzweb.com/wp-content/themes/poulina/images/anchor-red.png';
	    var poulina = poulinas[i];
	    
	    markers[i]= new google.maps.Marker({
	      position: {lat: poulina[1], lng: poulina[2]},
	      map: map,
	      icon: image,
	      title: poulina[0],
	      animation: google.maps.Animation.DROP,
	      //zIndex: poulina[3]
	    });
                var content = poulina[i];
                markers[i].addListener('click',(function(i){
                    return function(){
                        infowindow.setContent('<b>'+poulinas[i][0]+'</b> - '+poulinas[i][0]);
                        infowindow.open(map, markers[i]);
                    }
                }(i)));
	  }
}