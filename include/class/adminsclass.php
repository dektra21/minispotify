<?php
    class UsersClass {
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
        public function coba() {
            return 'coba';
        }
        public function login($username, $password) {
            $checkUser = $this->pdo->query("SELECT * FROM users WHERE username = '$username'");
            if ($checkUser->rowCount() > 0) {
                //cek password euy
                $row = $checkUser->fetch(PDO::FETCH_OBJ);

                if (password_verify($password, $row->password)){
                    $_SESSION["id"]    = $row->id;
                    $_SESSION["login"] = true;

                    return true;
                }
            }

            return false;
        }
        public function logout() {
            
        } 
        public function loginUser($id){
            $checkUser = $this->pdo->query("SELECT * FROM users WHERE id = '$id'");
            if ($checkUser->rowCount() > 0) {
                //cek password euy
                $row = $checkUser->fetch(PDO::FETCH_OBJ);
                return $row;
            }
            return false;
        }
    }
?>