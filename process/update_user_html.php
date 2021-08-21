<?php 
    require_once('../partial/header.php'); 
?>
    
    <div class="container p-4">

        <?php
            require_once('../inc/database.php');
            $id = $_GET['id'];

            $oneUser = selectOneUser($id);
        
            foreach ($oneUser as $user):
        ?>

        <form action="update_user_model.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?= $user['userID'] ?>" name="id">
            <div class="form-group">
                <input type="text" class="form-control mb-3" placeholder="Title" name="userName" value="<?= $user['userName'] ?>">
            </div>
            <div class="form-group">
                <input type="file" class="form-control mb-3" name="userProfile">
            </div>
            <div class="form-group">
                <input type="text" class="form-control mb-3" name="userRole" value="<?= $user['userRole'] ?>">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Email" class="form-control mb-3" name="userEmail" value="<?= $user['userEmail'] ?>">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" class="form-control mb-3" name="userPassword" value="<?= $user['userPassword'] ?>">
            </div>
            <div class="d-flex justify-content-center p-2">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>

        <?php
            endforeach;
        ?>
    </div>