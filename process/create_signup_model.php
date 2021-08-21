<?php

    require_once('../inc/database.php');
    require_once('../partial/header.php');

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $isUserSignedup = signUp($_POST);

        if ($isUserSignedup){
            header("Location: http://localhost/php_db_project/?page=home");
        }
    }
?>