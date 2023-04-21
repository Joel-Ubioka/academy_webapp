<?php
class Sub_category_class extends Product_category_class
{

    protected function select_sub_category($sub_category)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM sub_categories WHERE sub_category=?');
        if (!$stmt->execute(array($sub_category))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    protected function select_sub_category_by_id($id)
    {
        $stmt = $this->connect()->prepare('SELECT sub_category FROM sub_categories WHERE id=?');
        if (!$stmt->execute(array($id))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function fetch_sub_category_by_id($id)
    {
        $stmt = $this->select_sub_category_by_id($id);
        $sub_category_array = $stmt->fetch(PDO::FETCH_OBJ);
        return $sub_category_array;
    }

    protected function select_subcategories()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM sub_categories');
        if (!$stmt->execute()) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function is_subcategories_empty()
    {
        $stmt = $this->select_subcategories();
        if ($stmt->rowCount() == 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function sub_category_exists($sub_category)
    {
        $stmt = $this->select_sub_category($sub_category);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function sub_category_exists_by_id($sub_category_id)
    {
        $stmt = $this->select_sub_category_by_id($sub_category_id);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert_sub_category($category_name, $sub_category)
    {

        // CHECK IF THE CATEGORY IS EXIXTING ALREADY
        if ($this->sub_category_exists($sub_category)) {
            echo "subcategory already exist";
            exit();
        }

        $category_id = $this->get_category_id($category_name);
        $stmt = $this->connect()->prepare('INSERT INTO sub_categories (category_id,sub_category) VALUES(?,?)');
        if ($stmt->execute(array($category_id, $sub_category))) {

            echo "Successfully inserted!";

        } else {
            echo "Failed!";
        }

    }

    public function fetch_sub_categories()
    {
        $stmt = $this->select_subcategories();
        $sub_category_array = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $sub_category_array;
    }

    public function update_sub_category($sub_category_id, $sub_category_name, $sub_category_image)
    {

        // CHECK IF THE CATEGORY IS EXIXTING ALREADY
        if (!$this->sub_category_exists_by_id($sub_category_id)) {
            echo "Category does not exist";
            exit();
        }

        // CHECK IF THE FILE SIZE IS BIGGER THAN 200KB
        if ($this->check_file_size($sub_category_image, "204800")) {
            echo "The image should not be more than 200kb";
            exit();
        }

        // CHECK IF THERE IS AN ERROR IN THE FILE
        if ($this->check_file_error($sub_category_image)) {
            echo "There is an error in your image";
            exit();
        }

        if (!$this->check_img_file_type($sub_category_image['name'])) {
            echo "You can't upload a file of this type";
            exit();
        }

        $file_name = $this->get_unique_file_name($sub_category_image['name']);
        $tmp_name = $sub_category_image['tmp_name'];
        $file_path = "../../images/categories/" . $file_name;

        if (move_uploaded_file($tmp_name, $file_path)) {

            $stmt = $this->connect()->prepare('UPDATE sub_categories SET sub_category_name=?,sub_category_image=? WHERE id=?');
            if ($stmt->execute(array($sub_category_name, $file_name, $sub_category_id))) {

                echo "Successfully updated!";

            } else {
                echo "Failed!";
            }

        } else {
            echo "Failed!";
        }

    }
}
