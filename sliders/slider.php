<?php
$products = $obj->fetch_slider_products(10);

?>


<div class="slider_wrapper">
  <?php
foreach ($products as $product) {
    $product_id = $product->id;
    $product_name = $product->product_name;
    $product_desc = htmlspecialchars_decode($product->product_desc);
    $product_desc = strip_tags($product_desc);
    $product_desc = substr($product_desc, 0, 150);
// CONVERT JSON IMAGES TO ARRAY
    $images = json_decode($product->product_image);
    ?>
  <div class="slide">
    <img src="<?php echo $base_url; ?>images/products/<?php echo $images[0]; ?>" alt="slider">
    <div class="overlay_container"></div>
    <div class="content_container">

      <h1 class="product_title"><?php echo $product_name; ?></h1>
      <p class="product_desc">
        <?php echo $product_desc; ?></php>
      </p>
      <a href="<?php echo $base_url; ?>products/<?php echo $product_id; ?>"><button class="close_btn">Shop
          Now</button></a>
    </div>

  </div>
  <?php
}

?>



  <div class="next_wrap">
    <button class="next">
      <span class="material-symbols-outlined">chevron_right</span>
    </button>
  </div>

  <div class="prev_wrap">
    <button class="prev">
      <span class="material-symbols-outlined">chevron_left</span>
    </button>
  </div>

</div>

<!--
  <div class="slider_wrapper">

  <div class="slide">
    <img src="images/lighting.jpg" alt="slider">
    <div class="overlay_container"></div>
    <div class="content_container">

      <h1 class="product_title">ELECTRICAL LIGHTING</h1>
      <p class="product_desc"> Get the brightest lights, even in the darkest nights.</p>
      <a href=""><button class="close_btn">Shop Now</button></a>
    </div>

  </div>
  <div class="slide">
    <img src="images/solar.jpg" alt="slider">
    <div class="content_container">

      <h1 class="product_title">SOLAR SYSTEM</h1>
      <p class="product_desc">Power the future with solar energy.</p>
      <a href=""><button class="close_btn">Shop Now</button></a>
    </div>
  </div>
  <div class="slide">
    <img src="images/generator.jpg" alt="slider">
    <div class="content_container">

      <h1 class="product_title">POWER GENERATOR</h1>
      <p class="product_desc">Diesel generators are available in various sizes, models and designs</p>
      <a href=""><button class="close_btn">Shop Now</button></a>
    </div>
  </div>
  <div class="slide">
    <img src="images/appliances.jpg" alt="slider">
    <div class="content_container">

      <h1 class="product_title">ELECTRICAL APPLIANCES</h1>
      <p class="product_desc">The best appliances for your home</p>
      <a href=""><button class="close_btn">Shop Now</button></a>
    </div>
  </div>

  <div class="next_wrap">
    <button class="next">
      <span class="material-symbols-outlined">chevron_right</span>
    </button>
  </div>

  <div class="prev_wrap">
    <button class="prev">
      <span class="material-symbols-outlined">chevron_left</span>
    </button>
  </div>

</div>
 -->