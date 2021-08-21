<?php

    require_once('../inc/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isUserUpdated = updateUser($_POST);

        if ($isUserUpdated){
            header("Location: http://localhost/php_db_project/?page=user");
        }
    }