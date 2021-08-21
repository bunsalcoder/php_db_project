<?php
    require_once('../inc/database.php');
    $id = $_GET['id'];

    $isPostDeleted = deletePost($id);

    if($isPostDeleted){
        header("Location: http://localhost/php_db_project/?page=category");
    }