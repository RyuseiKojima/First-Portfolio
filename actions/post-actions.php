<?php
include "../classes/Post.php";

$post = new Post;

if(isset($_POST['add_post'])) {
    $post->addPost($_POST);
} elseif(isset($_POST['edit_post'])) {
    $post->editPost($_POST);
} elseif(isset($_POST['delete_post'])) {
    $post->deletePost();
}
?>