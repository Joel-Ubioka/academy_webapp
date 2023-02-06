// HIDE POPUP WHEN SELECT MORE IS CLICKED
$('.popup_footer').on("click", ".select_more_btn", function(e){
  $(".overlay").hide();
    $('.popup_container').hide();
});


// DISPLAY LOGIN POPUP

$('.popup_body').on("click", ".login_popup", function(e){
  e.preventDefault();
 
  const element = `
  <div class="signup_container">

  <h2>Login</h2>

  <form action="" method="POST" id="signup_form">
  
    <div class="input_container">
      <span class="material-symbols-outlined">
        mail
      </span>
      <input type="email" name="email" class="form_input" placeholder="Email" required>
    </div>
   
    <div class="input_container">
      <span class="material-symbols-outlined">
        lock
      </span>

      <input type="password" name="password" class="form_input" placeholder="Password" required>
      <span class="material-symbols-outlined show_password" title="Show password">
        visibility
      </span>

      <span class="material-symbols-outlined hide_password" title="Hide password">
        visibility_off
      </span>
    </div>
 

    <button name="submit" class="close_btn">Login</button>

  </form>

  <p>You do not have an account? <a href="#" class="signup_popup">Sign Up</a></p>
</div>
                            `;

                            $('.popup_body').html(element);
                            $('.popup_footer').hide();
                           
});

// DISPLAY SIGNUP POPUP WHEN SIGNUP IS CLICKED

$('.popup_body').on("click", ".signup_popup", function(e){
  e.preventDefault();
 
  const element = `
  <div class="signup_container">

  <h2>SignUp</h2>

  <form action="" method="POST" id="signup_form">
    <div class="input_container">
      <span class="material-symbols-outlined">
        person
      </span>
      <input type="text" name="full_name" class="form_input" placeholder="Full Name" required>
    </div>
    <div class="input_container">
      <span class="material-symbols-outlined">
        mail
      </span>
      <input type="email" name="email" class="form_input" placeholder="Email" required>
    </div>
    <div class="input_container">
      <span class="material-symbols-outlined">
        call
      </span>
      <input type="tel" name="phone_number" class="form_input" placeholder="Phone Number" required>
    </div>
    <div class="input_container">
      <span class="material-symbols-outlined">
        lock
      </span>

      <input type="password" name="password" class="form_input" placeholder="Password" required>
      <span class="material-symbols-outlined show_password" title="Show password">
        visibility
      </span>

      <span class="material-symbols-outlined hide_password" title="Hide password">
        visibility_off
      </span>
    </div>
 

    <button name="submit" class="close_btn">Sign Up</button>

  </form>

  <p>Already have an account <a href="#" class="login_popup">Login</a></p>
</div>
                            `;

                            $('.popup_body').html(element);
                            $('.popup_footer').hide();
                           
});



// DISPLAY REG POPUP

$('.popup_footer').on("click", ".proceed_btn", function(){
 
  const element = `
  <div class="signup_container">

  <h2>SignUp</h2>

  <form action="" method="POST" id="signup_form">
    <div class="input_container">
      <span class="material-symbols-outlined">
        person
      </span>
      <input type="text" name="full_name" class="form_input" placeholder="Full Name" required>
    </div>
    <div class="input_container">
      <span class="material-symbols-outlined">
        mail
      </span>
      <input type="email" name="email" class="form_input" placeholder="Email" required>
    </div>
    <div class="input_container">
      <span class="material-symbols-outlined">
        call
      </span>
      <input type="tel" name="phone_number" class="form_input" placeholder="Phone Number" required>
    </div>
    <div class="input_container">
      <span class="material-symbols-outlined">
        lock
      </span>

      <input type="password" name="password" class="form_input" placeholder="Password" required>
      <span class="material-symbols-outlined show_password" title="Show password">
        visibility
      </span>

      <span class="material-symbols-outlined hide_password" title="Hide password">
        visibility_off
      </span>
    </div>
 

    <button name="submit" class="close_btn">Sign Up</button>

  </form>

  <p>Already have an account <a href="#" class="login_popup">Login</a></p>
</div>
                            `;

                            $('.popup_body').html(element);
                            $('.popup_footer').hide();
                           
});



// SHOW RESET PASSWORD POPUP
$('.reset_pass_link').click(function(){
  $(".overlay").show();
  $(".popup_container").css("display", "flex");

  const reset_pass_element = `
  <div class="signup_container">

       <h2>Reset password</h2>

       <form action="" method="POST" id="signup_form">

         <div class="input_container">
           <span class="material-symbols-outlined">
             mail
           </span>
           <input type="email" name="email" class="form_input" placeholder="Email" required>
         </div>

         <button name="submit" class="close_btn">Login</button>

       </form>
              <p>Remember your password <a href="signup">Reset Password</a></p>
     </div>
                            `;

                            $('.popup_body').html(reset_pass_element);
                           
});


//SHOW PASSWORD
$('.show_password').click(function(){
    $(this).prev().attr("type","text");
    $(this).hide();
    $(this).next().show();
});

$('.input_container .hide_password').click(function(){
  $(this).prev().prev().attr("type","password");
  $(this).hide();
  $('.show_password').show();
});


//SHOW PASSWORD FOR POPUPS
$('.popup_body').on("click",".show_password",function(){
  $(this).prev().attr("type","text");
  $(this).hide();
  $(this).next().show();
});

$('.popup_body').on("click",".hide_password",function(){
$(this).prev().prev().attr("type","password");
$(this).hide();
$('.show_password').show();
});


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
$('.add_to_cart_btn, .details_add_to_cart').click(function(e){
  e.preventDefault();
  $(".overlay").show();
  $(".popup_container").css("display", "flex");

  const buttons = `
  <div class="buy_btn_container">
        <div class="buy_btn_content">
          <button class="open_btn proceed_btn">Proceed to buy</button>
        </div>
        <div class="buy_btn_content">
            <button class="close_btn select_more_btn">Select more course</button>
        </div>
  </div>
  `;
//const footer = document.querySelector("#popup_footer");
//footer.innerHTML = buttons;

 $('.popup_footer').html(buttons);
});

//DISPLAY CATEGORY SUBMENU

$('.category_list').hover(function(){
$(this).children('.category_submenu').toggle();
});

//INCREASE OR DECREASE PRODUCT QUANTITY
/*
$('#qty_minus').click(function(){
    let quantity = $('#qty_value').val();
    if(quantity == 0)
    {
        quantity = 0;
    }
    else
    {
      quantity = quantity -1;
    }

    $('#qty_value').val(quantity);
  


});

$('#qty_plus').click(function(){
  let quantity = $('#qty_value').val();
  quantity = parseInt(quantity) +1;

    $('#qty_value').val(quantity);
});
*/

// FOR INCREASE AND DECREASE BUTTONS IN MULTIPLE ROWS

$('.qty_minus').click(function(){
  let quantity = $(this).next().val();
  if(quantity <= 1)
  {
      quantity = 1;
  }
  else
  {
    quantity = quantity -1;
  }

  $(this).next().val(quantity);



});

$('.qty_plus').click(function(){
let quantity = $(this).prev().val();
quantity = parseInt(quantity) +1;

  $(this).prev().val(quantity);
});










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