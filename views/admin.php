<?php
session_start();

include "../classes/Post.php";
include "../classes/User.php";
include "../classes/Opinion.php";

$post = new Post;
$user = new User;
$opinion = new Opinion;
$post_lists = $post->getAllPost();
$user_lists = $user->getAllUser();
$opinion_lists = $opinion->getAllOpinion();

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
    
    <title>Admin</title>
</head>
<body>
    <div class="wrapper w-100 m-auto">
        <!-- Banner -->
        <nav class="navbar navbar-expand-md navbar-black px-5 bg-black">
            <a href="admin.php" class="navbar-brand link-light">
                <h1 class="text-white">Admin Page</h1>
            </a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="../actions/logout.php" class="nav-link text-white">Logout</a>
                </li>
            </ul>
        </nav>
        
        <!-- Post List -->
        <main class="container mt-5">
            <div class="h2">All Posts (<?= $post->countPost();?> items)</div>
            <table class="table table-warning table-striped table-hover">
                <thead>
                    <th>Date Posted</th>
                    <th>Title</th>
                    <th>Username</th>
                    <th>Category</th>
                    <th>Detail</th>              
                    <th>Edit</th>
                </thead>
                <tbody>
                <?php
                    foreach($post_lists as $post_list){
                    ?>
                    <tr>
                        <td><?= $post_list['date_posted']?></td>
                        <td>
                            <a href="<?= $post_list['url']?>" class="text-dark" target="_blank">
                                <?= $post_list['title']?>
                            </a>
                        </td>
                        <td><?= $post_list['username']?></td>
                        <td><?= $post_list['category']?></td>
                        <td>
                            <a href="admin-post-detail.php?post_id=<?= $post_list['post_id'] ?>" class="btn btn-secondary btn-sm" title="Post detail"><i class='fa-solid fa-angle-double-right'></i></a>
                        </td>
                        <td>
                            <a href="admin-edit-post.php?post_id=<?= $post_list['post_id'] ?>" class="btn btn-warning btn-sm" title="Edit post"><i class="fa-solid fa-pen"></i></a>
                        </td> 
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </main>
        
        <!-- User List -->
        <main class="container mt-5">
            <div class="h2">All Users (<?= $user->countUser();?> items)</div>
            <table class="table table-success table-striped table-hover">
                <thead>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Number</th>
                    <th>Username</th>
                    <th>Profile</th>              
                    <th>Edit</th>
                </thead>
                <tbody>
                    <?php
                    foreach($user_lists as $user_list){
                    ?>
                    <tr>
                        <td><?= $user_list['first_name']." ".$user_list['last_name']?></td>
                        <td><?= $user_list['address']?></td>
                        <td><?= $user_list['contact_number']?></td>
                        <td><?= $user_list['username']?></td>
                        <td>
                            <a href="admin-profile.php?user_id=<?= $user_list['user_id'] ?>" class="btn btn-secondary btn-sm" title="user detail"><i class='fa-solid fa-angle-double-right'></i></a>
                        </td>
                        <td>
                            <a href="admin-edit-profile.php?user_id=<?= $user_list['user_id'] ?>" class="btn btn-warning btn-sm" title="Edit user"><i class="fa-solid fa-pen"></i></a>
                        </td> 
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </main>

        <!-- Opinion List -->
        <main class="container mt-5">
            <div class="h2">All Opinions (<?= $opinion->countOpinion();?> items)</div>
            <table class="table table-secondary table-striped table-hover">
                <thead>
                    <th>Username</th>
                    <th>About</th>
                    <th>Address</th>
                    <th>Opinion</th>
                </thead>
                <tbody>
                    <?php
                    foreach($opinion_lists as $opinion_list){
                    ?>
                    <tr>
                        <td><?= $opinion_list['username']?></td>
                        <td><?= $opinion_list['about']?></td>
                        <td><?= $opinion_list['address']?></td>
                        <td><?= $opinion_list['opinion']?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>