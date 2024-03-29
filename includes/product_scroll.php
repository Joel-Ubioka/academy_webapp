<div class="product_scroll_container">
  <div class="product_scroll_content">

    <?php
foreach ($products as $product) {

    $id = $product->id;
    $product_name = $product->product_name;
    $product_price = $product->product_price;
    // CONVERT JSON IMAGES TO ARRAY
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




  <button>
    <a href="<?php echo $base_url; ?>categories">
      <h1>See all products</h1>
    </a>
  </button>






</div>
</div>




<!--

<div class="product_scroll_container">
  <div class="product_scroll_content">


    <div class="product_box" data-aos="zoom-in-down">
      <a href="?php echo $base_url; ?>product-details" class="product_img_container">
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
          <a href="?php echo $base_url; ?>product-details">
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

    <div class="product_box" data-aos="zoom-in-down">
      <a href="?php echo $base_url; ?>product-details" class="product_img_container">
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
          <a href="?php echo $base_url; ?>product-details">
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

    <div class="product_box" data-aos="zoom-in-down">
      <a href="?php echo $base_url; ?>product-details" class="product_img_container">
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
          <a href="?php echo $base_url; ?>product-details">
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

    <div class="product_box" data-aos="zoom-in-down">
      <a href="?php echo $base_url; ?>product-details" class="product_img_container">
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
          <a href="?php echo $base_url; ?>product-details">
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

    <div class="product_box" data-aos="zoom-in-down">
      <a href="?php echo $base_url; ?>product-details" class="product_img_container">
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
          <a href="?php echo $base_url; ?>product-details">
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

    <div class="product_box" data-aos="zoom-in-down">
      <a href="?php echo $base_url; ?>product-details" class="product_img_container">
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
          <a href="?php echo $base_url; ?>product-details">
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

    <div class="product_box" data-aos="zoom-in-down">
      <a href="?php echo $base_url; ?>product-details" class="product_img_container">
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
          <a href="?php echo $base_url; ?>product-details">
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
</div>
 -->