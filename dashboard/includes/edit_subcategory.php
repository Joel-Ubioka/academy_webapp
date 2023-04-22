<?php
include "../config/config.php";
include '../functions/autoloader.php';

$id = $_POST['edit_id'];
$obj = new Sub_category_class();

$subcategory_detail = $obj->fetch_subcategory_by_id($id);

$categories = $obj->fetch_categories();

?>


<div class="table_wrapper">
  <h2>
    <ion-icon name="star-outline"></ion-icon> Edit Sub-category
  </h2>
  <div class="table_container">
    <div class="signup_wrapper">

      <div class="signup_container dashboard_form_container">

        <h1></h1>

        <form action="ajax_functions/edit_subcategory_ajax.php" method="POST" class="form_edit">
          <input type="hidden" name="sub_category_id" value="<?php echo $id; ?>">
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
            <input type="text" id='sub_category' name="sub_category" class="form_input" placeholder="Sub-Category"
              value="<?php echo $subcategory_detail->sub_category; ?>" required>
          </div>

          <button name="submit" class="close_btn">Update</button>

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