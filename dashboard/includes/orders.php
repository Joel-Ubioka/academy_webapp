<?php
include "../config/config.php";
include '../functions/autoloader.php';
include "../../classes/customers_class.php";

$obj = new Orders_class;
$customer_obj = new Customers_class;

$order_details = $obj->fetch_orders();

?>

<div class="table_wrapper">
  <h2>
    <ion-icon name="star-outline"></ion-icon> Orders
  </h2>
  <div class="table_container">
    <table id="table_format" class="table_format">
      <thead>
        <tr>
          <th>S/N</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Product Image</th>
          <th>Payment Method</th>
          <th>Payment Status</th>
          <th> Product Status</th>
          <th>Customer Name</th>
          <th>Customer Email</th>
          <th>Customer Phone</th>
          <th>Customer Address</th>
          <th>Customer Country</th>
          <th>Date Ordered</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>


        <?php
if ($obj->is_orders_empty()) {
    echo "<tr><td colspan='5'>No record found</td></tr>";
} else {

    $sn = 1;
    foreach ($order_details as $order) {

        $id = $order->id;
        $product_id = $order->product_id;
        $product_name = $obj->get_product_name($product_id);
        $product_price = $order->product_price;
        $quantity = $order->quantity;
        $product_image = $order->product_image;
        $payment_method = $order->payment_method;

        $payment_status = $order->payment_status;
        ($payment_status == "Paid") ? $status_value = "Unpaid" : $status_value = "Paid";

        $status = $order->status;
        $customer_id = $order->customer_id;
        $customer_name = $customer_obj->get_customer_name($customer_id);
        $customer_email = $order->email;
        $customer_phone = $order->phone_number;
        $customer_address = $order->address;
        $customer_country = $order->country;
        $date = $order->date;

        $status_class = "";
        if ($status == "Delivered") {$status_class = "delivered";} elseif ($status == "Pending") {$status_class = "pending";} elseif ($status == "Return") {$status_class = "return";} elseif ($status == "In Progress") {$status_class = "inprogress";}

        ?>

        <tr>
          <td><?php echo $sn; ?></td>
          <td><?php echo $product_name; ?></td>
          <td>&#8358;<?php echo number_format($product_price); ?></td>
          <td><?php echo $quantity; ?></td>
          <td>
            <div class='table_img_container'><img src='../images/products/<?php echo $product_image; ?>'></div>
          </td>
          <td><?php echo $payment_method; ?></td>
          <td><?php echo $payment_status; ?></td>
          <td><span class="status <?php echo $status_class; ?>"><?php echo $status; ?></span></td>
          <td><?php echo $customer_name; ?></td>
          <td><?php echo $customer_email; ?></td>
          <td><?php echo $customer_phone ?></td>
          <td><?php echo $customer_address; ?></td>
          <td><?php echo $customer_country; ?></td>

          <td><?php echo $date; ?></td>

          <td>
            <button class=" close_btn option_btn"><span>Options</span>
              <ion-icon name="chevron-down-outline"></ion-icon>
            </button>
            <ul class="option_dropdown">
              <li><a href="" data-id="<?php echo $id; ?>" data-url="ajax_functions/update_ajax" data-table="orders"
                  data-column="payment_status" data-value="<?php echo $status_value; ?>" class="update_btn">Confirm
                  Payment</a>
              </li>
              <li><a href="" data-id="<?php echo $id; ?>" data-url="ajax_functions/update_ajax" data-table="orders"
                  data-column="status" class="update_status_link">Update
                  Status</a>
              </li>
              </li>
              <li><a href="" data-id="<?php echo $id; ?>" data-url="ajax_functions/delete_ajax" data-table="orders"
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