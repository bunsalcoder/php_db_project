<div class="container p-4">
    <div class="d-flex justify-content-end p-2" style="margin-right: 75px;">
        <a href="process/create_html.php" class="btn btn-primary">+Add</a>
    </div>

    <?php
        require_once('inc/database.php');
        $techAndTravelPlace = selectAllTechAndTravelPlace();
    
        foreach ($techAndTravelPlace as $both):
    ?>

    <div class="row mb-2 mt-3">
        <div class="col-md-12" style="width:85%; margin-left: 8%">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-1 shadow-lg">
                <div class="col p-4 d-flex flex-column position-static" style="width: 80%; height: 45vh">
                    <h3><?= $both['postTitle'] ?></h3>
                    <div class="text-muted"><?= $both['postDate'] ?></div>
                    <p class="card-text mt-3"><?= $both['postDescription'] ?></p>
                    <div class="action">
                        <a href="process/update_html.php?id=<?= $both['postID'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="process/delete_model.php?id=<?= $both['postID'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </div>  
                </div>
                <div class="col-auto d-none d-lg-block shadow-lg" style="width: 35%;">
                    <img src="assets/img/<?= $both['postImg'] ?>" style="height: 45vh;" alt="">
                </div>  
            </div>
        </div>
    </div>
    <br>

    <?php
        endforeach;
    ?>
</div>