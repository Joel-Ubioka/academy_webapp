 <!-- HEADER SECTION -->
 <?php require "includes/header.php";?>

 <body>
   <!-- TOPBAR AND NAVBAR SECTION -->
   <?php include "includes/header2.php";?>


   <div class="product_columns_heading categories_heading">
     <div class="category_title_container">
       <h1 class="columns_title"> Courses Categories</h1>
     </div>
   </div>


   <!-- FOR ALL CATEGORIES -->
   <div class="category_wrapper">
     <div class="category_details_container">




       <!--  WEB DEVELOPMENT-->
       <section class="related_product_container">


         <div class="product_columns_heading">
           <div class="category_title_container">
             <h1 class="columns_title">Web Development</h1>
             <div class="line_container">
               <div class="line"></div>
             </div>
           </div>
         </div>


         <?php include "includes/product_scroll_category.php";?>
       </section>

       <!-- MOBILE DEVELOPMENT-->
       <section class="related_product_container">
         <div class="product_columns_heading">
           <div class="category_title_container">
             <h1 class="columns_title"> Mobile Development</h1>
             <div class="line_container">
               <div class="line"></div>
             </div>
           </div>
         </div>
         <?php include "includes/product_scroll_category.php";?>
       </section>

       <!-- SOFTWARE DEVELOPMENT-->
       <section class="related_product_container">
         <div class="product_columns_heading">
           <div class="category_title_container">
             <h1 class="columns_title">Software Development</h1>
             <div class="line_container">
               <div class="line"></div>
             </div>
           </div>
         </div>
         <?php include "includes/product_scroll_category.php";?>
       </section>

       <!-- UI & UX-->
       <section class="related_product_container">
         <div class="product_columns_heading">
           <div class="category_title_container">
             <h1 class="columns_title">UI & UX</h1>
             <div class="line_container">
               <div class="line"></div>
             </div>
           </div>
         </div>
         <?php include "includes/product_scroll_category.php";?>
       </section>

       <!-- DATA ANALYSIS-->
       <section class="related_product_container">
         <div class="product_columns_heading">
           <div class="category_title_container">
             <h1 class="columns_title">Data Analysis</h1>
             <div class="line_container">
               <div class="line"></div>
             </div>
           </div>
         </div>
         <?php include "includes/product_scroll.php";?>
       </section>

       <!-- DIGITAL MARKETING-->
       <section class="related_product_container">
         <div class="product_columns_heading">
           <div class="category_title_container">
             <h1 class="columns_title">Digital Marketing</h1>
             <div class="line_container">
               <div class="line"></div>
             </div>
           </div>
         </div>
         <?php include "includes/product_scroll_category.php";?>
       </section>

       <!-- School Hub-->
       <section class="related_product_container">
         <div class="product_columns_heading">
           <div class="category_title_container">
             <h1 class="columns_title">School Hub</h1>
             <div class="line_container">
               <div class="line"></div>
             </div>
           </div>
         </div>
         <?php include "includes/product_scroll_category.php";?>
       </section>

       <!-- Foregin Exam-->
       <section class="related_product_container">
         <div class="product_columns_heading">
           <div class="category_title_container">
             <h1 class="columns_title">Foreign Exam</h1>
             <div class="line_container">
               <div class="line"></div>
             </div>
           </div>
         </div>
         <?php include "includes/product_scroll_category.php";?>
       </section>


     </div>
   </div>

   <!-- FOR SINGLE CATEGORY -->
   <div class="product_columns_heading categories_heading">
     <div class="category_title_container">
       <h1 class="columns_title">Category Name</h1>
     </div>
   </div>
   </div>
   <nav class="product_container">


     <?php include "includes/product_list.php";?>
   </nav>

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