// CLOSE POPUP
$('.close_popup').click(function(){
  $(".popup_container, .overlay").hide();
});

// HIDE POPUP WHEN SELECT MORE IS CLICKED
$('.popup_footer').on("click", ".select_more_btn", function(e){
  $(".overlay").hide();
    $('.popup_container').hide();
});