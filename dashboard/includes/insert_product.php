<div class="signup_wrapper">

  <div class="signup_container">

    <h1>Insert Product</h1>

    <form action="" method="POST" id="insert_product_form">
      <div class="input_container">
        <span class="material-symbols-outlined">
          person
        </span>
        <input type="text" id='product_name' name="product_name" class="form_input" placeholder="Product Name" required>
      </div>
      <div class="input_container">
        <span class="material-symbols-outlined">
          mail
        </span>
        <select id="product_category" name="product_category" class="form_input" placeholder="Select Category" required>
          <option value="">Select Category</option>
          <option value="Category 1"> Category 1</option>
          <option value="Category 2">Category 2</option>
          <option value="Category 3">Category 3</option>
        </select>
      </div>
      <div class="input_container">
        <span class="material-symbols-outlined">
          call
        </span>
        <input type="number" min="10" id="product_price" name="product_price" class="form_input"
          placeholder="Product Price" required>
      </div>

      <div class="input_container">
        <span class="material-symbols-outlined">
          lock
        </span>

        <input type="text" id="product_tag" name="product_tag" class="form_input" placeholder="Product Tag" required>
      </div>

      <div class="input_container">
        <span class="material-symbols-outlined">
          lock
        </span>
        <input type="text" id="product_publisher" name="product_publisher" class="form_input" placeholder="Publisher"
          required>
      </div>


      <div class="input_container">
        <span class="material-symbols-outlined">
          lock
        </span>
        <textarea id="product_spec" name="product_spec" class="form_input" required>Specifications</textarea>
      </div>


      <div class="input_container">
        <span class="material-symbols-outlined">
          lock
        </span>
        <textarea id="product_desc" name="product_desc" class="form_input" required>Description</textarea>
      </div>

      <label for="product_img" class="file_container" id="file_container">
        <span id="file_text">
          Select product image
        </span>
        <span id="file_btn">Browse</span>
        <input type="file" id="product_img" name="product_img" class="form_input" required>
      </label>

      <!-- <div class="input_container">
        <span class="material-symbols-outlined">
          lock
        </span>
        <input type="file" id="product_img" name="product_img" class="form_input" required>
      </div> -->


      <button name="submit" class="close_btn">Insert Product</button>

    </form>

  </div>

</div>

<script>
$('#product_img').on("change", function() {
  const file = $(this).prop('files')[0];
  $('#file_text').html(file.name);
});
</script>
