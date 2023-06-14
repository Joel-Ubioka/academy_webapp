<?php require "includes/header.php"; // HEADER SECTION

?>

<body>
  <!-- TOPBAR AND NAVBAR SECTION -->
  <?php include "includes/header2.php";?>

  <?php
if (isset($_GET['category_id'])) {

    $category_id = $_GET['category_id'];

    if (!$obj->fetch_products_by_cat_sub($category_id)) {
        header('location:' . $base_url);
        exit();
    }

    $product_detail = $obj->fetch_products_by_cat_sub($category_id);
    if (isset($_GET['title'])) {
        $category_name = str_replace('-', ' ', $_GET['title']);
    } else {
        $category_name = "";
    }
    // $category_name = $category_obj->get_category_name($category_id);

    ?>

  <!-- FOR SINGLE CATEGORY -->
  <div class="product_columns_heading categories_heading">
    <div class="category_title_container">
      <h1 class="columns_title"><?php echo $category_name; ?></h1>
    </div>
  </div>
  </div>
  <nav class="product_container">




    <div class="product_content">
      <?php
foreach ($product_detail as $product) {
        // CONVERT JSON IMAGES TO ARRAY
        $id = $product->id;
        $product_name = $product->product_name;
        $product_price = $product->product_price;
        $images = json_decode($product->product_image);
        $product_image = $images[0];
        $product_tag = $obj->format_tag($product_name);

        ?>
      <div class="product_box" data-aos="zoom-in-down">
        <a href="<?php echo $base_url; ?>products/<?php echo $id; ?>" class="product_img_container">
          <div class="product_img">
            <img src="<?php echo $base_url; ?>images/products/<?php echo $images[0]; ?>" alt="">
          </div>
        </a>
        <div class="product_details">
          <p class="product_name"><?php echo $product_name; ?></p>
          <h3 class="product_price">&#8358;<?php echo number_format($product_price); ?></h3>
        </div>
        <div class="product_call_to_action">

          <div class="view_details_container">
            <a href="<?php echo $base_url; ?>products/<?php echo $id; ?>">
              <button class="view_details_btn">

                <span class="material-symbols-outlined">visibility</span>
                View Details
              </button>
            </a>
          </div>
          <div class="add_to_cart_container">

            <button class="add_to_cart_btn" data-product-name="<?php echo $product_name; ?>"
              data-product-price="<?php echo $product_price; ?>" data-product-image="<?php echo $product_image; ?>"
              data-product-tag="<?php echo $product_tag; ?>">


              <span class="material-symbols-outlined">shopping_cart</span>
              Add to cart
            </button>
          </div>
        </div>
      </div>

      <?php
}
    ?>

    </div>







    <?php //include "includes/product_list.php";?>
  </nav>

  <?php

} else {

    ?>
  <div class="product_columns_heading categories_heading">
    <div class="category_title_container">
      <h1 class="columns_title">Categories</h1>
    </div>
  </div>


  <!-- FOR ALL CATEGORIES -->
  <div class="category_wrapper">
    <div class="category_details_container">

      <?php
foreach ($categories as $category) {

        ?>


      <!--  WEB DEVELOPMENT-->
      <section class="related_product_container">


        <div class="product_columns_heading">
          <div class="category_title_container">
            <h1 class="columns_title"><?php echo $category->category_name; ?></h1>
            <div class="line_container">
              <div class="line"></div>
            </div>
          </div>
        </div>






        <div class="product_scroll_container">
          <div class="product_scroll_content">


            <!-- FETCH PRODUCTS BY CATEGORY -->
            <?php
$products_details = $obj->fetch_products_by_category($category->id);
        foreach ($products_details as $item) {
            $id = $item->id;
            $product_name = $item->product_name;
            $product_price = $item->product_price;
            // CONVERT JSON IMAGES TO ARRAY
            $images = json_decode($item->product_image);
            $product_image = $images[0];
            $product_tag = $obj->format_tag($product_name);
            ?>

            <div class="product_box" data-aos="zoom-in-down">
              <a href="<?php echo $base_url; ?>products/<?php echo $id; ?>" class="product_img_container">
                <div class="product_img">
                  <img src="<?php echo $base_url; ?>images/products/<?php echo $images[0]; ?>" alt="">
                </div>
              </a>
              <div class="product_details">
                <p class="product_name"><?php echo $product_name; ?></p>
                <h3 class="product_price">&#8358;<?php echo number_format($product_price); ?></h3>
              </div>
              <div class="product_call_to_action">

                <div class="view_details_container">
                  <a href="<?php echo $base_url; ?>products/<?php echo $id; ?>">
                    <button class="view_details_btn">

                      <span class="material-symbols-outlined">visibility</span>
                      View Details
                    </button>
                  </a>
                </div>
                <div class="add_to_cart_container">

                  <button class="add_to_cart_btn" data-product-name="<?php echo $product_name; ?>"
                    data-product-price="<?php echo $product_price; ?>"
                    data-product-image="<?php echo $product_image; ?>" data-product-tag="<?php echo $product_tag; ?>">


                    <span class="material-symbols-outlined">shopping_cart</span>
                    Add to cart
                  </button>
                </div>
              </div>
            </div>

            <?php
}
        ?>



            <button>
              <a href="<?php echo $base_url; ?>categories/<?php echo $category->id ?>">
                <h1>See all products</h1>
              </a>
            </button>






          </div>
        </div>


      </section>
      <?php
}
    ?>


    </div>
  </div>

  <?php
}

?>



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