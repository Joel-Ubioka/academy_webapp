<?php
class Customers_class extends File_class
{

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

    protected function get_customer_id($customer_name)
    {
        $stmt = $this->select_customer($customer_name);
        $customer_array = $stmt->fetch(PDO::FETCH_OBJ);
        return $customer_array->id;

    }

    protected function select_customer_by_id($id)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM customers WHERE id=?');
        if (!$stmt->execute(array($id))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function fetch_customer_by_id($id)
    {
        $stmt = $this->select_customer_by_id($id);
        $customer_array = $stmt->fetch(PDO::FETCH_OBJ);
        return $customer_array;
    }

    public function fetch_customer($email)
    {
        $stmt = $this->select_customer($email);
        $customer_array = $stmt->fetch(PDO::FETCH_OBJ);
        return $customer_array;
    }

    public function get_customer_name($id)
    {
        $customer_array = $this->fetch_customer_by_id($id);
        return $customer_array->full_name;
    }

    public function fetch_customers()
    {
        $stmt = $this->select_customers();
        $customer_array = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $customer_array;
    }

    protected function select_customers()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM customers ORDER BY id DESC');
        if (!$stmt->execute()) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function is_customers_empty()
    {
        $stmt = $this->select_customers();
        if ($stmt->rowCount() == 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function customer_exists($email)
    {
        $stmt = $this->select_customer($email);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function customer_exists_by_id($customer_id)
    {
        $stmt = $this->select_customer_by_id($customer_id);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // protected function check_password_match($password, $confirm_password)
    // {
    //     if ($password == $confirm_password) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    protected function check_login_password_match($password, $email)
    {

        $customer_details = $this->fetch_customer($email);
        $db_password = $customer_details->password;

        if (password_verify($password, $db_password)) {
            return true;
        } else {
            return false;
        }
    }

    public function insert_customer($full_name, $email, $phone_number, $password, $address, $country)
    {

        //CHECK IF THE USER IS EXISTING ALREADY
        if ($this->customer_exists($email)) {
            echo "customer already exists!";
            exit();
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->connect()->prepare('INSERT INTO customers (full_name, email, phone_number, password, address, country) VALUES(?,?,?,?,?,?)');
        if ($stmt->execute(array($full_name, $email, $phone_number, $hashed_password, $address, $country))) {
            $_SESSION['customer_email'] = $email;
            echo "Successful! loading to checkout...";

        } else {
            echo "Failed!";
        }

    }

    public function login_customer($email, $password)
    {

        //CHECK IF THE CUSTOMER IS EXISTING ALREADY
        if (!$this->customer_exists($email)) {
            echo "customer does not exist!";
            exit();
        }

        if (!$this->check_login_password_match($password, $email)) {
            echo "Password do not match";
            exit();
        }

        $_SESSION['customer_email'] = $email;

        echo "Logging in, please wait...";
    }

    public function view_customers()
    {
        $stmt = $this->select_customers();
        $customer_array = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $customer_array;
    }

    protected function select_some_customers($limit)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM customers ORDER BY id DESC LIMIT $limit");
        if (!$stmt->execute()) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function fetch_some_customers($limit)
    {
        $stmt = $this->select_some_customers($limit);
        $customer_array = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $customer_array;
    }

    public function update_customer($customer_id, $customer_name, $customer_category, $customer_price, $customer_tag, $customer_publisher, $customer_spec, $customer_desc, $customer_image)
    {

        // CHECK IF THE CATEGORY IS EXIXTING ALREADY
        if (!$this->customer_exists_by_id($customer_id)) {
            echo "Product does not exist";
            exit();
        }

        // CHECK IF THE FILE SIZE IS BIGGER THAN 200KB
        if ($this->check_file_sizes($customer_image, "2004800")) {
            echo "The image should not be more than 200kb";
            exit();
        }

        // CHECK IF THERE IS AN ERROR IN THE FILE
        if ($this->check_file_errors($customer_image)) {
            echo "There is an error in your image";
            exit();
        }

        if (!$this->check_img_file_types($customer_image)) {
            echo "You can't upload a file of this type";
            exit();
        }
        $file_names = "";

        for ($i = 0; $i < count($customer_image['name']); $i++) {
            $file_name = $this->get_unique_file_names($customer_image['name'][$i]);
            $tmp_name = $customer_image['tmp_name'][$i];
            $file_path = "../../images/customers/" . $file_name;

            $upload = move_uploaded_file($tmp_name, $file_path);
            $file_names .= $file_name . ',';
        }

        $file_names = rtrim($file_names, ",");
        $file_names = explode(",", $file_names);
        $file_names = json_encode($file_names);

        if ($upload) {
            $stmt = $this->connect()->prepare('UPDATE customers SET customer_name=?,customer_category=?, customer_price=?, customer_tag=?, customer_publisher=?, customer_spec=?, customer_desc=?, customer_image=? WHERE id=?');
            if ($stmt->execute(array($customer_name, $customer_category, $customer_price, $customer_tag, $customer_publisher, $customer_spec, $customer_desc, $file_names, $customer_id))) {

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
