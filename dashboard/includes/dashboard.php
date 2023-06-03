<?php
include "../config/config.php";
include '../functions/autoloader.php';
include "../../classes/customers_class.php";

$obj = new Orders_class;
$customer_obj = new Customers_class;

$order_details = $obj->fetch_some_orders(10);

$customer_details = $customer_obj->fetch_some_customers(8);

?>



<!--  DASHBOARD BOXES-->
<div class="cardBox">

  <div class="card">
    <div>
      <div class="numbers"><?php echo number_format($obj->count_record("customers")); ?></div>
      <div class="cardName">Customers</div>
    </div>
    <div class="iconBox">
      <ion-icon name="people-outline"></ion-icon>
    </div>
  </div>

  <div class="card">
    <div>
      <div class="numbers"><?php echo number_format($obj->count_record("users")); ?></div>
      <div class="cardName">Users</div>
    </div>
    <div class="iconBox">
      <ion-icon name="people-circle-outline"></ion-icon>
    </div>
  </div>

  <div class="card">
    <div>
      <div class="numbers"><?php echo number_format($obj->count_record("products")); ?></div>
      <div class="cardName">Products</div>
    </div>
    <div class="iconBox">
      <ion-icon name="bookmarks-outline"></ion-icon>
    </div>
  </div>

  <div class="card">
    <div>
      <div class="numbers"><?php echo number_format($obj->count_record("product_categories")); ?></div>
      <div class="cardName">Categories</div>
    </div>
    <div class="iconBox">
      <ion-icon name="bookmarks-outline"></ion-icon>
    </div>
  </div>

  <div class="card">
    <div>
      <div class="numbers"><?php echo number_format($obj->count_record("comments")); ?></div>
      <div class="cardName">Comments</div>
    </div>
    <div class="iconBox">
      <ion-icon name="chatbubbles-outline"></ion-icon>
    </div>
  </div>

</div>
<!--  ORDER DETAILS LIST-->
<div class="details">
  <!--  ORDER DETAILS LIST-->
  <div class="recentOrders">
    <div class="cardHeader">
      <h2>Recent Orders</h2>
      <a href="#" class="btn">View All</a>
    </div>

    <table>
      <thead>
        <tr>
          <td>Name</td>
          <td>Price</td>
          <td>Payment</td>
          <td>Status</td>
        </tr>
      </thead>
      <tbody>

        <?php
foreach ($order_details as $order) {
    $product_id = $order->product_id;
    $product_name = $obj->get_product_name($product_id);
    $product_price = $order->product_price;
    $payment_status = $order->payment_status;
    $status = $order->status;
    $status_class = "";
    if ($status == "Delivered") {$status_class = "delivered";} elseif ($status == "Pending") {$status_class = "pending";} elseif ($status == "Return") {$status_class = "return";} elseif ($status == "In Progress") {$status_class = "inprogress";}

    ?>

        <tr>
          <td><?php echo $product_name; ?></td>
          <td>&#8358;<?php echo number_format($product_price); ?></td>
          <td><?php echo $payment_status; ?></td>
          <td><span class="status <?php echo $status_class; ?>"><?php echo $status; ?></span></td>
        </tr>

        <?php

}

?>

      </tbody>
    </table>


    <!--
       <table>
      <thead>
        <tr>
          <td>Name</td>
          <td>Price</td>
          <td>Payment</td>
          <td>Status</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Courses Name</td>
          <td>N200,000</td>
          <td>Paid</td>
          <td><span class=" status delivered">Delivered</span></td>
        </tr>

        <tr>
          <td>Courses Name</td>
          <td>N200,000</td>
          <td>Paid</td>
          <td><span class="status pending">Pending</span></td>
        </tr>

        <tr>
          <td>Courses Name</td>
          <td>N200,000</td>
          <td>Paid</td>
          <td><span class="status return">Return</span></td>
        </tr>

        <tr>
          <td>Courses Name</td>
          <td>N200,000</td>
          <td>Paid</td>
          <td><span class="status inprogress">In Progress</span></td>
        </tr>

        <tr>
          <td>Courses Name</td>
          <td>N200,000</td>
          <td>Paid</td>
          <td><span class="status delivered">Delivered</span></td>
        </tr>

        <tr>
          <td>Courses Name</td>
          <td>N200,000</td>
          <td>Paid</td>
          <td><span class="status pending">Pending</span></td>
        </tr>

        <tr>
          <td>Courses Name</td>
          <td>N200,000</td>
          <td>Paid</td>
          <td><span class="status delivered">Delivered</span></td>
        </tr>

        <tr>
          <td>Courses Name</td>
          <td>N200,000</td>
          <td>Paid</td>
          <td><span class="status return">Return</span></td>
        </tr>
      </tbody>
    </table>
    -->



  </div>

  <!-- NEW CUSTOMERS-->
  <div class="recentCustomers">
    <div class="cardHeader">
      <h2>Recent Customers</h2>
    </div>
    <table>

      <?php
foreach ($customer_details as $customer) {

    $full_name = $customer->full_name;
    $country = $customer->country;

    ?>
      <tr>
        <td width="60px">
          <div class="imgbox"><img src="images/profile/profile.png"></div>
        </td>
        <td>
          <h4><?php echo $full_name; ?> <br><span><?php echo $country; ?> </span></h4>
        </td>
      </tr>
      <?php
}

?>
    </table>

    <!--
      <table>
      <tr>
        <td width="60px">
          <div class="imgbox"><img src="images/profile/joel.jpg"></div>
        </td>
        <td>
          <h4>Morrhtech <br><span>Nigeria</span></h4>
        </td>
      </tr>
      <tr>
        <td width="60px">
          <div class="imgbox"><img src="images/profile/joel.jpg"></div>
        </td>
        <td>
          <h4>Morrhtech <br><span>Nigeria</span></h4>
        </td>
      </tr>
      <tr>
        <td width="60px">
          <div class="imgbox"><img src="images/profile/joel.jpg"></div>
        </td>
        <td>
          <h4>Morrhtech <br><span>Nigeria</span></h4>
        </td>
      </tr>
      <tr>
        <td width="60px">
          <div class="imgbox"><img src="images/profile/joel.jpg"></div>
        </td>
        <td>
          <h4>Morrhtech <br><span>Nigeria</span></h4>
        </td>
      </tr>
      <tr>
        <td width="60px">
          <div class="imgbox"><img src="images/profile/joel.jpg"></div>
        </td>
        <td>
          <h4>Morrhtech <br><span>Nigeria</span></h4>
        </td>
      </tr>
      <tr>
        <td width="60px">
          <div class="imgbox"><img src="images/profile/joel.jpg"></div>
        </td>
        <td>
          <h4>Morrhtech <br><span>Nigeria</span></h4>
        </td>
      </tr>
      <tr>
        <td width="60px">
          <div class="imgbox"><img src="images/profile/joel.jpg"></div>
        </td>
        <td>
          <h4>Morrhtech <br><span>Nigeria</span></h4>
        </td>
      </tr>
      <tr>
        <td width="60px">
          <div class="imgbox"><img src="images/profile/joel.jpg"></div>
        </td>
        <td>
          <h4>Morrhtech <br><span>Nigeria</span></h4>
        </td>
      </tr>
    </table>
     -->
  </div>
</div>