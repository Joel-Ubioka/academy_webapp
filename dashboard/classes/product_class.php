<?php
class Product_class extends File_class
{

    protected function select_product($product_name)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM products WHERE product_name=?');
        if (!$stmt->execute(array($product_name))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    protected function get_product_id($product_name)
    {
        $stmt = $this->select_product($product_name);
        $product_array = $stmt->fetch(PDO::FETCH_OBJ);
        return $product_array->id;

    }

    protected function select_product_by_id($id)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM products WHERE id=?');
        if (!$stmt->execute(array($id))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function fetch_product_by_id($id)
    {
        $stmt = $this->select_product_by_id($id);
        $product_array = $stmt->fetch(PDO::FETCH_OBJ);
        return $product_array;
    }

    public function get_product_name($id)
    {
        $product_array = $this->fetch_product_by_id($id);
        return $product_array->product_name;
    }

    public function fetch_products()
    {
        $stmt = $this->select_products();
        $product_array = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $product_array;
    }

    protected function select_products()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM products');
        if (!$stmt->execute()) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function is_products_empty()
    {
        $stmt = $this->select_products();
        if ($stmt->rowCount() == 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function product_exists($product_name)
    {
        $stmt = $this->select_product($product_name);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function product_exists_by_id($product_id)
    {
        $stmt = $this->select_product_by_id($product_id);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert_product($product_name, $product_category, $product_price, $product_tag, $product_publisher, $product_spec, $product_desc, $product_image)
    {

        // CHECK IF THE PRODUCT IS EXIXTING ALREADY
        if ($this->product_exists($product_name)) {
            echo "Product already exist";
            exit();
        }

        // CHECK IF THE FILE SIZE IS BIGGER THAN 200KB
        if ($this->check_file_sizes($product_image, "204800")) {
            echo "The image should not be more than 200kb";
            exit();
        }

        // CHECK IF THERE IS AN ERROR IN THE FILE
        if ($this->check_file_errors($product_image)) {
            echo "There is an error in your image";
            exit();
        }

        if (!$this->check_img_file_types($product_image)) {
            echo "You can't upload a file of this type";
            exit();
        }

        for ($i = 0; $i < count($product_image['name']); $i++) {
            $file_name = $this->get_unique_file_names($product_image['name'][$i]);
            $tmp_name = $product_image['tmp_name'][$i];
            $file_path = "../../images/products/" . $file_name;

            if (move_uploaded_file($tmp_name, $file_path)) {

                $stmt = $this->connect()->prepare('INSERT INTO products (product_name,product_category,product_price,product_tag,product_publisher,product_spec,product_desc,product_image) VALUES(?,?,?,?,?,?,?,?)');
                if ($stmt->execute(array($product_name, $product_category, $product_price, $product_tag, $product_publisher, $product_spec, $product_desc, $file_name))) {

                    $result = "Successfully inserted!";

                } else {
                    $result = "Failed!";
                    break;
                }

            } else {
                $result = "Failed!";
                break;
            }
        }
        echo $result;
    }

    public function view_products()
    {
        $stmt = $this->select_products();
        $product_array = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $product_array;
    }

    public function update_product($product_id, $product_name, $product_image)
    {

        // CHECK IF THE CATEGORY IS EXIXTING ALREADY
        if (!$this->product_exists_by_id($product_id)) {
            echo "Category does not exist";
            exit();
        }

        // CHECK IF THE FILE SIZE IS BIGGER THAN 200KB
        if ($this->check_file_size($product_image, "204800")) {
            echo "The image should not be more than 200kb";
            exit();
        }

        // CHECK IF THERE IS AN ERROR IN THE FILE
        if ($this->check_file_error($product_image)) {
            echo "There is an error in your image";
            exit();
        }

        if (!$this->check_img_file_type($product_image['name'])) {
            echo "You can't upload a file of this type";
            exit();
        }

        $file_name = $this->get_unique_file_name($product_image['name']);
        $tmp_name = $product_image['tmp_name'];
        $file_path = "../../images/products/" . $file_name;

        if (move_uploaded_file($tmp_name, $file_path)) {

            $stmt = $this->connect()->prepare('UPDATE products SET product_name=?,product_image=? WHERE id=?');
            if ($stmt->execute(array($product_name, $file_name, $product_id))) {

                echo "Successfully updated!";

            } else {
                echo "Failed!";
            }

        } else {
            echo "Failed!";
        }

    }
}
