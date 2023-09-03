<?php
session_start();

include "../classes/Post.php";

$post = new Post;
$animal_list = $post->getAnimal();
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
    <title>Animal</title>
</head>
<body>
    <div class="wrapper w-100 m-auto">
        <!-- Header -->
        <?php
        include 'header.php';
        ?>
        <!-- Banner -->
        <div class="banner-animal w-100 position-relative">
            <div class="bkRGBA">
                <div class="banner-text position-absolute top-10 w-45">
                    <h2 class="display-1 text-uppercase text-primary">Animal</h2>
                    <p class="text-dark">Various animals living on the earth</p>
                </div>
            </div>
        </div>
        <!-- Table -->
        <main class="container mt-5">
            <table class="table table-primary table-striped table-hover">
                <thead>
                    <th>Date Posted</th>
                    <th>Title</th>
                    <th>Username</th>
                    <th>Detail</th>              
                    <th>Edit</th>              
                </thead>
                <tbody>
                    <?php
                    foreach($animal_list as $animal){
                    ?>
                    <tr>
                        <td><?= $animal['date_posted']?></td>
                        <td>
                            <a href="<?= $animal['url']?>" class="text-dark" target="_blank">
                                <?= $animal['title']?>
                            </a>
                        </td>
                        <td><?= $animal['username']?></td>
                        <td>
                            <a href="post-detail.php?post_id=<?= $animal['post_id'] ?>" class="btn btn-secondary btn-sm" title="Post detail"><i class='fa-solid fa-angle-double-right'></i></a>
                        </td>
                        <td>
                            <a href="edit-post.php?post_id=<?= $animal['post_id'] ?>" class="btn btn-warning btn-sm" title="Edit post"><i class="fa-solid fa-pen"></i></a>
                        </td>
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