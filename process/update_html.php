<?php 
    require_once('../partial/header.php'); 
?>
    
    <div class="container p-4">

        <?php
            require_once('../inc/database.php');
            $id = $_GET['id'];

            $oneTechAndOneTravelPlace = selectOneTechAndOneTravelPlace($id);
            foreach ($oneTechAndOneTravelPlace as $bothAsOne):
        ?>

        <div class="d-flex justify-content-start p-2 mb-4">
            <a href="http://localhost/php_db_project/?page=category" class="text-white btn btn-primary">🔙 Back to Category</a>
        </div>
        <form action="update_model.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?= $bothAsOne['postID'] ?>" name="id">
            <div class="form-group">
                <input type="text" class="form-control mb-3" placeholder="Title" name="postTitle" value="<?= $bothAsOne['postTitle'] ?>">
            </div>
            <div class="form-group">
                <input type="file" class="form-control mb-3" name="file">
            </div>
            <div class="form-group">
                <input type="datetime-local" class="form-control mb-3" name="postDate" value="<?= $bothAsOne['postDate'] ?>">
            </div>
            <div class="form-group">
                <textarea placeholder="Description" class="form-control mb-3" name="postDescription"><?= $bothAsOne['postDescription'] ?></textarea>
            </div>
            <div class="form-group">
                <select class="form-select" aria-label="Default select example" name="categoryID">
                    <option selected>Open this select menu</option>
                    <option value="1">Tech</option>
                    <option value="2">Travel</option>
                </select>
                </div>
            <div class="d-flex justify-content-center p-2">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>

        <?php
            endforeach;
        ?>
    </div>
