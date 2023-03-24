<div class="table_wrapper">
  <h2>
    <ion-icon name="star-outline"></ion-icon> Products Categories
  </h2>
  <div class="table_container">
    <table id="table_format" class="table_format">
      <thead>
        <tr>
          <th>S/N</th>
          <th>Product Category</th>
          <th>Sub-category</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>


        <tr>
          <td>1</td>
          <td>Frontend</td>
          <td>Angular</td>
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
          <td>Frontend</td>
          <td>Angular</td>
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
          <td>Frontend</td>
          <td>Angular</td>
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
