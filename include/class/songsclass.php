<?php
    class SongsClass {
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
        public function newSong() {
            $checkSong = $this->pdo->query("SELECT * FROM songs ORDER BY id DESC limit 10");
            if ($checkSong->rowCount() > 0) {
                while($rows = $checkSong->fetch(PDO::FETCH_OBJ))
                    $data[] = $rows;
                return $data;
            }
            return false;
        }
        public function songbyCategory($category) {
            $checkSong = $this->pdo->query("SELECT * FROM songs WHERE category_id = $category");
            if ($checkSong->rowCount() > 0) {
                while($rows = $checkSong->fetch(PDO::FETCH_OBJ))
                    $data[] = $rows;
                return $data;
            }
            return false;
        }
        public function addSongs($name,$file,$cover,$artist,$category_id){
            $check = $this->pdo->query("SELECT * FROM songs WHERE name = '$name'");
            
        
            if ($check->rowCount() > 0){
                return false;
            }
            else{
                $foldersong = '../../assets/songs/';
                $foldercover = '../../assets/cover/';
                $array = explode('.',$file['name']);
                $extension = end($array);
                $namalagubaru = time().'.'.$extension;
                $uploadsong = move_uploaded_file($file['tmp_name'], $foldersong.$namalagubaru);
                $uploadcover = move_uploaded_file($cover['tmp_name'], $foldercover.$cover['name']);
                $result  = $this->pdo->prepare("INSERT INTO songs(
                   name,
                   file,
                   cover,
                   artist,
                   category_id)
                VALUES (:name, :file, :cover, :artist, :category_id)"); 

                $result->bindParam(':name', $name);
                $result->bindParam(':file', $namalagubaru);
                $result->bindParam(':cover', $cover['name']);
                $result->bindParam(':artist', $artist);
                $result->bindParam(':category_id', $category_id);
                if($result->execute()) {
                    
                    return true;
                }
                else {
                    return false;
                }
            }
        }
        public function delete($id){
            $result = $this->pdo->prepare("DELETE FROM  playlist_data WHERE id = '$id'");
            $result->BindParam(":id",$id);
            if($result->execute()) {
                    
                return true;
            }
            else {
                return false;
            }
        }
    }    
?>