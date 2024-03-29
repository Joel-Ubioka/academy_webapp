<div class="table_wrapper">
  <h2>
    <ion-icon name="star-outline"></ion-icon> Insert Category
  </h2>
  <div class="table_container">
    <div class="signup_wrapper">

      <div class="signup_container dashboard_form_container">

        <h1></h1>

        <form action="ajax_functions/insert_category_ajax.php" method="POST" id="insert_category_form"
          enctype="multipart/form-data">
          <div class="input_container">
            <input type="text" id='category_name' name="category_name" class="form_input" placeholder="Category Name"
              required>
          </div>


          <label for="category_img" class="file_container" id="file_container">
            <span id="file_text">
              Select category image
            </span>
            <span id="file_btn">Browse</span>
            <input type="file" id="category_img" name="category_img" class="form_input" required>
          </label>

          <button name="submit" class="close_btn">Insert Category</button>

        </form>
        <?php include "../../loading/progress_bar.php";?>
      </div>
    </div>
  </div>
</div>
<script>
// SHOW SELECTED IMAGE
$('#category_img').on("change", function() {
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