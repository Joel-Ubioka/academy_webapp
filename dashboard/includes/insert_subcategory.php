<div class="table_wrapper">
  <h2>
    <ion-icon name="star-outline"></ion-icon> Insert Category
  </h2>
  <div class="table_container">
    <div class="signup_wrapper">

      <div class="signup_container dashboard_form_container">

        <h1></h1>

        <form action="" method="POST" id="insert_category_form">

          <div class="input_container">
            <select id="product_category" name="product_category" class="form_input" required>
              <option value="">Select Category</option>
              <option value="Category 1"> Category 1</option>
              <option value="Category 2">Category 2</option>
              <option value="Category 3">Category 3</option>
            </select>
          </div>

          <div class="input_container">
            <input type="text" id='subcategory_name' name="subcategory_name" class="form_input"
              placeholder="Sub-Category" required>
          </div>

          <button name="submit" class="close_btn">Insert</button>

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
