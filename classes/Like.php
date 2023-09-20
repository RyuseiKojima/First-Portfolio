<?php
require_once "Database.php";

class Like extends Database {
    // Check good or not, after that change good button status
    public function makeLike() {
        $user_id = $_GET['user_id'];
        $post_id = $_GET['post_id'];
        $g_user_id = $_GET['g_user_id'];

        $check_sql = "SELECT *, COUNT(*) FROM `like` WHERE `user_id` = $user_id AND `post_id` = $post_id AND `g_user_id` = $g_user_id";

        if($check = $this->conn->query($check_sql)) {
            $check_assoc = $check->fetch_assoc();
            if($check_assoc['COUNT(*)'] == 0) {
                $insert_sql = "INSERT INTO `like`(`user_id`, `post_id`, `g_user_id`, `good`) VALUES ($user_id,$post_id,$g_user_id,1)";
                $this->conn->query($insert_sql);
            } else {
                $like_id = $check_assoc['like_id'];
                $get_good_sql = "SELECT `good` FROM `like` WHERE `like_id` = $like_id";
                $get_good = $this->conn->query($get_good_sql);
                $get_good_assoc = $get_good->fetch_assoc();
                if ($get_good_assoc['good'] == 1) {
                    $update_good_sql = "UPDATE `like` SET `good`=0 WHERE `like_id` = $like_id";
                } else {
                    $update_good_sql = "UPDATE `like` SET `good`=1 WHERE `like_id` = $like_id";
                }
                $this->conn->query($update_good_sql);
            }
            header('location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            die('Error retrieving all likes: '.$this->conn->error);
        }
    }

    public function getLike($user_id, $post_id) {
        $g_user_id = $_SESSION['user_id'];

        $color_sql = "SELECT COUNT(*) FROM `like` WHERE `post_id` = $post_id AND `g_user_id` = $g_user_id AND `good` = 1";
        $color_assoc = $this->conn->query($color_sql)->fetch_assoc();
        $color = $color_assoc['COUNT(*)'];

        $count_sql = "SELECT COUNT(*) FROM `like` WHERE `post_id` = $post_id AND `good` = 1";
        $count_assoc = $this->conn->query($count_sql)->fetch_assoc();
        $count = $count_assoc['COUNT(*)'];

        if($color == 1) {
            ?>
            <form action="../actions/like-actions.php?user_id=<?= $user_id?>&post_id=<?= $post_id?>&g_user_id=<?= $g_user_id?>" method="post">
                <button type="submit" class="btn btn-sm btn-danger" name="like"><i class="fa-regular fa-heart"></i></a>  <?= $count?></button>
            </form>
            <?php 
        } elseif($color == 0) {
            ?>
            <form action="../actions/like-actions.php?user_id=<?= $user_id?>&post_id=<?= $post_id?>&g_user_id=<?= $g_user_id?>" method="post">
                <button type="submit" class="btn btn-sm" name="like"><i class="fa-regular fa-heart"></i></a>  <?= $count?></button>
            </form>
            <?php 
        }
    }

}
?>