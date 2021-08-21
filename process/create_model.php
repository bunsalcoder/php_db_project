<?php

    require_once('../inc/database.php');

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $isPostCreated = createPost($_POST);

        if ($isPostCreated){
            header("Location: http://localhost/php_db_project/?page=category");
        }
    }