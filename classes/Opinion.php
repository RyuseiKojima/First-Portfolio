<?php
require_once "Database.php";
session_start();

class Opinion extends Database {
    public function addOpinion($request) {
        $username = $request['username'];
        $about = $request['about'];
        $address = $request['address'];
        $opinion = $request['post_message'];

        $sql = "INSERT INTO `opinion`(`username`, `about`, `address`, `opinion`) VALUES ('$username','$about','$address','$opinion')";

        if ($this->conn->query($sql)) {
            header('location: index.php'); 
            exit;
        } else {
            die ("Error: ".$this->conn->error);
        }
    }
}
?>