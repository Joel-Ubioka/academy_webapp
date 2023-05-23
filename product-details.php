 <!-- HEADER SECTION -->
 <?php require "includes/header.php";?>

 <?php

if (!isset($_GET['product_id'])) {
    header("location:" . $base_url);
    exit();
}

$product_id = $_GET['product_id'];
$product = $obj->fetch_product_by_id($product_id);
$product_name = $product->product_name;
$product_price = $product->product_price;
$product_spec = htmlspecialchars_decode($product->product_spec);
$product_desc = htmlspecialchars_decode($product->product_desc);
// CONVERT JSON IMAGES TO ARRAY
$images = json_decode($product->product_image);
$product_image = $images[0];

$product_tag = $obj->format_tag($product_name);

?>

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

             <?php
foreach ($images as $image) {
    ?>
             <a href="#" class="product_list_box"> <img
                 src="<?php echo $base_url; ?>images/products/<?php echo $image; ?>"></a>
             <?php
}

?>




           </div>
         </div>


       </div>
       <div class="product_details_title_container">

         <!-- PRODUCT TITLES PRICE  AND BUTTONS -->
         <div class="product_details_title_content">

           <div class="details_inner_content">
             <h1 class="product_details_title"><?php echo $product_name; ?></h1>
             <div class="price_qty_container">
               <div class="product_details_price_box">
                 <span>&#8358;<?php echo number_format($product_price); ?></span>
               </div>
               <div class="product_details_qty_box">
                 <button class="qty_box btn qty_minus detail_qty_btn" data-type="minus"
                   data-product-name="<?php echo $product_name; ?>" data-product-price="<?php echo $product_price; ?>"
                   data-product-image="<?php echo $product_image; ?>" data-product-tag="<?php echo $product_tag; ?>">


                   -</button>
                 <input type="text" class="qty_box qty qty_value" id="qty_value" value="1">
                 <button class="qty_box btn qty_plus detail_qty_btn" data-type="plus"
                   data-product-name="<?php echo $product_name; ?>" data-product-price="<?php echo $product_price; ?>"
                   data-product-image="<?php echo $product_image; ?>" data-product-tag="<?php echo $product_tag; ?>">


                   +</button>
               </div>
             </div>
             <div class="product_details_btn_container">
               <a href="#"><button class="close_btn details_add_to_cart"
                   data-product-name="<?php echo $product_name; ?>" data-product-price="<?php echo $product_price; ?>"
                   data-product-image="<?php echo $product_image; ?>" data-product-tag="<?php echo $product_tag; ?>">Add
                   to cart</button></a>
               <a href="#"> <button class="open_btn">Buy Now</button></a>
             </div>

             <!-- PRODUCT SPECIFICATIONS-->
             <div class="product_spec">
               <h3>Specifications</h3>
               <?php echo $product_spec; ?>
               <!-- <ul>
                 <li>HTML 5</li>
                 <li>CSS</li>
                 <li>JAVASCRIPT</li>
                 <li>JQUERY</li>
                 <li>ANGULAR</li>
               </ul> -->
             </div>
           </div>

           <!-- SOCIAL MEDIA SHARE BUTTONS-->
           <div class="social_container details">
             <h3>Share this product</h3>
             <?php include "includes/social_icons.php";?>
           </div>


           <!-- <div>
             <h4> DURATION</h4>
             <p> 3 Months</p>
           </div> -->


         </div>


       </div>
     </section>


     <!-- PRODUCT DETAILS -->
     <section class="product_desc_container">
       <div class="product_details_text">
         <h2>Product Details</h2>
         <?php echo $product_desc; ?>

       </div>
     </section>
     <div class="social_container details">
       <h3>Share this product</h3>
       <?php include "includes/social_icons.php";?>
     </div>

   </div>


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