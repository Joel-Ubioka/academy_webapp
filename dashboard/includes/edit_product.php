<?php

include "../config/config.php";
include '../functions/autoloader.php';

$product_obj = new Product_class();
$category_obj = new Product_category_class();

$categories = $category_obj->fetch_categories();

$id = $_POST['edit_id'];

$product_detail = $product_obj->fetch_product_by_id($id);

?>

<div class="table_wrapper">
  <h2>
    <ion-icon name="star-outline"></ion-icon> Edit Product
  </h2>
  <div class="table_container">
    <div class="signup_wrapper">

      <div class="signup_container dashboard_form_container">

        <form action="ajax_functions/edit_product_ajax.php" method="POST" class="form_edit">

          <input type="hidden" name="product_id" value="<?php echo $id; ?>">
          <div class="input_container">
            <input type="text" id='product_name' name="product_name" class="form_input" placeholder="Product Name"
              value="<?php echo $product_detail->product_name; ?>" required>
          </div>
          <div class="input_container">
            <select id="product_category" name="product_category" class="form_input" required>
              <option value="">Select Category</option>
              <?php
foreach ($categories as $item) {
    $category = $item->category_name;
    echo "<option value='$category'>$category</option>";
}

?>
            </select>
          </div>
          <div class="input_container">
            <input type="number" min="10" id="product_price" name="product_price" class="form_input"
              placeholder="Product Price" value="<?php echo $product_detail->product_price; ?>" required>
          </div>

          <div class="input_container">
            <input type="text" id="product_tag" name="product_tag" class="form_input" placeholder="Product Tag"
              value="<?php echo $product_detail->product_tag; ?>" required>
          </div>

          <div class="input_container">
            <input type="text" id="product_publisher" name="product_publisher" class="form_input"
              placeholder="Publisher" value="<?php echo $product_detail->product_publisher; ?>" required>
          </div>

          <textarea rows="10" cols="12" id="product_spec" name="product_spec" class="form_input"
            required><?php echo $product_detail->product_spec; ?></textarea>

          <textarea rows="10" cols="12" id="product_desc" name="product_desc" class="form_input"
            required><?php echo $product_detail->product_desc; ?></textarea>


          <label for="product_img" class="file_container" id="file_container">
            <span id="file_text">
              Select product image
            </span>
            <span id="file_btn">Browse</span>
            <input type="file" id="product_img" name="product_img[]" class="form_input" multiple required>
          </label>

          <button name="submit" class="close_btn">Update Product</button>

        </form>

      </div>
    </div>
  </div>
</div>
<script>
$('#product_img').on("change", function() {
  const file = $(this).prop('files')[0];
  $('#file_text').html(file.name);
});

// FOR SUMMER NOTE TEXT EDITOR
$('#product_spec').summernote({
  placeholder: 'Product Specification',
  tabsize: 2,
  height: 200,
  toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'underline', 'clear']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['insert', ['link', 'video']],
    ['view', ['fullscreen']]
  ]
});

$('#product_desc').summernote({
  placeholder: 'Product Description',
  tabsize: 2,
  height: 200,
  toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'underline', 'clear']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['insert', ['link', 'video']],
    ['view', ['fullscreen']]
  ]
});

$("#product_desc, #product_spec").on("summernote.paste", function(e, ne) {

  var bufferText = ((ne.originalEvent || ne).clipboardData || window.clipboardData).getData('Text');
  ne.preventData();
  document.execCommand('insertText', false, bufferText);

});
</script>