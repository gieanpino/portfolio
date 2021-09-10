$(document).ready(function(){
 var altura=$('.menumain').offset().top;
 $(window).on('scroll',function(){
     if($(window).scrollTop()> altura){
         $('.menumain').addClass('menu-fijo');
     }else{
         $('.menumain').addClass('menumain');
         $('.menumain').removeClass('menu-fijo');
     }
 });
 


})