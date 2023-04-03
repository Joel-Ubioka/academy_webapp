<?php
class Product_category_class extends File_class
{

    protected function select_category($category_name)
    {
        $stmt = $this->connect()->prepare('SELECT category_name FROM product_categories WHERE category_name=?');
        if (!$stmt->execute(array($category_name))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    protected function category_exists($category_name)
    {
        $stmt = $this->select_category($category_name);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert_category($category_name, $category_image)
    {

        // CHECK IF THE CATEGORY IS EXIXTING ALREADY
        if ($this->category_exists($category_name)) {
            echo "Category already exist";
            exit();
        }

        // CHECK IF THE FILE SIZE IS BIGGER THAN 200KB
        if ($this->check_file_size($category_image, "204800")) {
            echo "The image should not be more than 200kb";
            exit();
        }

        // CHECK IF THERE IS AN ERROR IN THE FILE
        if ($this->check_file_error($category_image)) {
            echo "There is an error in your image";
            exit();
        }

        if (!$this->check_img_file_type($category_image['name'])) {
            echo "You can't upload a file of this type";
            exit();
        }

        $file_name = $this->get_unique_file_name($category_image['name']);
        $tmp_name = $category_image['tmp_name'];
        $file_path = "../../images/categories/" . $file_name;

        if (move_uploaded_file($tmp_name, $file_path)) {

            $stmt = $this->connect()->prepare('INSERT INTO product_categories (category_name,category_image) VALUES(?,?)');
            if ($stmt->execute(array($category_name, $file_name))) {
                echo "Successfully uploaded!";
            } else {
                echo "Failed!";
            }

        } else {
            echo "Failed!";
        }

    }
}
