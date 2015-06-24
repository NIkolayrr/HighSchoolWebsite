$(document).ready(function() {
 // floating div ---------------------------------  *   

    var top=$('.top'); 
    $(top).hide();
    $(window).scroll(function(){
    var windPos=$(this).scrollTop();
    if (windPos >= 500) {
        $(top).fadeIn(700);
    }else{
        $(top).hide();
    }
    });

// floating div END ---------------------------------  *   
 // to top -----------------------------------   
  $('a[href="#top"]').click(function(){
    event.preventDefault();
$('html,body').animate({scrollTop:0},'slow');
});
// end to top-----------------------------------  
// end of photoshow
$("#photoShow").hover(
    function(){$("#overlay i").removeClass("icon-stop");
    $("#overlay i").addClass("icon-play");},
    function(){
        $("#overlay i").removeClass("icon-play");
        $("#overlay i").addClass("icon-stop");  
    });   
/* begin staff */
$(".za-nas li",this).click(function(){
$("#staff",this).stop().fadeIn(700);
});
$(".za-nas li",this).mouseleave(function(){
    $("#staff",this).fadeOut(700);
});
/* end staff */
/* proekti */
$("#result").load('data/pages/prezentations.html');
$('a[href$="#prezentations"]').click(function(){
$("#result").load('data/pages/prezentations.html');
});
$('a[href$="#uspeh"]').click(function(){
$("#result").load('data/pages/uspeh.html');
});
/* end proekti */
/* menu */
/* menu */
});
