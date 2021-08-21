<?php
    require_once('../inc/database.php');
    $id = $_GET['id'];

    $isUserDeleted = deleteUser($id);

    if($isUserDeleted){
        header("Location: http://localhost/php_db_project/?page=user");
    }