<?php
class Search_class extends Db_conn
{
    public function search_product($search)
    {
        $stmt = $this->connect()->query("SELECT * FROM products WHERE product_name LIKE '%$search%' OR product_tag LIKE '%$search%' OR product_publisher LIKE '%$search%'");
        if (!$stmt->execute()) {
            echo "Connection failed!";
        } else {
            $search_result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $search_result;
        }
    }
}
