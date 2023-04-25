<?php
include "../config/config.php";
include '../functions/autoloader.php';

$obj = new Sub_category_class;

$sub_categories = $obj->fetch_sub_categories();
$is_subcategories_empty = $obj->is_subcategories_empty();

?>

<div class="table_wrapper">
  <h2>
    <ion-icon name="star-outline"></ion-icon> Sub-categories
  </h2>
  <div class="table_container">
    <table id="table_format" class="table_format">
      <thead>
        <tr>
          <th>S/N</th>
          <th>ID</th>
          <th>Product Category</th>
          <th>Sub Categories</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>


        <?php
if ($is_subcategories_empty) {
    echo "<tr><td colspan='5'>No record found</td></tr>";
} else {

    $sn = 1;
    foreach ($sub_categories as $item) {

        $id = $item->id;
        $category_id = $item->category_id;
        $category_name = $obj->get_category_name($category_id);
        $sub_category = $item->sub_category;

        ?>

        <tr>
          <td><?php echo $sn; ?></td>
          <td><?php echo $id; ?></td>
          <td><?php echo $category_name; ?></td>
          <td><?php echo $sub_category; ?></td>

          <td>
            <button class="close_btn option_btn"><span>Options</span>
              <ion-icon name="chevron-down-outline"></ion-icon>
            </button>
            <ul class="option_dropdown">
              <li><a href="" data-id="<?php echo $id; ?>" data-url="includes/edit_subcategory" class="edit_btn">Edit</a>
              </li>
              <li><a href="" data-id="<?php echo $id; ?>" data-url="ajax_functions/delete_ajax"
                  data-table="sub_categories" class="delete_pop_btn">Delete</a></li>
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