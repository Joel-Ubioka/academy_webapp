
var base_url = "http://localhost/online_shop/";

var loading = `<div class="loading_container">
<div class="loading_content">
  <img src="${base_url}loading/loading.gif" alt="loading...">
</div>
</div>`;

// SHOW SEARCH INPUT
$('.search_icon').click(function(){
$('.search_container').toggle();
});





// DISPLAY LOGIN POPUP

$('.popup_body').on("click", ".login_popup", function(e){
  e.preventDefault();
 
  const element = `
  <div class="signup_container">

  <h2>Login</h2>

  <form action="ajax_functions/login_customer_ajax.php" method="POST" id="signup_form" class="customer_login_form">
  
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

  <form action="ajax_functions/register_customer_ajax.php" method="POST" id="signup_form" class="reg_form">
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
      <input type="email" name="email" class="form_input" placeholder="Email" id="email" required>
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

$('.popup_footer').on("click", ".proceed_btn", function(e){
  e.preventDefault();

  const customer_email = localStorage.getItem('customer_email');

// console.log(customer_email);
// return;

  if(customer_email !== null)
  {
    window.location = base_url+"checkout";
  }
  else{
    
 
  const element = `
  <div class="signup_container">

  <h2>SignUp</h2>

  <form action="ajax_functions/register_customer_ajax" method="POST" id="signup_form" class="reg_form">
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
      <input type="email" name="email" class="form_input" placeholder="Email" id="email" required>
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
  }


                           
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


//INSERT FUNCTION
function insert()
{

  $('.signup_container').on('submit','.insert_form', function(e){
    e.preventDefault();
    const that = this;

    $(that).children('button').attr('disabled', true);

    $(this).ajaxSubmit({
  
  success: function(response){

    $('.toast_wrapper').fadeIn();
     

    if(response !== "Successfully registered")
    {
      $('.toast_container').addClass('success');
    }
    else{
      $('.toast_container').removeClass('danger');
      that.reset();
      
    }
    $('.toast_msg span').html(response);

      setTimeout(function(){
        $('.toast_wrapper').fadeOut();
      
      },5000)

    $(that).children('button').attr('disabled', false);
     
      
  }
    });
  });


}
insert()

//INSERT FUNCTION FOR CUSTOMER REG
function customer_reg()
{

  $('.popup_body').on('submit','.reg_form', function(e){
    e.preventDefault();
    const that = this;

    const customer_email = $('#email').val();

    $(that).children('button').attr('disabled', true);

    $(this).ajaxSubmit({
  
  success: function(response){

    $('.toast_wrapper').fadeIn();
     

    if(response !== "Successful! loading to checkout...")
    {
      $('.toast_container').addClass('success');
      setTimeout(function(){
        $('.toast_wrapper').fadeOut();
      
      },5000)
    }
    else{
      localStorage.setItem('customer_email', customer_email);

      $('.toast_container').removeClass('danger');
      that.reset();
      window.location = base_url+"checkout";
      
    }
    $('.toast_msg span').html(response);

    $(that).children('button').attr('disabled', false);
     
      
  }
    });
  });


}
customer_reg()

//LOGIN FUNCTION
function login()
{

  $('.signup_container').on('submit','.login_form', function(e){
    e.preventDefault();
    const that = this;

    $(that).children('button').attr('disabled', true);

    $(this).ajaxSubmit({
  
  success: function(response){

    $('.toast_wrapper').fadeIn();
     

    if(response !== "Logging in, please wait...")
    {
      $('.toast_container').addClass('success');
       setTimeout(function(){
        $('.toast_wrapper').fadeOut();
      
      },5000)
    }
    else{
      $('.toast_container').removeClass('danger');
      that.reset();
      window.location = base_url+"dashboard";
      
    }
    $('.toast_msg span').html(response);
    $(that).children('button').attr('disabled', false);
     
      
  }
    });
  });


}
login()

//LOGIN FUNCTION
function customer_login()
{

  $('.popup_body').on('submit','.customer_login_form', function(e){
    e.preventDefault();
    const that = this;

    const customer_email = $('#email').val();

    $(that).children('button').attr('disabled', true);

    $(this).ajaxSubmit({
  
  success: function(response){

    $('.toast_wrapper').fadeIn();
     

    if(response !== "Logging in, please wait...")
    {
      $('.toast_container').addClass('success');
       setTimeout(function(){
        $('.toast_wrapper').fadeOut();
      
      },5000)
    }
    else{
      localStorage.setItem('customer_email', customer_email);
      $('.toast_container').removeClass('danger');
      that.reset();
      window.location = base_url+"checkout";
      
    }
    $('.toast_msg span').html(response);
    $(that).children('button').attr('disabled', false);
     
      
  }
    });
  });


}
customer_login();


   // FUNCTION FOR UPDATING A PAGE
   function update_page()
   {
   
   
   
        $('.dashboard_container').on('submit','.form_edit', function(e){
         e.preventDefault();
         const that = this;
   
         $(that).children('button').attr('disabled', true);
   
         $(this).ajaxSubmit({
       uploadProgress: function(event, position, total, percentComplete){
         $('.progress_container').css("display","flex");
         $('.progress_bar').css('width', percentComplete+"%")
         $('.progress_text').text(percentComplete+"%");
   
       },
       success: function(response){
   
         $('.toast_wrapper').fadeIn();
         if(response !== "Successfully updated!")
         {
           $('.toast_container').addClass('danger');
         }
         else{
           $('.toast_container').removeClass('danger');
        
           that.reset();
           $('#file_text').text('Select category image');
   
           load_edited_page()
         }
         $('.toast_msg span').html(response);
   
           setTimeout(function(){
             $('.toast_wrapper').fadeOut();
            $('.progress_container').hide();
           },5000)
   
         $(that).children('button').attr('disabled', false);
          
           
       }
         });
       });
   
   
   
   }
   
   update_page();


// SEARCH FOR PRODUCTS
$('#search').on('keyup', function(){

  $('.dashboard_container').html(loading);
  $('.loading_container').css('display','flex');

  const search = $(this).val();
  $.ajax({
    method: "POST",
    data: {"search": search},
    url: base_url+"ajax_functions/search_ajax.php",
    success: function(response){
      $('.search_dropdown').show();
      $('.search_dropdown_inner').html(response);
    }
  });
});





