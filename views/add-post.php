<?php
session_start();
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
    <title>Add Post</title>
</head>
<body style="background:#a6bbcc;">
    <div class="wrapper w-100 m-auto">
        <!-- Header -->
        <?php
        include 'header.php';
        ?>
        <!-- Add Post -->
        <div class="container w-50 mx-auto">
            <a href="index.php" class="text-dark text-decoration-none my-3 d-block w-25"><i class="fa-solid fa-chevron-left me-2"></i>Home</a>
            <h2 class="display-4 text-center my-4">Add Post</h2>
            <div class="col-10 mx-auto">
                <form action="../actions/post-actions.php" method="post">
                    <input type="text" name="post_name" class="form-control mb-3 border-3 border-primary border-top-0 border-end-0 border-start-0 rounded-0 shadow-none" placeholder="TITLE" required autofocus>
                    <select name="category" class="form-select mb-3 border-3 border-primary border-top-0 border-end-0 border-start-0 rounded-0 shadow-none" required>
                        <option value="" hidden>CATEGORY</option>
                        <option value="funny">Funny</option>
                        <option value="animal">Animal</option>
                        <option value="baby">Baby</option>
                        <option value="nature">Nature</option>
                    </select> 
                    <select name="site" class="form-select mb-3 border-3 border-primary border-top-0 border-end-0 border-start-0 rounded-0 shadow-none" required>
                        <option value="" hidden>SITE</option>
                        <option value="youtube">YouTube</option>
                        <option value="dailymotion">Dailymotion</option>
                        <option value="vemio">Vemio</option>
                        <option value="facebook">Facebook</option>
                        <option value="others">Others</option>
                    </select>
                    <input type="url" name="url"  class="form-control mb-3 border-3 border-primary border-top-0 border-end-0 border-start-0 rounded-0 shadow-none"  placeholder="https://example.com" pattern="https://.*" size="30" required />
                    <textarea name="post_message" class="form-control mb-3 border-3 border-primary shadow-none" rows="4" placeholder="COMMENT"></textarea>
                    <button type="submit" name="add_post" class="btn btn-primary w-100 mt-5 text-uppercase">Post</button>
                </form>
            </div>
        </div>
        <!-- Footer -->
        <?php
        include 'footer.php';
        ?>
    </div>
</body>
</html>