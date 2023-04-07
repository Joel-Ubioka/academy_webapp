<?php
include "../config/config.php";
include '../functions/autoloader.php';

$obj = new Product_category_class();

$categories = $obj->view_categories();

?>

<div class="table_wrapper">
  <h2>
    <ion-icon name="star-outline"></ion-icon> Products Categories
  </h2>
  <div class="table_container">
    <table id="table_format" class="table_format">
      <thead>
        <tr>
          <th>S/N</th>
          <th>ID</th>
          <th>Product Category</th>
          <th> Category Image</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>


        <?php
$sn = 1;
foreach ($categories as $item) {

    $id = $item->id;
    $category_name = $item->category_name;
    $category_image = $item->category_image;

    ?>

        <tr>
          <td><?php echo $sn; ?></td>
          <td><?php echo $id; ?></td>
          <td><?php echo $category_name; ?></td>
          <td>
            <div class='table_img_container'><img src='../images/categories/<?php echo $category_image; ?>'></div>
          </td>

          <td>
            <button class="close_btn option_btn"><span>Options</span>
              <ion-icon name="chevron-down-outline"></ion-icon>
            </button>
            <ul class="option_dropdown">
              <li><a href="" data-id="<?php echo $id; ?>" data-url="includes/edit_category" class="edit_btn">Edit</a>
              </li>
              <li><a href="">Delete</a></li>
            </ul>
          </td>
        </tr>

        <?php
$sn++;
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