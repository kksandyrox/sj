$(window).load(function() {
    $('#slider').nivoSlider({
    	effect : 'fade',
    	pauseTime : 1500,
    	prevText: '<span class = "glyphicon glyphicon-chevron-left"</span>',
    	nextText: '<span class = "glyphicon glyphicon-chevron-right"</span>',
    	pauseOnHover: false,
    	controlNav: false
    });
});

$(document).ready(function(){
  $("img").hover(function(){
    $(this).addClass("shadow");
    },function(){
    $(this).removeClass("shadow");
  });
});

