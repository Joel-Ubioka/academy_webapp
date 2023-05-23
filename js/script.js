
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

  <form action="${base_url}ajax_functions/login_customer_ajax.php" method="POST" id="signup_form" class="customer_login_form">
  
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

  <form action="${base_url}ajax_functions/register_customer_ajax.php" method="POST" id="signup_form" class="reg_form">
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

  <form action="${base_url}ajax_functions/register_customer_ajax" method="POST" id="signup_form" class="reg_form">
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



// ADD TO CART FUNCTION
function add_to_cart(product_name, product_price, product_image, product_tag, quantity)
{

// CREATE PRODUCT OBJECT
let product = {
  name: product_name,
  price: product_price,
  image: product_image,
  tag: product_tag,
  quantity: quantity
}

let products_in_cart = localStorage.getItem('products_in_cart');
products_in_cart = JSON.parse(products_in_cart);

if(products_in_cart != null)
{
    if(products_in_cart[product.tag] == undefined)
    {
      products_in_cart = {
        ...products_in_cart, 
        [product.tag]: product
      }
var inCart = localStorage.getItem('inCart');
    inCart = parseInt(inCart) + 1;
    localStorage.setItem('incart', inCart);
    }

    

   products_in_cart[product.tag].quantity = quantity;

}
else
{
  var inCart = 1;
  //product.inCart = 1;
  //product.quantity = quantity;
  localStorage.setItem('inCart', inCart);

  products_in_cart = {
    [product.tag]: product
  }
  
}

localStorage.setItem('products_in_cart', JSON.stringify(products_in_cart));


$('.toast_wrapper').fadeIn();
$('.toast_msg span').html("Successfully added to cart!");

  setTimeout(function(){
    $('.toast_wrapper').fadeOut();
   },3000)


$('.cart').css("display", "flex");
$('.cart').text(inCart);

}


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


// GET PRODUCT DATA
const product_name = $(this).attr('data-product-name');
const product_price = $(this).attr('data-product-price');
const product_image = $(this).attr('data-product-image');
const product_tag = $(this).attr('data-product-tag');

// CREATE PRODUCT OBJECT
let product = {
  name: product_name,
  price: product_price,
  image: product_image,
  tag: product_tag,
  quantity: 0,
  inCart: 0
}

let products_in_cart = localStorage.getItem('products_in_cart');
products_in_cart = JSON.parse(products_in_cart);

if(products_in_cart != null)
{
    if(products_in_cart[product.tag] == undefined)
    {
      products_in_cart = {
        ...products_in_cart, 
        [product.tag]: product
      }
var inCart = localStorage.getItem('inCart');
    inCart = parseInt(inCart) + 1;
    localStorage.setItem('incart', inCart);
    }

    

    products_in_cart[product.tag].quantity += 1;

}
else
{
  var inCart = 1;
  product.inCart = 1;
  product.quantity = 1;
  localStorage.setItem('inCart', inCart);

  products_in_cart = {
    [product.tag]: product
  }
  
}

localStorage.setItem('products_in_cart', JSON.stringify(products_in_cart));


$('.toast_wrapper').fadeIn();
$('.toast_msg span').html("Successfully added to cart!");

  setTimeout(function(){
    $('.toast_wrapper').fadeOut();
   },3000)


$('.cart').css("display", "flex");
$('.cart').text(inCart);

display_cart();

});


// AUTOMATICALLY LOAD IN CART
$(document).ready(function(){
  var inCart = localStorage.getItem('inCart');

  if(inCart !== null)
  {
    $('.cart').css("display", "flex");
    $('.cart').text(inCart);
  }
  
});


