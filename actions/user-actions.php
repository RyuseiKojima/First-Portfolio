<?php
include "../classes/User.php";

$user = new User;

if(isset($_POST['register'])) {
    $user->register($_POST);
} elseif(isset($_POST['login'])) {
    $user->login($_POST);
} elseif(isset($_POST['edit'])) {
    $user->editProfile($_POST, $_FILES);
} elseif(isset($_POST['admin_edit'])) {
    $user->adminEditProfile($_POST, $_FILES);
}
?>