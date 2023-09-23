<?php
session_start();

include "../classes/Post.php";

$post = new Post;

$post_details = $post->getPost($_GET['post_id']);
$category = $post->getCategorySelected($_GET['post_id']);
$site = $post->getSiteSelected($_GET['post_id']);
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
    <title>Edit Post</title>
</head>
<body style="background:#a6bbcc;">
    <div class="wrapper w-100 m-auto">
        <!-- Header -->
        <?php
        include 'header.php';
        ?>
        <!-- Edit Post -->
        <div class="container w-50 mx-auto">
            <a href="<?= $_SERVER['HTTP_REFERER']?>" class="text-dark text-decoration-none my-3 d-block w-25"><i class="fa-solid fa-chevron-left me-2"></i>Back</a>
            <h2 class="display-4 text-center my-4">Edit Post</h2>
            <div class="col-10 mx-auto">
                <form action="../actions/post-actions.php?post_id=<?= $_GET['post_id']?>" method="post">
                    <input type="text" name="post_name" class="form-control mb-3 border-3 border-primary border-top-0 border-end-0 border-start-0 rounded-0 shadow-none" value="<?= $post_details['title']?>" required autofocus>
                    <select name="category" class="form-select mb-3 border-3 border-primary border-top-0 border-end-0 border-start-0 rounded-0 shadow-none" required>
                        <option value="funny"<?= $category['funny']?>>Funny</option>
                        <option value="animal"<?= $category['animal']?>>Animal</option>
                        <option value="baby"<?= $category['baby']?>>Baby</option>
                        <option value="nature"<?= $category['nature']?>>Nature</option>
                    </select>
                    <select name="site" class="form-select mb-3 border-3 border-primary border-top-0 border-end-0 border-start-0 rounded-0 shadow-none" required>
                        <option value="youtube"<?= $site['youtube']?>>YouTube</option>
                        <option value="dailymotion"<?= $site['dailymotion']?>>Dailymotion</option>
                        <option value="vemio"<?= $site['vemio']?>>Vemio</option>
                        <option value="facebook"<?= $site['facebook']?>>Facebook</option>
                        <option value="others"<?= $site['others']?>>Others</option>
                    </select>
                    <input type="url" name="url"  class="form-control mb-3 border-3 border-primary border-top-0 border-end-0 border-start-0 rounded-0 shadow-none" value="<?= $post_details['url']?>" pattern="https://.*" size="30" required />
                    <textarea name="post_message" class="form-control mb-3 border-3 border-primary shadow-none" rows="4"><?= $post_details['comment']?></textarea>
                    <button type="submit" name="edit_post" class="btn btn-primary w-100 mb-3 text-uppercase">Post</button>
                </form>
                <button type="button" class="btn btn-danger w-100 mb-3 text-uppercase" data-bs-toggle="modal" data-bs-target="#deletePost">Delete</button>
            </div>
        </div>
    </div> 

    <!-- Delete Window -->
    <div class="modal fade" id="deletePost" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 h4">Delete Your Post</div>
                <div class="modal-body border-0">Do you really delete your post?</div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <form action="../actions/post-actions.php?post_id=<?= $_GET['post_id']?>" method="post">
                        <button type="submit" class="btn btn-danger" name="delete_post">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>