function display_cart()
{
  let cart_items = localStorage.getItem('products_in_cart');
  cart_items = JSON.parse(cart_items);

  let inCart = localStorage.getItem('inCart');

  let product_container = document.querySelector('.cart_wrapper');
  //let popup_container = document.querySelector('.popup_body');

  if(cart_items)
  {
      if(product_container )
      {

        let output = "";

        output += `
        
        <div class="product_columns_heading">
        <div class="category_title_container">
          <h1 class="columns_title">Shopping Cart</h1>
          <div class="line_container">
            <div class="line"></div>
          </div>
        </div>
      </div>
 
      <div class="column_wrapper">
        <div class="column_inner_container">
          <div class="column_wrap">
            <div class="column_heading">
              <div class="heading_item">
                <h3>Product</h3>
              </div>
              <div class="heading_item">
                <h3>Price</h3>
              </div>
              <div class="heading_item">
                <h3>Quantity</h3>
              </div>
              <div class="heading_item">
                <h3>Total</h3>
              </div>
              <div class="heading_item">
                <h3>Remove</h3>
              </div>
            </div>
 
            <div class="column_body">
        
        `;

        var total = 0;
        Object.values(cart_items).map(item =>{

          var price = new Intl.NumberFormat().format(item.price);
          var sub_total = item.quantity * parseInt(item.price);

          total += parseInt(sub_total);

          sub_total = new Intl.NumberFormat().format(sub_total);


          output += `
          
          <div class="column_content">
          <div class="column_item img_desc">
            <div class="column_img">
              <img src="${base_url}images/products/${item.image}" alt="">
            </div>
            <div class="column_desc">
              <p>${item.name}</p>
            </div>
          </div>
          <div class="column_item">
            <p>&#8358;${price}</p>
          </div>
          <div class="column_item">
            <div class="product_details_qty_box">
              <button class="qty_box btn qty_minus qty_btn" data-type="minus" data-product-tag="${item.tag}">-</button>
              <input type="text" class="qty_box qty qty_value" value="${item.quantity}">
              <button class="qty_box btn qty_plus qty_btn" data-type="plus" data-product-tag="${item.tag}">+</button>
            </div>
          </div>
          <div class="column_item">
            <p>&#8358;${sub_total}</p>
          </div>
          <div class="column_item">
            <button class="product_remove_btn">
              <span class="material-symbols-outlined">close</span>
            </button>
          </div>
        </div>

          `

        });


        let total_cost = new Intl.NumberFormat().format(total);

    output += `

        </div>
    </div>

    </div>
    <div class="column_inner_container">
      <div class="coupon_container">
        <form action="" id="coupon_form">
          <input type="text" class="form_input" id="coupon" placeholder="Coupon code">
          <button id="coupon_btn" class="close_btn">Apply coupon</button>
        </form>
      </div>
      <div class="summary_container">
        <div class="product_columns_heading">
          <div class="category_title_container">
            <h2 class="columns_title">Cart Summary</h2>
            <div class="line_container">
              <div class="line"></div>
            </div>
          </div>
          <div class="summary_details_container">
            <div class="summary_list">
              <p>Subtotal</p>
              <p>&#8358;${total_cost}</p>
            </div>
            <div class="summary_list last">
              <p>Shipping</p>
              <p>&#8358;0.00</p>
            </div>
            <div class="summary_total">
              <p>Total</p>
              <p>&#8358;${total_cost}</p>
            </div>
            <button class="close_btn">Proceed to checkout</button>
          </div>
        </div>
      </div>
    </div>
    </div>


    `;

        product_container.innerHTML = output;
        // popup_container.innerHTML = output;

      }
  }
  else
  {
      if(product_container)
      {
        product_container.innerHTML = "There is no item in the cart!";
      }
  }
}


display_cart();





//DISPLAY CATEGORY SUBMENU

$('.category_list').hover(function(){
$(this).children('.category_submenu').toggle();
});

//INCREASE OR DECREASE PRODUCT QUANTITY FOR DETAILS PAGE
$('.detail_qty_btn').click(function(e){
  e.preventDefault();

  const btn_type = $(this).attr('data-type');

  let quantity = $('#qty_value').val();


  if(btn_type == "minus")
  {
        if(quantity == 0)
      {
        quantity = 0;
      }
      else
      {
        quantity = quantity -1
      }
  }
  else{
    quantity = parseInt(quantity) + 1;
  }

  

 

  $('#qty_value').val(quantity);


  // GET PRODUCT DATA
  quantity = $('#qty_value').val();
const product_name = $(this).attr('data-product-name');
const product_price = $(this).attr('data-product-price');
const product_image = $(this).attr('data-product-image');
const product_tag = $(this).attr('data-product-tag');

localStorage.setItem('current_prod_tag', product_tag);


add_to_cart(product_name, product_price, product_image, product_tag, quantity)

});




//AUTOMATICALLY LOAD QUANTITY
$(document).ready(function(){
  let products_in_cart = localStorage.getItem('products_in_cart');
products_in_cart = JSON.parse(products_in_cart);

let prod_tag = localStorage.getItem('current_prod_tag');

if(products_in_cart != null && prod_tag !=null)
{
   
  const quantity = products_in_cart[prod_tag].quantity;

  $('#qty_value').val(quantity);
}



});



// FOR INCREASE AND DECREASE BUTTONS IN CARTS

$('.cart_wrapper').on("click", ".qty_btn", function(){
 

  const prod_tag = $(this).attr('data-product-tag');
  const btn_type = $(this).attr('data-type');


  // INCREASE PRODUCT QUANTITY

  let products_in_cart = localStorage.getItem('products_in_cart');
  products_in_cart = JSON.parse(products_in_cart);

  if(products_in_cart != null)
{
    let qty = products_in_cart[prod_tag].quantity;

    if(btn_type == "minus")
    {
          if(qty > 1)
      {
        products_in_cart[prod_tag].quantity -= 1;
      }
    }

    else
    {
      products_in_cart[prod_tag].quantity += 1;
    }

  

    localStorage.setItem('products_in_cart', JSON.stringify(products_in_cart))
    display_cart();

  }


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

  $('.search_dropdown_inner').html(loading);
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





