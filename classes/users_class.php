<?php
class Users_class extends File_class
{

    protected function select_user($email)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email=?');
        if (!$stmt->execute(array($email))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

   

    protected function get_user_id($user_name)
    {
        $stmt = $this->select_user($user_name);
        $user_array = $stmt->fetch(PDO::FETCH_OBJ);
        return $user_array->id;

    }

    protected function select_user_by_id($id)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE id=?');
        if (!$stmt->execute(array($id))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function fetch_user_by_id($id)
    {
        $stmt = $this->select_user_by_id($id);
        $user_array = $stmt->fetch(PDO::FETCH_OBJ);
        return $user_array;
    }

    public function fetch_user($email)
    {
        $stmt = $this->select_user($email);
        $user_array = $stmt->fetch(PDO::FETCH_OBJ);
        return $user_array;
    }

    public function get_user_name($id)
    {
        $user_array = $this->fetch_user_by_id($id);
        return $user_array->user_name;
    }

    public function fetch_users()
    {
        $stmt = $this->select_users();
        $user_array = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $user_array;
    }

    protected function select_users()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM users');
        if (!$stmt->execute()) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function is_users_empty()
    {
        $stmt = $this->select_users();
        if ($stmt->rowCount() == 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function user_exists($email)
    {
        $stmt = $this->select_user($email);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function user_exists_by_id($user_id)
    {
        $stmt = $this->select_user_by_id($user_id);
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function check_password_match($password, $confirm_password)
    {
        if ($password == $confirm_password) {
            return true;
        } else {
            return false;
        }
    }

    protected function check_login_password_match($password, $email)
    {

        $user_details = $this->fetch_user($email);
        $db_password = $user_details->password;

        if (password_verify($password, $db_password)) {
            return true;
        } else {
            return false;
        }
    }

    public function insert_user($full_name, $email, $phone_number, $password, $confirm_password)
    {

        //CHECK IF THE USER IS EXISTING ALREADY
        if ($this->user_exists($email)) {
            echo "user already exists!";
            exit();
        }

        if (!$this->check_password_match($password, $confirm_password)) {
            echo "Password do not match";
            exit();
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->connect()->prepare('INSERT INTO users (full_name, email, phone_number, password) VALUES(?,?,?,?)');
        if ($stmt->execute(array($full_name, $email, $phone_number, $hashed_password))) {

            echo "Successfully registered!";

        } else {
            echo "Failed!";
        }

    }

    public function login_user($email, $password)
    {

        //CHECK IF THE USER IS EXISTING ALREADY
        if (!$this->user_exists($email)) {
            echo "User does not exist!";
            exit();
        }

        if (!$this->check_login_password_match($password, $email)) {
            echo "Password do not match";
            exit();
        }

        $_SESSION['user_email'] = $email;

        echo "Logging in, please wait...";
    }

    public function view_users()
    {
        $stmt = $this->select_users();
        $user_array = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $user_array;
    }

    public function update_user($user_id, $user_name, $user_category, $user_price, $user_tag, $user_publisher, $user_spec, $user_desc, $user_image)
    {

        // CHECK IF THE CATEGORY IS EXIXTING ALREADY
        if (!$this->user_exists_by_id($user_id)) {
            echo "Product does not exist";
            exit();
        }

        // CHECK IF THE FILE SIZE IS BIGGER THAN 200KB
        if ($this->check_file_sizes($user_image, "2004800")) {
            echo "The image should not be more than 200kb";
            exit();
        }

        // CHECK IF THERE IS AN ERROR IN THE FILE
        if ($this->check_file_errors($user_image)) {
            echo "There is an error in your image";
            exit();
        }

        if (!$this->check_img_file_types($user_image)) {
            echo "You can't upload a file of this type";
            exit();
        }
        $file_names = "";

        for ($i = 0; $i < count($user_image['name']); $i++) {
            $file_name = $this->get_unique_file_names($user_image['name'][$i]);
            $tmp_name = $user_image['tmp_name'][$i];
            $file_path = "../../images/users/" . $file_name;

            $upload = move_uploaded_file($tmp_name, $file_path);
            $file_names .= $file_name . ',';
        }

        $file_names = rtrim($file_names, ",");
        $file_names = explode(",", $file_names);
        $file_names = json_encode($file_names);

        if ($upload) {
            $stmt = $this->connect()->prepare('UPDATE users SET user_name=?,user_category=?, user_price=?, user_tag=?, user_publisher=?, user_spec=?, user_desc=?, user_image=? WHERE id=?');
            if ($stmt->execute(array($user_name, $user_category, $user_price, $user_tag, $user_publisher, $user_spec, $user_desc, $file_names, $user_id))) {

                $result = "Successfully updated!";

            } else {
                $result = "Failed!";
            }

            echo $result;

        } else {
            echo "File upload failed!";
        }

    }


    public function update_reset_code($email, $reset_code)
    {
          if(!$this->user_exists($email))
          {
            echo "User does not exist!";
            exit();
          }
          

            // $reset_code = uniqid();
            
            $update = $this->connect()->prepare("UPDATE users SET reset_code=? WHERE email=?");
            if(!$update->execute(array($reset_code, $email)))
            {
              echo "Connection failed!";
              exit();
            }
            else
            {
                $_SESSION['resest_email'] = $email;
                echo "Successfully updated";
            }
          
    }


    public function reset_password($email, $reset_code, $new_password, $confirm_password)
    {
          if(!$this->user_exists($email))
          {
            echo "User does not exist!";
            exit();
          }

          if($new_password !== $confirm_password)
          {
            echo "Password do not match!";
            exit();
          }
          

          //GET USER'S RESET CODE
          $user_details = $this->fetch_user($email);
          $db_reset_code = $user_details->reset_code;

          if($reset_code !== $db_reset_code)
          {
            echo "You entered wrong reset code!";
            exit();
          }
          
          $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
          

            
            $update = $this->connect()->prepare("UPDATE users SET password=? WHERE email=?");
            if(!$update->execute(array($hashed_password, $email)))
            {
              $message =  "Connection failed!";
              exit();
            }
            else
            {
                $message =  "Successfully updated";
            }

            return $message;
          
    }

    protected function select_admin($email)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE email=? AND status =?");
        if (!$stmt->execute(array($email, "Admin"))) {
            return false;
        } else {
            return $stmt;
        }
    }

    public function is_admin($email)
    {
        $stmt = $this->select_admin($email);
        
        if($stmt)
        {
          if($stmt->rowCount()>0)
          {
            return true;
          }
          else
          {
            return false;
          }
        }
        else
        {
          return false;
        }
    }

    
}