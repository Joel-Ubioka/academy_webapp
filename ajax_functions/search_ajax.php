<?php
require_once "../dashboard/config/config.php";
require_once '../functions/autoloader.php';
require_once '../url/base_url.php';

$search = htmlspecialchars($_POST['search']);

$obj = new Search_class;

$search_array = $obj->search_product($search);

if (!$search_array) {
    echo "<div class='search_dropdown_link'>No record found</div>";
} else {
    if (count($search_array) > 0) {
        foreach ($search_array as $search) {
            $images = $search->product_image;
            //CONVERT IMAGE TO ARRAY
            $images = json_decode($images);
            $date = strtotime($search->date_published);
            $date = date("F jS, Y", $date);
            ?>


<a href="<?php echo $base_url; ?>products/<?php echo $search->id; ?>" class="search_dropdown_link">
  <div class="search_dropdown_img">
    <img src="<?php echo $base_url; ?>images/products/<?php echo $images[0]; ?>" alt="search_image">
  </div>
  <div class="dropdown_search_text">
    <p><?php echo $search->product_name; ?></p>
  </div>
  <div class="dropdown_search_date">
    <span><?php echo $date; ?></span>
    <span>published</span>
  </div>
</a>

<?php
}
    } else {
        echo "div class='search_dropdown_link'>No record found</div>";
    }
}