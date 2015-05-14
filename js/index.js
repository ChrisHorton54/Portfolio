var skills = $("#skills").offset().top;
var about = $("#about").offset().top;
var portfolio = $("#portfolio").offset().top;
var contact = $("#contact").offset().top;

$(document).scroll(function(){
    if($(this).scrollTop() < skills) {   
        
        $('nav').addClass("white");
        
        if($('nav').hasClass("black")){
           $('nav').removeClass("black"); 
        }
        
    } else if (($(this).scrollTop() >= skills) && ($(this).scrollTop() < about)){
        
        $('nav').addClass("black");
        
        if($('nav').hasClass("white")){
           $('nav').removeClass("white"); 
        }
        
    } else if (($(this).scrollTop() >= about) && ($(this).scrollTop() < portfolio)){
        
        $('nav').addClass("white");
        
        if($('nav').hasClass("black")){
           $('nav').removeClass("black"); 
        }
        
    } else if (($(this).scrollTop() >= portfolio) && ($(this).scrollTop() < contact)){
        
        $('nav').addClass("black");
        
        if($('nav').hasClass("white")){
           $('nav').removeClass("white"); 
        }
        
        
    } else if ($(this).scrollTop() >= contact){
        
        $('nav').addClass("white");
        
        if($('nav').hasClass("black")){
           $('nav').removeClass("black"); 
        }
        
    } 
});

$('.scroll-tag').click(function(){
    var activeLink = $(this).attr('href');
    
    $('.nav.navbar-nav li').each(function(i) {
        $('.nav.navbar-nav li').removeClass("active"); 
    });
    
    $('.nav.navbar-nav ' + activeLink + '-tag').addClass("active");
    
    $('html, body').animate({
        scrollTop: $( $(this).attr('href')).offset().top
    }, 1500);
    return false;
});