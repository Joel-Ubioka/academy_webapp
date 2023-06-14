<?php
include "../config/config.php";
include '../functions/autoloader.php';

$obj = new Product_class;

$products = $obj->view_products();
$is_products_empty = $obj->is_products_empty();

?>

<div class="table_wrapper">
  <h2>
    <ion-icon name="star-outline"></ion-icon> Products
  </h2>
  <div class="table_container">
    <table id="table_format" class="table_format">
      <thead>
        <tr>
          <th>S/N</th>
          <th>ID</th>
          <th>Product Name</th>
          <th> Category</th>
          <th> Price</th>
          <th> Product Tags</th>
          <th> Publisher</th>
          <th> Product Specifications</th>
          <th> Product Description</th>
          <th> Product Image</th>
          <th> Date Published</th>
          <th> Date Updated</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>


        <?php
if ($is_products_empty) {
    echo "<tr><td colspan='5'>No record found</td></tr>";
} else {

    $sn = 1;
    foreach ($products as $item) {

        $id = $item->id;
        $product_name = $item->product_name;
        $category_id = $item->category_id;
        $product_category = $obj->get_category_name($category_id);

        $product_price = $item->product_price;
        $product_price = "&#8358;" . number_format($product_price);

        $product_tag = $item->product_tag;
        $product_publisher = $item->product_publisher;

        $product_spec = $item->product_spec;
        $product_spec = htmlspecialchars_decode($product_spec);
        $product_spec = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($product_spec))))));
        $product_spec = substr($product_spec, 0, 50) . "...";

        $product_desc = $item->product_desc;
        $product_desc = htmlspecialchars_decode($product_desc);
        $product_desc = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($product_desc))))));
        $product_desc = substr($product_desc, 0, 50) . "...";

        $product_image = $item->product_image;
        $product_image = json_decode($product_image);
        $product_image = $product_image[0];

        $date_published = $item->date_published;
        $date_updated = $item->date_updated;

        ?>

        <tr>
          <td><?php echo $sn; ?></td>
          <td><?php echo $id; ?></td>
          <td><?php echo $product_name; ?></td>
          <td><?php echo $product_category; ?></td>
          <td><?php echo $product_price; ?></td>
          <td><?php echo $product_tag; ?></td>
          <td><?php echo $product_publisher; ?></td>
          <td><?php echo $product_spec; ?></td>
          <td><?php echo $product_desc; ?></td>
          <td>
            <div class='table_img_container'><img src='../images/products/<?php echo $product_image; ?>'></div>
          </td>
          <td><?php echo $date_published; ?></td>
          <td><?php echo $date_updated; ?></td>
          <td>
            <button class="close_btn option_btn"><span>Options</span>
              <ion-icon name="chevron-down-outline"></ion-icon>
            </button>
            <ul class="option_dropdown">
              <li><a href="" data-id="<?php echo $id; ?>" data-url="includes/edit_product.php" class="edit_btn">Edit</a>
              </li>
              <li><a href="" data-id="<?php echo $id; ?>" data-url="ajax_functions/delete_ajax" data-table="products"
                  class="delete_pop_btn">Delete</a></li>
            </ul>
          </td>
        </tr>

        <?php
$sn++;
    }

}
?>


      </tbody>
    </table>
  </div>
</div>


<script>
$(document).ready(function() {
  $('#table_format').DataTable();
});
</script>