 <!-- HEADER SECTION -->
 <?php
require "includes/header.php";
require "url/base_url.php";
include "popups/popup.php";
?>


 <body>

   <div class="order_container">

   </div>


   <script>
   $(document).ready(function() {

     var loading = `<div class="loading_container">
      <div class="loading_content">
        <img src="<?php echo $base_url; ?>loading/loading.gif" alt="loading...">
      </div>
      </div>`;

     $('.order_container').html(loading);
     $('.loading_container').css('display', 'flex');

     const ordered_products = localStorage.getItem("products_in_cart");
     const payment_method = localStorage.getItem('payment_method');
     $.ajax({
       method: "POST",
       data: {
         "ordered_products": ordered_products,
         "payment_method": payment_method
       },
       url: "<?php echo $base_url; ?>dashboard/ajax_functions/order_complete_ajax.php",
       success: function(response) {
         response = "Successful";
         if (response == "Order empty") {
           window.location = "<?php echo $base_url; ?>";
         } else {
           localStorage.setItem("inCart", 0);
           localStorage.removeItem('product_in_cart');

           let msg = `
                  <div class="image_box">
                    <img src="<?php echo $base_url; ?>images/good.gif">
                  </div>

                    <h2 style='color:var(--success_color_shade); text-align: center'>Successfully Ordered</h2>
                  <p> Click the button below to chat us on whatsapp or call us on 08035817907 for delivery!</p>

                    `;
           const button = `
                                <a href="#"><button class="close_btn complete_order_btn">Chat Us</button></a>
                                `;

           $('.loading_container').hide();
           $('.popup_container').css("display", "flex");
           $(".popup_box").css("flex-basis", "500px");
           $(".popup_head").hide();

           $('.popup_body').html(msg);
           $('.popup_footer').html(button);


         }




       }
     });
   });
   </script>

   <!-- FOOTER SECTION -->
   <?php //require "includes/footer.php";?>
   <!-- <nav class="footer_container"></nav> -->
 </body>

 </html>