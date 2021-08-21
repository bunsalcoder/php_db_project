<?php

    require_once('../inc/database.php');

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $isUserCreated = createUser($_POST);

        if ($isUserCreated){
            header("Location: http://localhost/php_db_project/?page=user");
        }
    }