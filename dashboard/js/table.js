// DISPLAY OF TABLE OPTION DROP DOWN
$('.dashboard_container').on("click", ".option_btn", function(){
  $(this).parent().parent().siblings().children().children('.option_dropdown').slideUp();
$(this).next().slideToggle();
});