<?php
session_start();

include "../classes/Post.php";
include "../classes/Like.php";

$post = new Post;
$like = new Like;
$baby_list = $post->getbaby();
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
    <title>Baby</title>
</head>
<body>
    <div class="wrapper w-100 m-auto">
        <!-- Header -->
        <?php
        include 'header.php';
        ?>
        <!-- Banner -->
        <div class="banner-baby w-100 position-relative">
            <div class="bkRGBA">
                <div class="banner-text position-absolute top-10 w-45">
                    <h2 class="display-1 text-uppercase" style="color: #F79428;">Baby</h2>
                    <p class="text-dark">Adorable baby gestures and behaviors</p>
                </div>
            </div>
        </div>
        <!-- Table -->
        <main class="container mt-5">
            <table class="table table-warning table-striped table-hover">
                <thead>
                    <th>Date Posted</th>
                    <th>Title (Link)</th>
                    <th>Username</th>
                    <?php if(empty($_SESSION['user_id'])) {
                        // Empty
                    } else {?>
                        <th>Good</th>              
                        <th>Detail</th>              
                        <th>Edit</th>  
                    <?php }?>             
                </thead>
                <tbody>
                    <?php
                    foreach($baby_list as $baby){
                    ?>
                    <tr>
                        <td><?= $baby['date_posted']?></td>
                        <td>
                            <a href="<?= $baby['url']?>" class="text-dark" target="_blank">
                                <?= $baby['title']?>
                            </a>
                        </td>
                        <td><?= $baby['username']?></td>
                        <?php if(empty($_SESSION['user_id'])) {
                            // Empty
                        } else {?>
                            <td>
                                <?php $like->getLike($baby['user_id'], $baby['post_id']);?>
                            </td>
                            <td>
                                <a href="post-detail.php?post_id=<?= $baby['post_id'] ?>" class="btn btn-secondary btn-sm" title="Post detail"><i class='fa-solid fa-angle-double-right'></i></a>
                            </td>
                            <td>
                                <?php if($_SESSION['user_id'] == $baby['user_id']) {?>
                                    <a href="edit-post.php?post_id=<?= $baby['post_id'] ?>" class="btn btn-warning btn-sm" title="Edit post"><i class="fa-solid fa-pen"></i></a>
                                <?php }?>
                            </td> 
                        <?php }?>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </main>
        <!-- Footer -->
        <?php
        include 'footer.php';
        ?>  
    </div>
</body>
</html>