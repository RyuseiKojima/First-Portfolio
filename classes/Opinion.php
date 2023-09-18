<?php
require_once "Database.php";

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

    public function getAllOpinion() {
        $sql ="SELECT * FROM `opinion`";

        if($result = $this->conn->query($sql)) {
            return $result;
        } else {
            die('Error retrieving all opinions: '.$this->conn->error);
        }
    }
    
    public function countOpinion() {
        $sql ="SELECT COUNT(*) FROM `opinion`";

        if($result = $this->conn->query($sql)) {
            $result_assoc = $result->fetch_assoc();
            return $result_assoc['COUNT(*)'];
        } else {
            die('Error retrieving all opinions: '.$this->conn->error);
        }
    }
}
?>