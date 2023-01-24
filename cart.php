 <!-- HEADER SECTION -->
 <?php require "includes/header.php";?>

 <body onload="showSlides()">
   <!-- TOPBAR AND NAVBAR SECTION -->
   <?php include "includes/header2.php";?>

   <div class="columns_container">
     <div class="column_inner_container">
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
           <div class="column_item">
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
             Quantity
           </div>
           <div class="column_item">
             N200,000
           </div>
           <div class="column_item">
             <button class="product_remove"></button>
           </div>
         </div>
       </div>


     </div>
     <div class="column_inner_container">

     </div>

   </div>


   <!-- PRODUCT YOU MAY ALSO LIKE ( SROLL CONTAINER ) -->
   <section class="related_product_container">
     <h2>Related course</h2>
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