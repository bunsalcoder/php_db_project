<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>
    <style>
        body {
            background-image: url("https://t3.ftcdn.net/jpg/03/55/60/70/360_F_355607062_zYMS8jaz4SfoykpWz5oViRVKL32IabTP.jpg");
            background-color: #cccccc;
        }
    </style>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 align-items-center shadow-lg mt-5">
                <div class="login-form bg-transparent mt-4 p-4">
                <?php
                    require_once('../inc/database.php');
                    $message = "";
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        $isLogin = userLogin($_POST);
                        if($isLogin){
                            header("Location: http://localhost/php_db_project/?page=home");
                        }else{
                            $message = "Username or Password is incorrect";
                        }
                    }
                ?>
                    <!-- Login Form -->
                    <form method="post">
                        <h4 class="d-flex justify-content-center">Welcome</h4>
                        <div class="col-12 mt-4">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="userName">
                        </div>
                        <div class="col-12 mt-4">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="userPassword">
                        </div>
                        <div class="col-12 mt-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe"> Remember me </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary float-end">Login</button>
                        </div>
                        <small class="text-danger"><?= $message ?></small>
                    </form>
                    <!-- End Login Form -->
                    <hr class="mt-5">
                    <div class="col-12">
                        <p class="text-center mb-0">Have not account yet? <a href="signup.php">Signup</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>