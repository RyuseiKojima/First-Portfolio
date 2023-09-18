<?php
session_start();

include "../classes/User.php";
include "../classes/Post.php";

$user = new User;
$post = new Post;
$user_data = $user->adminGetUser();
$mypost_list = $post->adminGetPost();
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
    <title>Profile</title>
</head>
<body>
    <div class="wrapper w-100 m-auto">
        <!-- Header -->
        <?php
        include 'admin-header.php';
        ?>
        <!-- Profile -->
        <main class="row justify-content-center py-3" style="background-color: lightcyan;">
            <div class="col-4">
                <h2 class="text-center mb-4"><?=$user_data['username']?></h2>
                <div class="row justify-content-center mb-3">
                    <div class="col-6">
                        <?php
                        if($user_data['photo']) {
                        ?>
                            <img src="../assets/images/<?= $user_data['photo']?>" class="d-block mx-auto edit-photo">
                        <?php
                        } else {
                        ?>
                            <i class="fa-solid fa-user text-secondary d-block py-2 text-center edit-icon bg-white"></i>
                        <?php
                        }
                        ?>
                        <a href="admin-edit-profile.php?user_id=<?= $_GET['user_id'] ?>" class="d-block btn btn-dark mt-3 mx-auto" title="Edit profile">Edit Profile <i class="fa-solid fa-pen"></i></a>
                    </div>
                </div>
            </div>
        </main>
        <!-- Post list -->
        <main class="container mt-5">
            <div class="h2">My Posts</div>
            <table class="table table-striped table-hover">
                <thead class="table-secondary">
                    <th>Date Posted</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Detail</th>              
                    <th>Edit</th>               
                </thead>
                <tbody>
                    <?php
                    foreach($mypost_list as $mypost){
                    ?>
                    <tr>
                        <td><?= $mypost['date_posted']?></td>
                        <td>
                            <a href="<?= $mypost['url']?>" class="text-dark" target="_blank">
                                <?= $mypost['title']?>
                            </a>
                        </td>
                        <td><?= $mypost['category']?></td>
                        <td>
                            <a href="admin-post-detail.php?post_id=<?= $mypost['post_id'] ?>" class="btn btn-secondary btn-sm" title="Post detail"><i class='fa-solid fa-angle-double-right'></i></a>
                        </td>
                        <td>
                            <a href="admin-edit-post.php?post_id=<?= $mypost['post_id'] ?>" class="btn btn-warning btn-sm" title="Edit post"><i class="fa-solid fa-pen"></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </main>
        <!-- Good list -->
        <!-- <main class="container mt-5">
            <div class="h2">Good Lists</div>
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <th>Date Posted</th>
                    <th>Title</th>
                    <th>Username</th>
                    <th>Content</th>
                    <th></th>
                    <th></th>           
                </thead>
                <tbody>
                </tbody>
            </table>
        </main> -->
    </div>
</body>
</html>