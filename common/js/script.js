$(document).ready(function(){

    $('#myVideo').autoplay = true;
    
    $("#nav_wrap>ul>li").mouseover(function(){
        $('.header').addClass('on');
    });
    
    $(".header").mouseleave(function(){
        $('.header').removeClass('on');
    });

    $('#menu').on('scroll touchmove mousewheel', function(event) {
        event.preventDefault();
        event.stopPropagation();
        return false;
    });
    $('#mybtn').click(function() {
        $('#mydiv').slideToggle();
    });    
    
    
    $( ".detail_sum_small_img>ul>li" ).click(function() {        
        var address = $(this).children("img");        
        $(".detail_sum_big_img img").attr("src",address.attr("src")).attr("alt",address.attr("alt"));        
        $(this).addClass("on").siblings().removeClass("on");        
        return false;
    });
    // aos 효과
    // AOS.init({
    //     duration: 1200,
    // });
   

});