<?php
    class UsersClass {
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
        public function coba() {
            return 'coba';
        }
        public function register($username, $password,  $password2, $name, $email) {
            
            //ngecek username nya dlu, udah ada apa belom
            
            $checkRegister = $this->pdo->query("SELECT username FROM users WHERE username = '$username'");
            
        
            if ($checkRegister->rowCount() > 0){
                return false;
            }
            else{
                //cek konfimasi password
            
                if ($password !== $password2) { 
                    return false;
                }
                //enkripsiin password
            
                $password = password_hash($password, PASSWORD_DEFAULT);
            
                //nambahin user baru ke database
                $result  = $this->pdo->prepare("INSERT INTO users(
                    username, 
                    password, 
                    password2, 
                    name, 
                    email)
                VALUES (:username, :password, :password2, :name, :email)"); 

                $result->bindParam(':username', $username);
                $result->bindParam(':password', $password);
                $result->bindParam(':password2', $password2);
                $result->bindParam(':name', $name);
                $result->bindParam(':email', $email);
                if($result->execute()) {
                    return true;
                }
                else {
                    return false;
                }
            }
         
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