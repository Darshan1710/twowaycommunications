$(document).ready(function(){
  $(".view_more").mouseover(function(){
    $('.view_more').next('p').css({"color":"red"});
    //$(this).find('p').css({"color":"red"});
  });
  $(".view_more").mouseout(function(){
    $(this).next('span').slideUp("slow");
  });
});