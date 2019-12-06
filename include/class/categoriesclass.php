<?php
    class CategoriesClass {
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
        public function newCategories() {
            $checkCategories = $this->pdo->query("SELECT * FROM categories");
            if ($checkCategories->rowCount() > 0) {
                while($rows = $checkCategories->fetch(PDO::FETCH_OBJ))
                    $data[] = $rows;
                return $data;
            }
            return false;
        }
        public function add($name) {
            $check = $this->pdo->query("SELECT * FROM categories WHERE nama = '$name'");
            
        
            if ($check->rowCount() > 0){
                return false;
            }
            else{
                $result  = $this->pdo->prepare("INSERT INTO categories(
                   nama)
                VALUES (:nama)"); 

                $result->bindParam(':nama', $name);
                if($result->execute()) {
                    return true;
                }
                else {
                    return false;
                }
            }
        }
    }
?>