<?php
    class PlaylistsClass {
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
        public function playlistLagu($user_id){
            $checkPlaylist = $this->pdo->query("SELECT * FROM playlists WHERE user_id = '$user_id'");
            if ($checkPlaylist->rowCount() > 0) {
                while($rows = $checkPlaylist->fetch(PDO::FETCH_OBJ))
                    $data[] = $rows;
                return $data;
            }
            return false;
        }
        public function songbyPlaylist($playlist_id){
            $checksongPlaylist = $this->pdo->query("SELECT playlist_data.id AS playlistdataid,playlist_data.playlist_id,playlist_data.song_id,songs.* FROM playlist_data INNER JOIN songs ON playlist_data.song_id = songs.id WHERE playlist_data.playlist_id = '$playlist_id'");
            if ($checksongPlaylist->rowCount() > 0) {
                while($rows = $checksongPlaylist->fetch(PDO::FETCH_OBJ))
                    $data[] = $rows;
                return $data;
            }
            return false;
        }
        public function addplaylist($name, $song, $user){
            $checkPlaylist = $this->pdo->query("SELECT * FROM playlists WHERE user_id = '$user' AND name = '$name'");
            if ($checkPlaylist->rowCount() == 0) {
                $result  = $this->pdo->prepare("INSERT INTO playlists(
                   user_id,
                   name)
                VALUES (:user_id, :name)"); 

                $result->bindParam(':user_id', $user);
                $result->bindParam(':name', $name);
                if($result->execute()) {
                    $lastid = $this->pdo->lastInsertId();
                    $result1 = $this->pdo->prepare("INSERT INTO playlist_data(
                        playlist_id,
                        song_id) 
                    VALUES (:playlist_id, :song_id)");

                    $result1->bindParam(':playlist_id', $lastid);
                    $result1->bindParam(':song_id', $song);
                    if($result1->execute()) {
                        return true;
                    }
                    else{
                        return false;
                    }
                    
                }
                else {
                    return false;
                }
               
            }

            return false;
       


        }
        public function deletePlaylist($id){
            $result = $this->pdo->prepare("DELETE FROM playlists WHERE id = '$id'");
            $result->BindParam(":id",$id);
            if($result->execute()) {
                    
                return true;
            }
            else {
                return false;
            }
        }
        public function addtoplaylist($id, $song){
            $result1 = $this->pdo->prepare("INSERT INTO playlist_data(
                playlist_id,
                song_id) 
            VALUES (:playlist_id, :song_id)");

            $result1->bindParam(':playlist_id', $id);
            $result1->bindParam(':song_id', $song);
            if($result1->execute()) {
                return true;
            }
            else{
                return false;
            }
        }
    }
?>