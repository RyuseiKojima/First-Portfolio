<?php
session_start();

include "../classes/User.php";

$user = new User;
$user_data = $user->adminGetUser();
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
    <title>Edit Profile</title>
</head>
<body>
    <div class="wrapper w-100 m-auto">
        <!-- Header -->
        <?php
        include 'admin-header.php';
        ?>
        <!-- Edit Profile -->
        <main class="row justify-content-center py-3" style="background-color: lightcyan;">
            <div class="col-4">
                <h2 class="text-center mb-4">Edit User</h2>
                <form action="../actions/user-actions.php?user_id=<?= $_GET['user_id']?>" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-center mb-3">
                        <div class="col-6">
                            <?php
                            if($user_data['photo']) {
                            ?>
                                <img src="../assets/images/<?= $user_data['photo']?>" class="d-block mx-auto edit-photo">
                            <?php
                            } else {
                            ?>
                                <i class="fa-solid fa-user text-secondary d-block text-center edit-icon"></i>
                            <?php
                            }
                            ?>
                            <input type="file" name="photo" id="" class="form-control mt-2" accept="image/*">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="first-name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first-name" class="form-control" value="<?= $user_data['first_name'] ?>" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last-name" class="form-control" value="<?= $user_data['last_name'] ?>" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label fw-bold">Username</label>
                        <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" value="<?= $user_data['username'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="mail" name="address" id="address" class="form-control" value="<?= $user_data['address'] ?>" required>
                    </div>
                    <div class="mb-4">
                        <label for="contact-number" class="form-label">Number</label>
                        <input type="text" name="contact_number" id="contact-number" class="form-control" value="<?= $user_data['contact_number'] ?>" required>
                    </div>
                    <div class="text-end">
                        <a href="admin-profile.php?user_id=<?= $_GET['user_id'] ?>" class="btn btn-secondary btn-sm">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-sm px-5" name="admin_edit">Save</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>