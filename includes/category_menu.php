<ul class="category_list_container">
  <?php
foreach ($categories as $category) {

    ?>

  <li class="category_list">
    <a href=""><?php echo $category->category_name; ?></a>
    <?php
if ($sub_category_obj->sub_category_by_cat_exist($category->id)) {
        ?>
    <ul class="category_submenu">
      <?php
$sub_categories = $sub_category_obj->fetch_subcategory_by_cat_id($category->id);
        foreach ($sub_categories as $sub_category) {
            ?>
      <li class="category_submenu_list "><a href="#"><?php echo $sub_category->sub_category; ?></a></li>
      <?php
}

        ?>
    </ul>
    <?php
}

    ?>
  </li>
  <?php
}

?>


</ul>


<!--
  <ul class="category_list_container">
  <li class="category_list">
    <a href="">Electrical Products </a>
    <ul class="category_submenu">
      <li class="category_submenu_list "><a href="#">Electrical Fittings</a></li>
      <li class="category_submenu_list "><a href="#">Electrical Appliances</a></li>
    </ul>
  </li>
  <li class="category_list"><a href="">Solar Power Systems</a></li>
  <li class="category_list"><a href="">Power Generators</a></li>
  <li class="category_list"><a href="">Funitures and Fancy</a></li>
  <li class="category_list"><a href="">Kitchen Utencils</a></li>
  <li class="category_list"><a href="">Sanitary Wares</a></li>
  <li class="category_list"><a href="">Security Doors</a></li>
  <li class="category_list"><a href="">Auto Deals</a></li>
</ul>

 -->