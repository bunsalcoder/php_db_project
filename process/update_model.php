<?php

    require_once('../inc/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isPostUpdated = updatePost($_POST);

        if ($isPostUpdated){
            header("Location: http://localhost/php_db_project/?page=category");
        }
    }