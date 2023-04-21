<?php
class Delete_class extends Db_conn
{
    protected function select_category_by_id($table, $id)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM $table WHERE id=?");
        if (!$stmt->execute(array($id))) {
            $stmt = null;
            echo 'Connection failed';
        } else {
            return $stmt;
        }
    }

    public function delete_item($table, $id)
    {
        $stmt = $this->select_category_by_id($table, $id);
        if ($stmt->rowCount() == 0) {
            echo "No record found";
            exit();
        }

        $delete = $this->connect()->query("DELETE FROM $table WHERE id=$id");
        if ($delete) {
            echo "Successfully deleted";
        } else {
            echo "Failed";
        }
    }

}
