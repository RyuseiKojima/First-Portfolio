<?php
include "../classes/Opinion.php";

$opinion = new Opinion;

if(isset($_POST['post'])) {
    $opinion->addOpinion($_POST);
}
?>