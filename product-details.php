 <!-- HEADER SECTION -->
 <?php require "includes/header.php";?>

 <body onload="showSlides()">
   <!-- TOPBAR AND NAVBAR SECTION -->
   <?php include "includes/header2.php";?>

   <div class="product_details_container">

     <section class="product_details_content">
       <div class="product_detail_img_container">
         <div class="product_details_image_box">

           <div class="product_details_inner_box">
             <!-- <a href=""><img src="images/admin_panel.jpg" alt=""></a>-->
             <?php include "sliders/details_slider.php";?>
           </div>
         </div>
         <div class="product_img_list">
           <div class="image_list_scroll_container">
             <a href="#" class="product_list_box"> <img src="images/java.png" alt=""></a>
             <a href="#" class="product_list_box"> <img src="images/angular.png" alt=""></a>
             <a href="#" class="product_list_box"> <img src="images/data.webp" alt=""></a>
             <a href="#" class="product_list_box"> <img src="images/design.webp" alt=""></a>

           </div>
         </div>


       </div>
       <div class="product_details_title_container">

         <!-- PRODUCT TITLES PRICE  AND BUTTONS -->
         <div class="product_details_title_content">
           <h1 class="product_details_title">FRONTEND WEB DEVELOPMENT</h1>
           <div class="price_qty_container">
             <div class="product_details_price_box">
               <span>N200,000</span>
             </div>
             <div class="product_details_qty_box">
               <button class="qty_box btn" id="qty_minus">-</button>
               <input type="text" class="qty_box qty" id="qty_value" value="1">
               <button class="qty_box btn" id="qty_plus">+</button>
             </div>
           </div>
           <div class="product_details_btn_container">
             <a href="#"> <button class="close_btn details_add_to_cart">Add to cart</button></a>
             <a href="#"> <button class="open_btn">Enroll Now</button></a>
           </div>

           <!-- PRODUCT SPECIFICATIONS-->
           <div class="product_spec">
             <h3>Course Content</h3>
             <ul>
               <li>HTML 5</li>
               <li>CSS</li>
               <li>JAVASCRIPT</li>
               <li>JQUERY</li>
               <li>ANGULAR</li>
             </ul>
           </div>


           <!-- SOCIAL MEDIA SHARE BUTTONS-->
           <div class="social_container details">
             <h3>Share this course</h3>
             <?php include "includes/social_icons.php";?>
           </div>
           <div>
             <h4> DURATION</h4>
             <p> 3 Months</p>
           </div>


         </div>


       </div>
     </section>


     <!-- PRODUCT DETAILS -->
     <section class="product_desc_container">
       <div class="product_details_text">
         <h2>DESCRIPTION</h2>
         <p>
           Frontend development refers to that area of web development that focuses on what the users see on their end.
           It involves transforming the code built by backend developers into a graphical interface, making sure that
           the data is presented in an easy-to-read and -understand format.

           Without frontend development, all you would see on a website or web application are undecipherable codes
           (unless you’re a developer, too, of course).
         </p>
         <p>
           In this course, you will learn basics of client-side
           web development by showing you the basics of how top
           build web pages with HTML, Cascading Style Sheets,
           JavaScript, Jquery, and Angular Framework. This course is
           set up to be the starting point of learning web development.
         </p>
         <p>
           For the beginner, starting to learn web development can be daunting. In this course, you learn
           step-by-step how to use client-side web development techniques to create immersive web sites.
         </p>
         <p>
           At Morrhtech Solutionswe ensure our Front-End Web Developer have an understanding of the web development
           process from inception to
           deployment. They will also have a good understanding of industry trends and the newest software programs and
           languages. In addition to the technical skills, we also provide excellent problem-solving skills and
           flexibility due to the changing technologies.
         </p>
       </div>
     </section>


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