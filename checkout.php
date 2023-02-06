 <!-- HEADER SECTION -->
 <?php require "includes/header.php";?>

 <body>
   <!-- TOPBAR AND NAVBAR SECTION -->
   <?php include "includes/header2.php";?>

   <div class="columns_container">

     <div class="product_columns_heading">
       <div class="category_title_container">
         <h1 class="columns_title">Checkout</h1>
         <div class="line_container">
           <div class="line"></div>
         </div>
       </div>
     </div>

     <div class="column_wrapper">
       <div class="column_inner_container">
         <p>Select Payment Method</p>
         <div class=" checkout payment">


           <form action="" class="radio_form">
             <div class="input_column">
               <input type="radio" name="payment_method" id="bank_transfer">
               <label for="bank_transfer" class="payment_method">Bank Transfer/Deposit</label>
             </div>

             <div class="input_column">
               <input type="radio" name="payment_method" id="credit_card">
               <label for="credit_card" class="payment_method">Credit/Debit Card</label>
             </div>

           </form>




         </div>




         <div class="column_body">
           <div class="category_title_container">
             <h2 class="columns_title order_details">Order Details</h2>
           </div>

           <div class="column_content checkout">
             <div class="column_img">
               <img src="images/laravel.png" alt="">
             </div>
             <div class="column_desc">
               <p>Courses Name</p>
             </div>

             <div class="column_item">
               <p>N200,000</p>
             </div>
           </div>

           <div class="column_content checkout">
             <div class="column_img">
               <img src="images/laravel.png" alt="">
             </div>
             <div class="column_desc">
               <p>Courses Name</p>
             </div>

             <div class="column_item">
               <p>N200,000</p>
             </div>
           </div>

           <div class="column_content checkout">
             <div class="column_img">
               <img src="images/laravel.png" alt="">
             </div>
             <div class="column_desc">
               <p>Courses Name</p>
             </div>

             <div class="column_item">
               <p>N200,000</p>
             </div>
           </div>

           <div class="column_content checkout">
             <div class="column_img">
               <img src="images/laravel.png" alt="">
             </div>
             <div class="column_desc">
               <p>Courses Name</p>
             </div>

             <div class="column_item">
               <p>N200,000</p>
             </div>
           </div>

         </div>


       </div>
       <div class="column_inner_container">
         <div class="summary_container">
           <div class="product_columns_heading">
             <div class="summary_details_container">
               <div class="category_title_container summary">
                 <h2 class="columns_title">Summary</h2>
               </div>
               <div class="summary_list last">
                 <p>Original Cost</p>
                 <p>N200,000</p>
               </div>
               <div class="summary_total">
                 <p>Total Cost</p>
                 <p>N200,000</p>
               </div>
               <button class="close_btn">Complete Payment</button>
             </div>
           </div>
         </div>
       </div>
     </div>

   </div>

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