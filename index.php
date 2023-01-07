 <!-- HEADER SECTION -->
 <?php require "includes/header.php";?>

 <body>
   <!-- TOP BAR SECTION -->
   <section class="top_bar">
     <div class="logo_container"><img src="images/logo.png" alt=""></div>
     <div class="search_container">
       <form action="" id="search_form">
         <input type="text" class="form_input" name="search" id="search" placeholder="Search for products">
         <button name="search_btn" class="search_btn">Search</button>
       </form>
     </div>
     <div class="contact_container">
       <span class="material-symbols-outlined phone_icon">call</span>
       +234 704 928 719
     </div>
   </section>

   <!-- NAVBAR SECTION -->
   <nav class="nav_bar">
     <div class="category_menu_container">

       <div class="category_content">
         <span class="material-symbols-outlined ">menu</span>
         Categories
       </div>
       <span class="material-symbols-outlined ">expand_more</span>


     </div>
     <div class="nav_icons_container"></div>
     <div class="nav_icons">
       <a href="#">
         <span class="material-symbols-outlined">search</span>
       </a>
       <a href="#">
         <span class="material-symbols-outlined">favorite</span>
         <div class="item_container">0</div>
       </a>

       <a href="#">
         <span class="material-symbols-outlined">shopping_cart</span>
         <div class="item_container">0</div>
       </a>
     </div>
   </nav>

   <!-- MAIN DESCRIPTION SECTION -->
   <nav class="main_desc">
     <div class="slider_container">
       <div class="slider_inner_container">
         <img src="images/products1.png" alt="">
         <div class="overlay_container"></div>
         <div class="content_container">

           <h1 class="product_title">MORRHTECH SOLUTIONS</h1>
           <p class="product_desc">Learning to code is the new literacy</p>
           <a href=""><button class="close_btn">Book a Class</button></a>
         </div>

       </div>

     </div>
     <div class="advert_container">
       <div class="advert_inner_container">
         <div class="advert_content">
           <img src="images/adverts1.png" alt="">
           <div class="overlay_container"></div>
           <div class="content_container">

             <h1 class="product_title">WEB DEVELOPMENT</h1>
             <p class="product_desc">Learn to build websites that works seamlessly on all devices</p>
             <a href=""><button class="close_btn">Book a Class</button></a>
           </div>

         </div>
         <div class="advert_content">
           <img src="images/adverts2.png" alt="">
           <div class="overlay_container"></div>
           <div class="content_container">

             <h1 class="product_title">UI and UX</h1>
             <p class="product_desc">Learn what earns. Inspirational designs, illustrations, and graphic elements</p>
             <a href=""><button class="close_btn">Book a Class</button></a>
           </div>

         </div>
       </div>
     </div>
   </nav>


   <!-- SERVICE SECTION -->
   <nav class="service_desc">
     <div class="service_container">
       <div class="service_icon">
         <span class="material-symbols-outlined">cast_for_education</span>
       </div>
       <div class="service_text">Skilled Instructors</div>
     </div>
     <div class="service_container">
       <div class="service_icon">
         <span class="material-symbols-outlined">school</span>
       </div>
       <div class="service_text">Physical / Online Classes</div>
     </div>
     <div class="service_container">
       <div class="service_icon">
         <span class="material-symbols-outlined">home_work</span>
       </div>
       <div class="service_text"> Projects</div>
     </div>
     <div class="service_container">
       <div class="service_icon">
         <span class="material-symbols-outlined">contact_support</span>
       </div>
       <div class="service_text">24/7 support</div>
     </div>
   </nav>

   <!-- CATEGORIES SECTION -->
   <nav class="categories_container">

     <div class="category_title_container">
       <h1 class="category_heading">Courses Categories</h1>
       <div class="line_container">
         <div class="line"></div>
       </div>
     </div>
     <div class="category_content_container">



       <a href="#" class="category_box">
         <div class="category_img"><img src="images/web1.jpeg" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Web Development</h4>
           <small>Frontend, Backend or Fullstack</small>
         </div>

       </a>


       <a href="#" class="category_box">
         <div class="category_img"><img src="images/mobile.jpg" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Mobile Development</h4>
           <small>With Flutter</small>
         </div>

       </a>


       <a href="#" class="category_box">
         <div class="category_img"><img src="images/softwaredev.jpg" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Software Development</h4>
           <small>With Angular & Laravel or Nodejs</small>
         </div>

       </a>


       <a href="#" class="category_box">
         <div class="category_img"><img src="images/uiux.webp" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">UI & UX</h4>
           <small>With Figma</small>
         </div>

       </a>


       <a href="#" class="category_box">
         <div class="category_img"><img src="images/graphics.webp" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Graphics and Branding</h4>
           <small>HD, 3D & 4D</small>
         </div>

       </a>


       <a href="#" class="category_box">
         <div class="category_img"><img src="images/digitalmarketing.webp" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Digital Marketing</h4>
           <small>Online Marketing</small>
         </div>

       </a>


       <a href="#" class="category_box">
         <div class="category_img"><img src="images/data.webp" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Data Analysis</h4>
           <small>With Python, R, SQL</small>
         </div>

       </a>


       <a href="#" class="category_box">
         <div class="category_img"><img src="images/freelance.png" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Freelancing Programme</h4>
           <small>Remote & Hybrid</small>
         </div>

       </a>





     </div>
   </nav>

   <!-- FEATURED PRODUCTS SECTION -->
   <nav class="product_container">
     <div class="category_title_container">
       <h1 class="category_heading">Popular Courses</h1>
       <div class="line_container">
         <div class="line"></div>
       </div>
     </div>

     <div class="product_content">

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/java.png" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">JAVASCRIPT</p>
           <h3 class="product_price">&#8358;200,000</h3>
         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View Details
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Add to cart
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/jquery.png" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">JQUERY</p>
           <h3 class="product_price">&#8358;200,000</h3>
         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View Details
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Add to cart
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/php.png" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">PHP</p>
           <h3 class="product_price">&#8358;200,000</h3>
         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View Details
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Add to cart
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/ajax.svg" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">AJAX</p>
           <h3 class="product_price">&#8358;200,000</h3>
         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View Details
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Add to cart
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/sql.avif" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">MYSQL</p>
           <h3 class="product_price">&#8358;200,000</h3>
         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View Details
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Add to cart
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/login.webp" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">LOGIN SYSTEM</p>
           <h3 class="product_price">&#8358;200,000</h3>
         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View Details
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Add to cart
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/admin_panel.jpg" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">ADMIN PANEL</p>
           <h3 class="product_price">&#8358;200,000</h3>
         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View Details
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Add to cart
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/pyhton.jpg" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">PYTHON</p>
           <h3 class="product_price">&#8358;200,000</h3>
         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View Details
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Add to cart
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/angular.png" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">ANGULAR</p>
           <h3 class="product_price">&#8358;200,000</h3>
         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View Details
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Add to cart
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/laravel.png" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">LARAVEL</p>
           <h3 class="product_price">&#8358;200,000</h3>
         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View Details
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Add to cart
             </button>
           </div>
         </div>
       </div>




     </div>
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
       <h1 class="category_heading">Expert Instructors</h1>
       <div class="line_container">
         <div class="line"></div>
       </div>
     </div>

     <div class="product_content">



       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/jethro2 (1).jpeg" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">Web developer</p>

         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View CV
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Book a Tutor
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/jethro2 (1).jpeg" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">Web developer</p>

         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View CV
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Book a Tutor
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/jethro2 (1).jpeg" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">Web developer</p>

         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View CV
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Book a Tutor
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/jethro2 (1).jpeg" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">Web developer</p>

         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View CV
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Book a Tutor
             </button>
           </div>
         </div>
       </div>

       <div class="product_box">
         <a href="" class="product_img_container">
           <div class="product_img">
             <img src="images/jethro2 (1).jpeg" alt="">
           </div>
         </a>
         <div class="product_details">
           <p class="product_name">Web developer</p>

         </div>
         <div class="product_call_to_action">

           <div class="view_details_container">
             <a href="">
               <button class="view_details_btn">

                 <span class="material-symbols-outlined">visibility</span>
                 View CV
               </button>
             </a>
           </div>
           <div class="add_to_cart_container">

             <button class="add_to_cart_btn">
               <span class="material-symbols-outlined">shopping_cart</span>
               Book a Tutor
             </button>
           </div>
         </div>
       </div>


     </div>
   </nav>

   <!-- TESTIMONIAL SECTION -->
   <div id="testimonial_container">
     <h1 id="testimonial_text">Testimonials</h1>
   </div>
   <!-- Slideshow container -->
   <div class="slideshow-container">

     <!-- Full-width slides/quotes -->
     <div class="mySlides">
       <q>“I always have fears to do coding. My friend recommended
         "Morrhtech Solutions". <br> The instructors are great at explaining and
         are patient and helpful. <br> I strongly recommend
         Morrhtech Solutions to those who want to learn Web development from A to Z.”</q>
       <p class="author">- Chinemerem Cyril</p>
     </div>

     <div class="mySlides">
       <q>“Very instructive course. Definitely worthwhile if you
         are trying to learn Python. <br> The instructors are engaging and able to cater
         to different levels of expertise among their attendees.”</q>
       <p class="author">- Iyanam Joseph</p>
     </div>

     <div class="mySlides">
       <q>“I always resisted learning how to code because I thought it would be
         boring and complicated, <br> but Morrhtech Solutions really changed my mind.”</q>
       <p class="author">- Ogbodo Joy</p>
     </div>

     <!-- Next/prev buttons -->
     <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
     <a class="next" onclick="plusSlides(1)">&#10095;</a>
   </div>

   <!-- Dots/bullets/indicators -->
   <div class="dot-container">
     <span class="dot" onclick="currentSlide(1)"></span>
     <span class="dot" onclick="currentSlide(2)"></span>
     <span class="dot" onclick="currentSlide(3)"></span>
   </div>

   <!-- FOOTER SECTION -->
   <?php require "includes/footer.php";?>
   <nav class="footer_container"></nav>

 </body>

 </html>