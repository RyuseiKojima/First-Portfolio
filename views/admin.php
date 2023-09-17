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
    
    <title>Homepage</title>
</head>
<body>
    <div class="wrapper w-100 m-auto">
        <!-- Banner -->
        <div class="banner w-100 position-relative">
            <div class="banner-text position-absolute top-10 w-45">
                <h2 class="display-1 text-uppercase" style="color: #366b8c;">Admin Page</h2>
            </div>
        </div>
        <!-- Contents -->
        <div class="mx-auto mt-3 w-75 overflow-auto">
            <a href="funny.php" class="content-items content-items1 mb-3 float-start position-relative">
                <div class="content-text position-absolute">
                    <h3 class="text-white">Funny</h3>
                </div>
            </a>
            <a href="animal.php" class="content-items content-items2 mb-3 float-start position-relative">
                <div class="content-text position-absolute">
                    <h3 class="text-white">Animal</h3>
                </div>
            </a>
            <a href="baby.php" class="content-items content-items3 mb-3 float-start position-relative">
                <div class="content-text position-absolute">
                    <h3 class="text-white">Baby</h3>
                </div>
            </a>
            <a href="nature.php" class="content-items content-items4 mb-3 float-start position-relative">
                <div class="content-text position-absolute">
                    <h3 class="text-white">Nature</h3>
                </div>
            </a>
        </div>
    </div>
</body>
</html>