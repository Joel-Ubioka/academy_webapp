 <!-- HEADER SECTION -->
 <?php require "includes/header.php";?>

 <body>
   <!-- TOPBAR AND NAVBAR  SECTION -->
   <?php include "includes/header2.php";?>

   <div class="columns_container cart_wrapper">



   </div>




   <!--
     <div class="columns_container cart_wrapper">

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
               <h3>Course</h3>
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

             <div class="column_content">
               <div class="column_item img_desc">
                 <div class="column_img">
                   <img src="images/laravel.png" alt="">
                 </div>
                 <div class="column_desc">
                   <p>Courses Name</p>
                 </div>
               </div>
               <div class="column_item">
                 <p>N200,000</p>
               </div>
               <div class="column_item">
                 <div class="product_details_qty_box">
                   <button class="qty_box btn qty_minus">-</button>
                   <input type="text" class="qty_box qty qty_value" value="1">
                   <button class="qty_box btn qty_plus">+</button>
                 </div>
               </div>
               <div class="column_item">
                 <p>N200,000</p>
               </div>
               <div class="column_item">
                 <button class="product_remove_btn">
                   <span class="material-symbols-outlined">close</span>
                 </button>
               </div>
             </div>

             <div class="column_content">
               <div class="column_item img_desc">
                 <div class="column_img">
                   <img src="images/laravel.png" alt="">
                 </div>
                 <div class="column_desc">
                   <p>Courses Name</p>
                 </div>
               </div>
               <div class="column_item">
                 <p>N200,000</p>
               </div>
               <div class="column_item">
                 <div class="product_details_qty_box">
                   <button class="qty_box btn qty_minus">-</button>
                   <input type="text" class="qty_box qty qty_value" value="1">
                   <button class="qty_box btn qty_plus">+</button>
                 </div>
               </div>
               <div class="column_item">
                 <p>N200,000</p>
               </div>
               <div class="column_item">
                 <button class="product_remove_btn">
                   <span class="material-symbols-outlined">close</span>
                 </button>
               </div>
             </div>

             <div class="column_content">
               <div class="column_item img_desc">
                 <div class="column_img">
                   <img src="images/laravel.png" alt="">
                 </div>
                 <div class="column_desc">
                   <p>Courses Name</p>
                 </div>
               </div>
               <div class="column_item">
                 <p>N200,000</p>
               </div>
               <div class="column_item">
                 <div class="product_details_qty_box">
                   <button class="qty_box btn qty_minus">-</button>
                   <input type="text" class="qty_box qty qty_value" value="1">
                   <button class="qty_box btn qty_plus">+</button>
                 </div>
               </div>
               <div class="column_item">
                 <p>N200,000</p>
               </div>
               <div class="column_item">
                 <button class="product_remove_btn">
                   <span class="material-symbols-outlined">close</span>
                 </button>
               </div>
             </div>

             <div class="column_content">
               <div class="column_item img_desc">
                 <div class="column_img">
                   <img src="images/laravel.png" alt="">
                 </div>
                 <div class="column_desc">
                   <p>Courses Name</p>
                 </div>
               </div>
               <div class="column_item">
                 <p>N200,000</p>
               </div>
               <div class="column_item">
                 <div class="product_details_qty_box">
                   <button class="qty_box btn qty_minus">-</button>
                   <input type="text" class="qty_box qty qty_value" value="1">
                   <button class="qty_box btn qty_plus">+</button>
                 </div>
               </div>
               <div class="column_item">
                 <p>N200,000</p>
               </div>
               <div class="column_item">
                 <button class="product_remove_btn">
                   <span class="material-symbols-outlined">close</span>
                 </button>
               </div>
             </div>


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
                 <p>N200,000</p>
               </div>
               <div class="summary_list last">
                 <p>Tax</p>
                 <p>N1500</p>
               </div>
               <div class="summary_total">
                 <p>Total</p>
                 <p>N200,000</p>
               </div>
               <button class="close_btn">Proceed to checkout</button>
             </div>
           </div>
         </div>
       </div>
     </div>

   </div>
    -->


   <!-- PRODUCT YOU MAY ALSO LIKE ( SROLL CONTAINER ) -->
   <section class="related_product_container">
     <h2>You may also like</h2>
     <?php include "includes/product_scroll.php";?>
   </section>




   <!-- FOOTER SECTION -->
   <?php require "includes/footer.php";?>
   <nav class="footer_container"></nav>






   <!-- AOS Script -->
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
   AOS.init({
     offset: 200,
     duration: 1000,
   });
   </script>

 </body>

 </html>