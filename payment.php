<?php
require "includes/header.php";
require "url/base_url.php";
?>

<body>
  <?php
if (!isset($_SESSION['customer_email'])) {
    header('location:' . $base_url);
    exit();
}

$email = $_SESSION['customer_email'];

$obj = new Customers_class;
$customer_array = $obj->fetch_customer($email);

$phone_number = $customer_array->phone_number;

?>
  <script src="https://js.paystack.co/v1/inline.js"></script>

  <script>
  function payNow() {
    let handler = PaystackPop.setup({

      key: 'pk_test_3300f166b69b7fa74a69327f3349dbd6bca6897b',
      email: "<?php echo $email; ?>",
      amount: parseInt(localStorage.getItem('total_cost')) * 100,
      ref: "" + Math.floor((Math.random() * 10000000000) + 1),

      onclose: function() {
        window.location = "<?php echo $base_url; ?>checkout";
      },

      callback: function(response) {
        window.location = "<?php echo $base_url; ?>order_complete";
      }

    });

    handler.openIframe();
  }
  payNow();
  </script>

</body>