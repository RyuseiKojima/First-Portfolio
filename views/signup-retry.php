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
    <title>Signup</title>
</head>
<body class="signup">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col col-8">
            <div class="card rounded">
                <div class="row g-0">
                    <!-- Left image -->
                    <div class="col-xl d-none d-xl-block">
                    <img src="../assets/images/start.jpg" class="img-fluid rounded-start"/>
                    </div>
                    <!-- Right contents -->
                    <div class="col-xl align-items-center">
                        <div class="card-body p-auto p-xl-5">
                            <div class="d-flex pb-1 h1 fw-bold">
                            Sign up
                            </div>
                            <p class="mb-2 pb-1">Every data is needed</p>
                            <form action="../actions/user-actions.php" method="post">
                                <div class="row mb-2">
                                    <div class='mb-2 alert alert-danger text-center fw-bold' role='alert'>Username is used.</div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-2">
                                            <input type="text"  name="first_name" class="form-control form-control-lg" placeholder="First Name" required autofocus/> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-2">
                                            <input type="text"  name="last_name" class="form-control form-control-lg" placeholder="Last Name" required/> 
                                        </div>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <input type="email" name="address" class="form-control form-control-lg" placeholder="Address" required/> 
                                    </div>
                                    <div class="form-outline mb-2">
                                        <input type="text" name="number" class="form-control form-control-lg" placeholder="Contact Number" required/> 
                                    </div>
                                    <div class="form-outline mb-2">
                                        <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required/> 
                                    </div>
                                    <div class="form-outline mb-2">
                                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required/> 
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-8">
                                            <button class="btn btn-dark btn-lg px-5" type="submit"name="register">Sign Up</button>
                                        </div>
                                        <div class="col-4 position-relative">
                                            <p class="position-absolute">
                                                Have an account? <a href="login.php">Log in</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>