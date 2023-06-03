<?php
class Update_class extends Delete_class
{

    public function update_item($table, $id, $column, $value)
    {
        $stmt = $this->select_category_by_id($table, $id);
        if ($stmt->rowCount() == 0) {
            echo "No record found";
            exit();
        }

        $update = $this->connect()->query("UPDATE $table SET $column='$value' WHERE id=$id");
        if ($update) {
            echo "Successfully updated!";
        } else {
            echo "Failed";
        }
    }

}
