<?php
class File_class extends Db_conn
{

    public function check_file_size($file, $size)
    {
        $file_size = $file['size'];

        if ($file_size > $size) {
            return true;
        } else {
            return false;
        }
    }

    public function get_file_ext($file_name)
    {
        $file_array = explode('.', $file_name);
        $file_ext = array_pop($file_array);
        return $file_ext;
    }

    public function file_name_without_ext($file_name)
    {
        $file_name_no_ext = substr($file_name, 0, -4);
        return $file_name_no_ext;
    }

    public function get_unique_file_name($file_name)
    {
        $unique_file_name = $this->file_name_without_ext($file_name) . "_" . uniqid() . "." . $this->get_file_ext($file_name);
        return $unique_file_name;
    }

    public function check_file_error($file)
    {
        $file_error_count = $file['error'];
        if ($file_error_count > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function check_img_file_type($file_name)
    {
        $ext_array = array("jpg", "webp", "png", "gif", "jpeg");
        $file_ext = $this->get_file_ext($file_name);
        if (in_array($file_ext, $ext_array)) {
            return true;
        } else {
            return false;
        }
    }
}
