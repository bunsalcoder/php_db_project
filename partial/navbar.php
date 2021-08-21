<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require_once('inc/database.php');
        $allUsers = selectAllUsers();
        
        session_start();
        foreach ($allUsers as $user):
        
        if($user['userName'] == $_SESSION['userLogin']): 
    ?>

    <!-- Header Start-->
    <header class="p-3 bg-dark text-white sticky-top">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="?page=home" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="?page=tech" class="nav-link px-2 text-white">Tech</a></li>
                    <li><a href="?page=travel" class="nav-link px-2 text-white">Travel</a></li>
                    <li><a href="?page=contact" class="nav-link px-2 text-white">Contact</a></li>

                    <?php 
                        if($user['userRole'] == 'admin'): 
                    ?>

                    <li><a href="?page=admin" class="nav-link px-2 text-white">Admin</a></li>

                    <?php 
                        endif; 
                    ?>

                </ul>

                <!-- Check login and signup -->
                <?php 
                    if(!isset($user['userName'])):
                ?>

                <div class="text-end">
                    <a href="pages/login.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
                    <a href="pages/signup.php"><button type="button" class="btn btn-danger">Sign Up</button></a>
                </div>

                <?php
                    endif;
                ?>
                <!-- End login and signup -->

                <!-- Login and Profile -->
                <div class="text-end">
                    <a><img src="assets/img/<?= $user['userProfile']?>" width="40" height="40" class="rounded-circle me-2"></a>
                    <a href="pages/login.php"><button type="button" class="btn btn-outline-light me-2">Log out</button></a>
                </div>
                <!-- End Login and Profile -->

            </div>
        </div>
    </header>
    <!-- Header End-->

    <?php 
        endif;
        endforeach; 
    ?>
</body>
</html>