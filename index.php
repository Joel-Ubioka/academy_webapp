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
         <?php
$products = $obj->fetch_slider_products(2);
foreach ($products as $product) {
    $product_id = $product->id;
    $product_name = $product->product_name;
    // CONVERT JSON IMAGES TO ARRAY
    $images = json_decode($product->product_image);
    ?>

         <div class="advert_content">
           <img src="<?php echo $base_url; ?>images/products/<?php echo $images[0]; ?>" alt="">
           <div class="overlay_container"></div>
           <div class="content_container">

             <h1 class="product_title"><?php echo $product_name; ?></h1>
             <!--<p class="product_desc">Learn to build websites that works seamlessly on all devices</p>-->
             <a href="<?php echo $base_url; ?>products/<?php echo $product_id; ?>"><button class="close_btn">Shop
                 Now</button></a>
           </div>
         </div>
         <?php
}

?>

         <!-- <div class="advert_content">
           <img src="images/utencils.jpg" alt="">
           <div class="overlay_container"></div>
           <div class="content_container">
             <h1 class="product_title">KITCHEN UTENCILS</h1>
             <a href=""><button class="close_btn">Shop Now</button></a>
           </div> -->

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

       <?php
foreach ($categories as $category) {
    $id = $category->id;
    $category_name = $category->category_name;
    $category_image = $category->category_image;

    ?>

       <a href="<?php echo $base_url; ?>categories/<?php echo $id ?>" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="<?php echo $base_url; ?>images/categories/<?php echo $category_image; ?>"
             alt="">
         </div>
         <div class="category_desc">
           <h4 class="category_desc_heading"><?php echo $category_name; ?></h4>
           <small><?php echo $obj->count_products($id); ?> products</small>
         </div>

       </a>

       <?php
}

?>


       <!--

       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/softwaredev.jpg" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Power Generators</h4>
           <small>Portable Generator,Inverter Generator,Gasoline Generator,Diesel Generator,Solar Generator</small>
         </div>

       </a>


       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/uiux.webp" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Furnitures & Fancy</h4>
           <small> Tables, Chairs, Beds, Desks, Dressers, and Cupboards.</small>
         </div>

       </a>


       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/graphics.webp" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Kitchen Utencils</h4>
           <small>Food preparation, Food storage, Maintenance & Cleaning, and Serving L</small>
         </div>

       </a>


       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/digitalmarketing.webp" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Sanitary Wares</h4>
           <small>Bath tubs, Water closets $ Urinals </small>
         </div>

       </a>


       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/data.webp" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Security Doors</h4>
           <small>Single Security Doors,Double Security Doors,Mesh Doors,Laser Doors</small>
         </div>

       </a>


       <a href="categories" class="category_box" data-aos="fade-left">
         <div class="category_img"><img src="images/freelance.png" alt=""></div>
         <div class="category_desc">
           <h4 class="category_desc_heading">Auto Deals</h4>
           <small>Brand new $ Tokunbo</small>
         </div>

       </a> -->





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

     <?php
$product_array = $obj->fetch_ad_products(10);
$id = $product_array[0][0];
$product_title = $product_array[0][1];
$images = $product_array[0][8];

// // CONVERT JSON IMAGES TO ARRAY
$images = json_decode($images);
?>

     <div class="advert_box_container">
       <div class="advert_overlay_container"> </div>
       <div class="advert_img_box">
         <img src="<?php echo $base_url; ?>images/products/<?php echo $images[0]; ?>" alt="">
       </div>

       <div class="advert_content_container">
         <a href="" class="advert_box">
           <h3><?php echo $product_title; ?></h3>
           <h1>Special Offer</h1>
           <button class="close_btn">Shop Now</button>
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
           <button class="close_btn">Shop Now</button>
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