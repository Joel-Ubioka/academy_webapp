/* TESTIMONIALS SCRIPT */

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

/* END OF TESTIMONIALS */

// DISPLAY CATEGORY DROP DOWN MENU

$('.category_menu_container').click(function(){
  $(this).children('.category_list_container').slideToggle();
 // $(this).siblings('.category_list_container').slideToggle();
 // $('.category_list_container').toggle();
});

// CLOSE POPUP
$('.close_popup').click(function(){
    $(".popup_container, .overlay").hide();
});

// ADD TO CART
$('.add_to_cart_btn').click(function(){
  $(".overlay").show();
  $(".popup_container").css("display", "flex");

  const buttons = `
  <div class="buy_btn_container">
        <div class="buy_btn_content">
          <button class="open_btn">Proceed to buy</button>
        </div>
        <div class="buy_btn_content">
            <button class="close_btn">Select more course</button>
        </div>
  </div>
  `;
  $('.popup_footer').html(buttons);
});

//DISPLAY CATEGORY SUBMENU

$('.category_list').hover(function(){
$(this).children('.category_submenu').toggle();
});