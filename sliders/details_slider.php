<div class="slider_wrapper">
  <?php
foreach ($images as $image) {
    ?>
  <div class="slide">
    <img src="<?php echo $base_url; ?>images/products/<?php echo $image; ?>" alt="slider">
  </div>
  <?php
}

?>

  <!-- <div class="slide">
    <img src="images/angular.png" alt="slider">
  </div>
  <div class="slide">
    <img src="images/data.webp" alt="slider">
  </div>
  <div class="slide">
    <img src="images/design.webp" alt="slider">
  </div> -->

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