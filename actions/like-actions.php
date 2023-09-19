<?php
include "../classes/Like.php";

$like = new Like;

if(isset($_POST['like'])) {
    $like->makeLike();
}
?>