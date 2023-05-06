 <!-- HEADER SECTION -->
 <?php require "includes/header.php";?>

 <body onload="showSlides(0)">

   <!-- TOPBAR AND NAVBAR SECTION -->
   <?php include "includes/header2.php";?>

   <!-- MAIN DESCRIPTION SECTION -->
   <nav class="main_desc">
     <div class="slider_container">
       <div class="slider_inner_container">

         <?php include "sliders/slider.php";?>


       </div>

     </div>
     <div class="advert_container">
       <div class="advert_inner_container">
         <div class="advert_content">
           <img src="images/fancy.jpg" alt="">
           <div class="overlay_container"></div>
           <div class="content_container">

             <h1 class="product_title">FURNITURES</h1>
             <!--<p class="product_desc">Learn to build websites that works seamlessly on all devices</p>-->
             <a href=""><button class="close_btn">Shop Now</button></a>
           </div>

         </div>
         <div class="advert_content">
           <img src="images/utencils.jpg" alt="">
           <div class="overlay_container"></div>
           <div class="content_container">

             <h1 class="product_title">KITCHEN UTENCILS</h1>
             <!-- <p class="product_desc">Learn what earns. Inspirational designs, illustrations, and graphic elements</p>-->
             <a href=""><button class="close_btn">Shop Now</button></a>
           </div>

         </div>
       </div>
     </div>
   </nav>


   <!-- SERVICE SECTION -->
   <nav class="service_desc">
     <div class="service_container" data-aos="fade-up">
       <div class="service_icon">
         <span class="material-symbols-outlined">check</span>
       </div>
       <div class="service_text">Quality Products</div>
     </div>
     <div class=" service_container" data-aos="fade-up">
       <div class="service_icon">
         <span class="material-symbols-outlined">transportation</span>
       </div>
       <div class="service_text">Free Shipping</div>
     </div>
     <div class="service_container" data-aos="fade-up">
       <div class="service_icon">
         <span class="material-symbols-outlined">home_work</span>
       </div>
       <div class="service_text"> 14 Days Return</div>
     </div>
     <div class="service_container" data-aos="fade-up">
       <div class="service_icon">
         <span class="material-symbols-outlined">contact_support</span>
       </div>
       <div class="service_text">24/7 support</div>
     </div>
   </nav>

   <!-- CATEGORIES SECTION -->
   <nav class="categories_container">

     <div class="category_title_container">
       <h1 class="category_heading">Categories</h1>
       <div class="line_container">
         <div class="line"></div>
       </div>
     </div>
     <div class="category_content_container">



       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/web1.jpeg" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Web Development</h4>
           <small>Frontend, Backend or Fullstack</small>
         </div>

       </a>


       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/mobile.jpg" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Mobile Development</h4>
           <small>With Flutter</small>
         </div>

       </a>


       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/softwaredev.jpg" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Software Development</h4>
           <small>With Angular & Laravel or Nodejs</small>
         </div>

       </a>


       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/uiux.webp" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">UI & UX</h4>
           <small>With Figma</small>
         </div>

       </a>


       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/graphics.webp" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Data Analysis</h4>
           <small>With Python, R, SQL</small>
         </div>

       </a>


       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/digitalmarketing.webp" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Digital Marketing</h4>
           <small>Online Marketing</small>
         </div>

       </a>


       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/data.webp" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">School Hub</h4>
           <small>Coding, Robotics, Python</small>
         </div>

       </a>


       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/freelance.png" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Foreign Exams</h4>
           <small>IELTS, TOEFL, SELT, SAT, GMAT, GRE</small>
         </div>

       </a>





     </div>
   </nav>

   <!-- FEATURED PRODUCTS SECTION -->
   <nav class="product_container">
     <div class="category_title_container">
       <h1 class="category_heading">Featured Products</h1>
       <div class="line_container">
         <div class="line"></div>
       </div>
     </div>

     <?php include "includes/product_list.php";?>
   </nav>

   <!-- ADVERT SECTION -->
   <nav class="advert_section">
     <div class="advert_box_container">
       <div class="advert_overlay_container"> </div>
       <div class="advert_img_box">
         <img src="images/design.webp" alt="">
       </div>

       <div class="advert_content_container">
         <a href="" class="advert_box">
           <h3>SAVE 20%</h3>
           <h1>Special Offer</h1>
           <button class="close_btn">Book a Class</button>
         </a>
       </div>
     </div>

     <div class="advert_box_container">
       <div class="advert_overlay_container"> </div>
       <div class="advert_img_box"><img src="images/web1.jpeg" alt="">
       </div>

       <div class="advert_content_container">
         <a href="" class="advert_box">
           <h3>SAVE 20%</h3>
           <h1>Special Offer</h1>
           <button class="close_btn">Book a Class</button>
         </a>
       </div>
     </div>



   </nav>

   <!-- RECENT PRODUCTS SECTION -->
   <nav class="product_container">
     <div class="category_title_container">
       <h1 class="category_heading">Recent Products</h1>
       <div class="line_container">
         <div class="line"></div>
       </div>
     </div>

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