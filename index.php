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
$prod_detail = $obj->fetch_slider_products(2);
foreach ($prod_detail as $product) {
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
      <div class="service_text">Bulk Purchase <br>Call or Chat 08035817907</div>
    </div>
    <div class="service_container" data-aos="fade-up">
      <div class="service_icon">
        <span class="material-symbols-outlined">home_work</span>
      </div>
      <div class="service_text"> 7 Days Return</div>
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

      <a href="<?php echo $base_url; ?>categories/<?php echo $id . "/" . $category_title; ?>" class="category_box"
        data-aos="fade-left">
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

$min_no = 0;
$max_no = count($product_array) - 1;
$rand_no = rand($min_no, $max_no);

$product_title = $product_array[$rand_no][1];

$images = $product_array[$rand_no][9];

// CONVERT JSON IMAGES TO ARRAY
$images = json_decode($images);

$image_max_no = count($images) - 1;

$img_rand_no = rand($min_no, $image_max_no);

$ran_images = $images[$img_rand_no];

$prod_id = $product_array[$rand_no][0];
?>

    <div class="advert_box_container">
      <div class="advert_overlay_container"> </div>
      <div class="advert_img_box">
        <img src="<?php echo $base_url; ?>images/products/<?php echo $ran_images; ?>" alt="">
      </div>

      <div class="advert_content_container">
        <a href="<?php echo $base_url; ?>products/<?php echo $prod_id; ?>" class="advert_box">
          <h3><?php echo $product_title; ?></h3>
          <h1>Special Offer</h1>
          <button class="close_btn">Shop Now</button>
        </a>
      </div>
    </div>

    <?php
$min_no = 0;
$max_no = count($product_array) - 1;

$rand_no = rand($min_no, $max_no);
$product_title = $product_array[$rand_no][1];

$images = $product_array[$rand_no][9];

// CONVERT JSON IMAGES TO ARRAY
$images = json_decode($images);
$image_max_no = count($images) - 1;

$img_rand_no = rand($min_no, $image_max_no);

$ran_images = $images[$img_rand_no];

$prod_id = $product_array[$rand_no][0];

$rand_no;
?>

    <div class="advert_box_container">
      <div class="advert_overlay_container"> </div>
      <div class="advert_img_box">
        <img src="<?php echo $base_url; ?>images/products/<?php echo $ran_images; ?>" alt="">
      </div>

      <div class="advert_content_container">
        <a href="<?php echo $base_url; ?>products/<?php echo $prod_id; ?>" class="advert_box">
          <h3><?php echo $product_title; ?></h3>
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

  <!-- PRODUCT YOU MAY ALSO LIKE -->
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