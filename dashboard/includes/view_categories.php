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


        <tr>
          <td>1</td>
          <td>1</td>
          <td>Frontend</td>
          <td>
            <div class='table_img_container'><img src='images/categories/frontend.jpg'></div>
          </td>

          <td>
            <button class="close_btn option_btn"><span>Options</span>
              <ion-icon name="chevron-down-outline"></ion-icon>
            </button>
            <ul class="option_dropdown">
              <li><a href="">Edit</a></li>
              <li><a href="">Delete</a></li>
            </ul>
          </td>
        </tr>


        <tr>
          <td>1</td>
          <td>1</td>
          <td>Frontend</td>
          <td>
            <div class='table_img_container'><img src='images/categories/frontend.jpg'></div>
          </td>

          <td>
            <button class="close_btn option_btn"><span>Options</span>
              <ion-icon name="chevron-down-outline"></ion-icon>
            </button>
            <ul class="option_dropdown">
              <li><a href="">Edit</a></li>
              <li><a href="">Delete</a></li>
            </ul>
          </td>
        </tr>


        <tr>
          <td>1</td>
          <td>1</td>
          <td>Frontend</td>
          <td>
            <div class='table_img_container'><img src='images/categories/frontend.jpg'></div>
          </td>

          <td>
            <button class="close_btn option_btn"><span>Options</span>
              <ion-icon name="chevron-down-outline"></ion-icon>
            </button>
            <ul class="option_dropdown">
              <li><a href="">Edit</a></li>
              <li><a href="">Delete</a></li>
            </ul>
          </td>
        </tr>


        <tr>
          <td>1</td>
          <td>1</td>
          <td>Frontend</td>
          <td>
            <div class='table_img_container'><img src='images/categories/frontend.jpg'></div>
          </td>

          <td>
            <button class="close_btn option_btn"><span>Options</span>
              <ion-icon name="chevron-down-outline"></ion-icon>
            </button>
            <ul class="option_dropdown">
              <li><a href="">Edit</a></li>
              <li><a href="">Delete</a></li>
            </ul>
          </td>
        </tr>


      </tbody>
    </table>
  </div>
</div>


<script>
$(document).ready(function() {
  $('#table_format').DataTable();
});
</script>