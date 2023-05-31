<?php
class Orders_class extends Product_class
{

    protected function select_order($order_name)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM orders WHERE order_name=? ORDER BY id DESC");
        if (!$stmt->execute(array($order_name))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    protected function get_order_id($order_name)
    {
        $stmt = $this->select_order($order_name);
        $order_array = $stmt->fetch(PDO::FETCH_OBJ);
        return $order_array->id;

    }

    protected function select_order_by_id($id)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM orders WHERE id=? ORDER BY id DESC');
        if (!$stmt->execute(array($id))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function count_orders($category_id)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM orders WHERE category_id=? ORDER BY id DESC');
        if (!$stmt->execute(array($category_id))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt->rowCount();
        }
    }

    public function fetch_order_by_id($id)
    {
        $stmt = $this->select_order_by_id($id);
        $order_array = $stmt->fetch(PDO::FETCH_OBJ);
        return $order_array;
    }

    public function get_order_name($id)
    {
        $order_array = $this->fetch_order_by_id($id);
        return $order_array->order_name;
    }

    public function fetch_orders()
    {
        $stmt = $this->select_orders();
        $order_array = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $order_array;
    }

    protected function select_order_by_category($category_id)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM orders WHERE category_id=?');
        if (!$stmt->execute(array($category_id))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function fetch_orders_by_category($category_id)
    {
        $stmt = $this->select_order_by_category($category_id);
        $order_array = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $order_array;
    }

    protected function select_orders()
    {
        $stmt = $this->connect()->prepare("SELECT * FROM orders ORDER BY id DESC");
        if (!$stmt->execute()) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    protected function select_order_by_cat_subcat($category_id)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM orders WHERE category_id=? || sub_category_id=?');
        if (!$stmt->execute(array($category_id, $category_id))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function fetch_orders_by_cat_sub($category_id)
    {
        $stmt = $this->select_order_by_cat_subcat($category_id);
        if ($stmt->rowCount() == 0) {
            return false;
        } else {
            $order_array = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $order_array;
        }

    }

    public function is_orders_empty()
    {
        $stmt = $this->select_orders();
        if ($stmt->rowCount() == 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function order_exists($order_name)
    {
        $stmt = $this->select_order($order_name);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function order_exists_by_id($order_id)
    {
        $stmt = $this->select_order_by_id($order_id);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function select_customer($email)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM customers WHERE email=?');
        if (!$stmt->execute(array($email))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function fetch_customer($email)
    {
        $stmt = $this->select_customer($email);
        $customer_array = $stmt->fetch(PDO::FETCH_OBJ);
        return $customer_array;
    }

    public function insert_order($email, $ordered_products, $payment_method)
    {

        $orders = json_decode($ordered_products);

        if (!$orders) {
            echo "Order empty";
            exit();
        }

        $customer_details = $this->fetch_customer($email);
        $customer_id = $customer_details->id;
        $phone_number = $customer_details->phone_number;
        $address = $customer_details->address;
        $country = $customer_details->country;

        foreach ($orders as $order) {
            $product_name = $order->name;
            $product_id = $this->get_product_id($product_name);
            $product_price = $order->price;
            $product_qty = $order->quantity;
            $product_img = $order->image;

            $stmt = $this->connect()->prepare('INSERT INTO orders (product_id,product_price, quantity, product_image, payment_method,customer_id,email,phone_number,address,country) VALUES(?,?,?,?,?,?,?,?,?,?)');
            if ($stmt->execute(array($product_id, $product_price, $product_qty, $product_img, $payment_method, $customer_id, $email, $phone_number, $address, $country))) {

                $message = "Successfully ordered!";

            } else {
                break;
                $message = "Contact Admin via 08035817907 for delivery";
            }

        }

        return $message;

    }

    public function view_orders()
    {
        $stmt = $this->select_orders();
        $order_array = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $order_array;
    }

    public function update_order($order_id, $order_name, $order_category, $order_price, $order_tag, $order_publisher, $order_spec, $order_desc, $order_image)
    {

        // CHECK IF THE CATEGORY IS EXIXTING ALREADY
        if (!$this->order_exists_by_id($order_id)) {
            echo "Product does not exist";
            exit();
        }

        // CHECK IF THE FILE SIZE IS BIGGER THAN 200KB
        if ($this->check_file_sizes($order_image, "2004800")) {
            echo "The image should not be more than 200kb";
            exit();
        }

        // CHECK IF THERE IS AN ERROR IN THE FILE
        if ($this->check_file_errors($order_image)) {
            echo "There is an error in your image";
            exit();
        }

        if (!$this->check_img_file_types($order_image)) {
            echo "You can't upload a file of this type";
            exit();
        }
        $file_names = "";

        for ($i = 0; $i < count($order_image['name']); $i++) {
            $file_name = $this->get_unique_file_names($order_image['name'][$i]);
            $tmp_name = $order_image['tmp_name'][$i];
            $file_path = "../../images/orders/" . $file_name;

            $upload = move_uploaded_file($tmp_name, $file_path);
            $file_names .= $file_name . ',';
        }

        $file_names = rtrim($file_names, ",");
        $file_names = explode(",", $file_names);
        $file_names = json_encode($file_names);

        if ($upload) {
            $stmt = $this->connect()->prepare('UPDATE orders SET order_name=?,order_category=?, order_price=?, order_tag=?, order_publisher=?, order_spec=?, order_desc=?, order_image=? WHERE id=?');
            if ($stmt->execute(array($order_name, $order_category, $order_price, $order_tag, $order_publisher, $order_spec, $order_desc, $file_names, $order_id))) {

                $result = "Successfully updated!";

            } else {
                $result = "Failed!";
            }

            echo $result;

        } else {
            echo "File upload failed!";
        }

    }
}
