<?php
session_start();

include "../classes/Post.php";

$post = new Post;

$post_details = $post->getPost($_GET['post_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Vithkuqi:wght@700&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Post</title>
</head>
<body style="background:#a6bbcc;">
    <div class="wrapper w-100 m-auto">
        <!-- Header -->
        <?php
        include 'admin-header.php';
        ?>
        <!-- Post Detail -->
        <div class="container w-50 mx-auto">
            <div class="row my-4">
                <div class="col text-start">
                    <a href="<?= $_SERVER['HTTP_REFERER']?>" class="text-dark text-decoration-none d-block"><i class="fa-solid fa-chevron-left me-2"></i>Back</a>
                </div>
                <div class="col text-end">
                    <a href="admin-edit-post.php?post_id=<?= $_GET['post_id']?>" class="text-dark text-decoration-none d-block"><i class="fa-solid fa-pen me-1"></i>Edit</a>
                </div>
            </div>
            <article class="p-3 bg-light">
                <header>
                    <a href="<?= $post_details['url']?>" class="text-dark text-decoration-none" target="_blank">
                        <div class="h3"><?= $post_details['title']?></div>
                    </a>
                    <span>Date: <?= $post_details['date_posted']?></span>
                    &ensp;
                    <span>By: <?= $post_details['username']?></span>
                    &ensp;
                    <span>Category: <?= $post_details['category']?></span>
                </header>
                    <p class="py-5 h5"><?= $post_details['comment']?></p>
                <footer>
                    <span>Site: <?= $post_details['site']?></span>
                    &ensp;
                    <span>
                        url: <a href="<?= $post_details['url']?>" target="_blank"><?= $post_details['url']?></a>
                    </span>
                </footer>
            </article>
        </div>
    </div>
</body>
</html>