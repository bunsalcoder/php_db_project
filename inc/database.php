<?php

    // Databse function
    function db(){
        return new mysqli('localhost', 'root', '', 'php_db_project');
    }


    //___________________________________________TECH TABLE____________________________________________________//

    // Select all tech from database
    function selectAllTech(){
        return db()->query("SELECT * FROM post WHERE categoryID = 1 ORDER BY postID DESC");
    }

    // Select one tech
    function selectOneTech($id){
        return db()->query("SELECT * FROM post WHERE postID = $id");
    }


    //___________________________________________TRAVEL TABLE____________________________________________________//

    // Select all travel places from database
    function selectAllTravelPlace(){
        return db()->query("SELECT * FROM post WHERE categoryID = 2 ORDER BY postID DESC");
    }

    // Select one travel place
    function selectOneTravelPlace($id){
        return db()->query("SELECT * FROM post WHERE postID = $id");
    }


    // _________________________________________TECH X TRAVEL____________________________________//

    // Select both tech and travel post from database
    function selectAllTechAndTravelPlace(){
        return db()->query("SELECT * FROM post ORDER BY postID DESC");
    }

    // Select one tech and one travel place
    function selectOneTechAndOneTravelPlace($id){
        return db()->query("SELECT * FROM post WHERE postID = $id");
    }

    // Create Post
    function createPost($value) {
        $postTitle = $value['postTitle'];
        $postImg = $_FILES['file']['name'];
        $postDescription = $value['postDescription'];
        $postDate = $value['postDate'];
        $categoryID = $value['categoryID'];
        $tmp_name = $_FILES['file']['tmp_name'];

        $dir = '../assets/img/';
        move_uploaded_file($tmp_name, $dir.$postImg);
    
        return db()->query("INSERT INTO post (postTitle, postImg, postDescription, postDate, categoryID) VALUES ('$postTitle', '$postImg', '$postDescription', '$postDate', '$categoryID')");
    }

    // Delete Post
    function deletePost($id){
        return db()->query("DELETE FROM post WHERE postID = $id");
    }

    // Update Post
    function updatePost($value){
        $postTitle = $value['postTitle'];
        $postImg = $_FILES['file']['name'];
        $postDescription = $value['postDescription'];
        $postDate = $value['postDate'];
        $categoryID = $value['categoryID'];
        $id = $value['id'];

        $tmp_name = $_FILES['file']['tmp_name'];

        $dir = '../assets/img/';
        move_uploaded_file($tmp_name, $dir.$postImg);

        return db()->query("UPDATE post SET postTitle = '$postTitle', postImg = '$postImg', postDescription = '$postDescription', postDate = '$postDate', categoryID = '$categoryID' WHERE postID = $id");
    }




    //___________________________________________USER TABLE____________________________________________________//

    // Select all users from database
    function selectAllUsers(){
        return db()->query("SELECT * FROM users ORDER BY userID ASC");
    }

    // Select one user
    function selectOneUser($id){
        return db()->query("SELECT * FROM users WHERE userID = $id");
    }

    // Create user
    function createUser($value) {
        $userName = $value['userName'];
        $userProfile = $_FILES['userProfile']['name'];
        $userRole = $value['userRole'];
        $userEmail = $value['userEmail'];
        $userPassword = $value['userPassword'];
        $tmp_name = $_FILES['userProfile']['tmp_name'];

        $dir = '../assets/img/';
        move_uploaded_file($tmp_name, $dir.$userProfile);

        $passEncrypt = password_hash($userPassword, PASSWORD_DEFAULT);
    
        return db()->query("INSERT INTO users (userName, userProfile, userRole, userEmail, userPassword) VALUES ('$userName', '$userProfile', '$userRole', '$userEmail', '$passEncrypt')");
    }

    // Delete user
    function deleteUser($id){
        return db()->query("DELETE FROM users WHERE userID = $id");
    }

    // Update User
    function updateUser($value){
        $userName = $value['userName'];
        $postImg = $_FILES['userProfile']['name'];
        $userRole = $value['userRole'];
        $userEmail = $value['userEmail'];
        $userPassword = $value['userPassword'];
        $id = $value['id'];
        $tmp_name = $_FILES['userProfile']['tmp_name'];

        $dir = '../assets/img/';
        move_uploaded_file($tmp_name, $dir.$postImg);

        $passEncrypt = password_hash($userPassword, PASSWORD_DEFAULT);

        return db()->query("UPDATE users SET userName = '$userName', userProfile = '$postImg', userRole = '$userRole', userEmail = '$userEmail', userPassword = '$passEncrypt' WHERE userID = $id");
    }


    //___________________________________________SIGN UP____________________________________________________//
    function signUp($value){
        $signupName = $value['signupFirstName'] . $value['signupLastName'];
        $signupProfile = $_FILES['signupFile']['name'];
        $tmp_name = $_FILES['signupFile']['tmp_name'];
        $userRole = "user";
        $signupEmail = $value['signupEmail'];
        $signupPassword = $value['signupPassword'];
        $signupConfirmPassword = $value['signupConfirmPassword'];

        $dir = '../assets/img/';
        move_uploaded_file($tmp_name, $dir.$signupProfile);

        session_start();
        $_SESSION['userLogin'] = $signupName;

        if ($signupPassword == $signupConfirmPassword){
            $passEncrypt = password_hash($signupPassword, PASSWORD_DEFAULT);
            return db()->query("INSERT INTO users (userName, userProfile, userRole, userEmail, userPassword) VALUES ('$signupName', '$signupProfile', '$userRole', '$signupEmail', '$passEncrypt')");
        }
    }


    //___________________________________________LOG IN____________________________________________________//
    function userLogin($value){
        $userName = $value['userName'];
        $password = $value['userPassword'];
        $isLogin = false;

        $getUser = db()->query("SELECT * FROM users");

        session_start();
        $_SESSION['userLogin'] = $userName;

        foreach($getUser as $user){
            if($user['userName'] === $userName and password_verify($password, $user['userPassword'])){
                $isLogin = true;
            }
        }
        return $isLogin;
    }


    //___________________________________________SEARCH____________________________________________________//
    function searchTechAndTravel($value){
        $techAndTravel = $value['searchTechAndTravel'];
        return db()->query("SELECT * FROM post WHERE postTitle LIKE '%$techAndTravel%'");
    }
    

    function searchUser($user){
        $users = $user['searchUser'];
        return db()->query("SELECT * FROM users WHERE userName LIKE '%$users%'");
    }

