<main>
    <!--  Container Start -->
    <div class="container py-4">

        <!-- First Banner Start -->
        <div class="p-5 mb-4 bg-light rounded-3 bg-image" style="background-image: url('https://cdn.pixabay.com/photo/2017/07/31/22/01/hot-air-balloon-2561487__340.jpg'); background-size: 100%; background-repeat: no-repeat; height: 50vh">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-white">Custom your trips</h1>
                <p class="col-md-8 fs-6 text-white">The latest travel news, guides, vacation tips and photography of the best places to visit around the world. Features include 52 Places and The World Through ...</p>
                <button class="btn btn-danger btn-sm" type="button">Explore</button>
            </div>
        </div>
        <!-- First Banner End -->

        <div class="row align-items-md-stretch m-2">

            <!-- php foreach start -->
            <?php
                require_once('inc/database.php');
                $allTravelPlaces = selectAllTravelPlace();

                foreach ($allTravelPlaces as $place):
            ?>

            <!-- Card Start -->
            <div class="col-md-6 mb-3" style="background-image: url('assets/img/<?= $place['postImg'] ?>'); background-size: 100%; background-repeat: no-repeat; height: 50vh">
                <div class="h-100 text-white rounded-3 d-flex flex-wrap justify-content-center align-items-center">
                    <h2 class="bg-danger p-2 opacity-75 d-flex justify-content-center w-100" style="margin-bottom: -40%;"><?= $place['postTitle'] ?></h2>
                    <button type="button" class="btn btn-sm btn-danger" style="margin-top: 0;"><a href="?page=travel_detail&id=<?= $place['postID'] ?>" class="nav-link px-2 text-white">View</a></button>
                </div>
            </div>
            <!-- Card End -->

            <?php
                endforeach;
            ?>

        </div>

    </div>
    <!-- Container End -->
</main>