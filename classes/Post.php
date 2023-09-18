<?php
require_once "Database.php";

class Post extends Database {
    // Add Post
    public function addPost($request) {
        session_start();
        $date_posted = date('Y-m-d');
        $post_name = $request['post_name'];
        $category = $request['category'];
        $site = $request['site'];
        $url = $request['url'];
        $post_message = $request['post_message'];
        $user_id = $_SESSION['user_id'];

        $sql = "INSERT INTO `post`(`date_posted`, `title`, `category`, `site`, `url`, `comment`, `user_id`) VALUES ('$date_posted', '$post_name','$category','$site','$url','$post_message','$user_id')";

        if ($this->conn->query($sql)) {
            header('location: ../views/add-post.php'); 
            exit;
        } else {
            die ("Error: ".$this->conn->error);
        }
    }

    // For Admin
    public function getAllPost() {
        $sql ="SELECT * FROM `post` INNER JOIN `user` ON post.user_id = user.user_id ORDER BY date_posted";

        if($result = $this->conn->query($sql)) {
            return $result;
        } else {
            die('Error retrieving all posts: '.$this->conn->error);
        }
    }

    public function countPost() {
        $sql ="SELECT COUNT(*) FROM `post`";

        if($result = $this->conn->query($sql)) {
            $result_assoc = $result->fetch_assoc();
            return $result_assoc['COUNT(*)'];
        } else {
            die('Error retrieving all posts: '.$this->conn->error);
        }
    }
    
    // Show each post
    public function getFunny() {
        $sql ="SELECT * FROM `post` INNER JOIN `user` ON post.user_id = user.user_id WHERE category = 'funny' ORDER BY date_posted";

        if($result = $this->conn->query($sql)) {
            return $result;
        } else {
            die('Error retrieving all posts: '.$this->conn->error);
        }
    }

    public function getAnimal() {
        $sql ="SELECT * FROM `post` INNER JOIN `user` ON post.user_id = user.user_id WHERE category = 'animal' ORDER BY date_posted";

        if($result = $this->conn->query($sql)) {
            return $result;
        } else {
            die('Error retrieving all posts: '.$this->conn->error);
        }
    }

    public function getBaby() {
        $sql ="SELECT * FROM `post` INNER JOIN `user` ON post.user_id = user.user_id WHERE category = 'baby' ORDER BY date_posted";

        if($result = $this->conn->query($sql)) {
            return $result;
        } else {
            die('Error retrieving all posts: '.$this->conn->error);
        }
    }

    public function getNature() {
        $sql ="SELECT * FROM `post` INNER JOIN `user` ON post.user_id = user.user_id WHERE category = 'nature' ORDER BY date_posted";

        if($result = $this->conn->query($sql)) {
            return $result;
        } else {
            die('Error retrieving all posts: '.$this->conn->error);
        }
    }

    // Edit post
    public function getPost($post_id) {
        $sql ="SELECT * FROM `post` INNER JOIN `user` ON post.user_id = user.user_id WHERE post_id = $post_id";

        if($result = $this->conn->query($sql)) {
            return $result->fetch_assoc();
        } else {
            die('Error retrieving all posts: '.$this->conn->error);
        }
    }

    public function getMyPost() {
        $user_id = $_SESSION['user_id'];

        $sql ="SELECT * FROM `post` INNER JOIN `user` ON post.user_id = user.user_id WHERE user.user_id = $user_id ORDER BY date_posted";

        if($result = $this->conn->query($sql)) {
            return $result;
        } else {
            die('Error retrieving all posts: '.$this->conn->error);
        }
    }

    public function editPost($request) {
        $date_posted = date('Y-m-d');
        $post_name = $request['post_name'];
        $category = $request['category'];
        $site = $request['site'];
        $url = $request['url'];
        $post_message = $request['post_message'];

        $post_id = $_GET['post_id'];
        
        $sql = "UPDATE post SET date_posted = '$date_posted', title = '$post_name', category = '$category', `site` = '$site', `url` = '$url', comment = '$post_message' WHERE post_id = $post_id";

        if($this->conn->query($sql)) {
            header("location: ../views/$category.php");
            exit;
        } else {
            die('Error updation the product: '. $this->conn->error);
        }
    }

    public function getCategorySelected($post_id) {
        $result1 = $this->getPost($post_id);
        $result2 = [
            "funny" => "",
            "animal" => "",
            "baby" => "",
            "nature" => "",
        ];

        if($result1['category'] == 'funny') {
            $result2['funny'] = " selected";
        } elseif($result1['category'] == 'animal') {
            $result2['animal'] = " selected";
        } elseif($result1['category'] == 'baby') {
            $result2['baby'] = " selected";
        } elseif($result1['category'] == 'nature') {
            $result2['nature'] = " selected";
        }
        
        return $result2;
    }

    public function getSiteSelected($post_id) {
        $result1 = $this->getPost($post_id);
        $result2 = [
            "youtube" => "",
            "dailymotion" => "",
            "vemio" => "",
            "facebook" => "",
            "others" => "",
        ];

        if($result1['site'] == 'youtube') {
            $result2['youtube'] = " selected";
        } elseif($result1['site'] == 'dailymotion') {
            $result2['dailymotion'] = " selected";
        } elseif($result1['site'] == 'vemio') {
            $result2['vemio'] = " selected";
        } elseif($result1['site'] == 'facebook') {
            $result2['facebook'] = " selected";
        } elseif($result1['site'] == 'others') {
            $result2['others'] = " selected";
        }
        
        return $result2;
    }

    public function deletePost() {
        $post_id = $_GET['post_id'];
        $post = $this->getPost($post_id);
        $category = $post['category'];
        $sql = "DELETE FROM post WHERE post_id = $post_id";

        if($this->conn->query($sql)) {
            header("location: ../views/$category.php");
            exit;
        } else {
            die('Error deleting the product: '. $this->conn->error);
        }
    }
}
?>