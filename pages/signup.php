<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
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

    <?php
        require_once('../inc/database.php');

        $signupFirstName_error = "";
        $signupLastName_error = "";
        $signupEmail_error = "";
        $signupPassword_error = "";

        if(isset($_POST['submit'])){
            $isUserSignedup = signUp($_POST);
            $signupFirstName_error =  $isUserSignedup["firstNameError"];
            $signupLastName_error =  $isUserSignedup["lastNameError"];
            $signupEmail_error =  $isUserSignedup["emailError"];
            $signupPassword_error = $isUserSignedup["passwordError"]; 
        }
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 border p-4 shadow-lg bg-transparent">
                <div class="col-12">
                    <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4 d-flex justify-content-center">Sign Up</h3>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First Name" name="signupFirstName">
                            <small class="text-danger"><?= $signupFirstName_error ?></small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last Name" name="signupLastName">
                            <small class="text-danger"><?= $signupLastName_error ?></small>
                        </div>
                        <div class="col-md-12">
                            <input type="file" class="form-control" placeholder="Last Name" name="signupFile">
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control" placeholder="Email" name="signupEmail">
                            <small class="text-danger"><?= $signupEmail_error ?></small>
                        </div>
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="signupPassword">
                        </div>
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="signupConfirmPassword">
                            <small class="text-danger"><?= $signupPassword_error ?></small>
                        </div>
                        <div class="col-12 mt-5">
                            <button type="submit" name="submit" class="btn btn-outline-primary float-end">Sign Up</button>
                            <a href="http://localhost/php_db_project/?page=home"><button type="button" class="btn btn-outline-danger float-end me-2">Cancel</button><a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>