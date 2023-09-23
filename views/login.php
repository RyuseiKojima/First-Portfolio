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
    <title>Login</title>
</head>
<body class="login">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col col-8">
            <div class="card rounded">
                <div class="row g-0">
                    <!-- Left image -->
                    <div class="col-xl d-none d-xl-block">
                        <img src="../assets/images/enter.jpg" class="img-fluid rounded-start"/>
                    </div> 
                    <!-- Right contents -->
                    <div class="col-xl align-items-center">
                        <div class="card-body p-auto p-xl-5 my-auto">
                            <div class="d-flex my-3 pb-1 h1 fw-bold">
                                Log in
                            </div>
                            <p class="mb-3 pb-3">Sign into your account</p>
                        <form action="../actions/user-actions.php" method="post">
                            <div class="form-outline mb-4">
                                <input type="text" name="username" class="form-control form-control-lg" placeholder="Username"/>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password"  name="password" class="form-control form-control-lg" placeholder="Password"/>
                            </div>
                            <div class="mb-4">
                                <button class="btn btn-dark btn-lg w-auto" type="submit" name="login">Log In</button>
                            </div>
                        </form>
                            <p class="mb-5">
                                Don't have an account?<a href="signup.php">Register here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>