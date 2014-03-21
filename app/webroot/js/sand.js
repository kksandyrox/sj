$(window).load(function() {
    $('#slider').nivoSlider({
    	effect : 'fade',
    	pauseTime : 3000,
    	prevText: '<span class = "glyphicon glyphicon-chevron-left"</span>',
    	nextText: '<span class = "glyphicon glyphicon-chevron-right"</span>',
    	pauseOnHover: false,
    	controlNav: false
    });
});

$(document).ready(function(){
  $("img").hover(function(){
    $(this).addClass("shadow");
    // $(this).tooltip({
    //     placement:'left',
    //     title:'View',
    //     trigger:'hover'
    // })
    },function(){
    $(this).removeClass("shadow");
  });
});

$(function() {
    $("img").tooltip({

        placement:'bottom',
        title:'Click for details',
        trigger:'hover'
    })
   
});