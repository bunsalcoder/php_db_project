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

        <div class="row align-items-md-stretch m-2 d-flex flex-nowrap justify-content-center">

            <!-- php foreach start -->
            <?php
                require_once('inc/database.php');
                $id = $_GET['id'];
                $oneTravelPlace = selectOneTravelPlace($id);

                foreach ($oneTravelPlace as $place):
            ?>

            <!-- Card Start -->
            <div class="col-md-12 mb-3 w-50" style="background-image: url('assets/img/<?= $place['postImg'] ?>'); background-size: 100%; background-repeat: no-repeat; height: 50vh">
                <div class="h-100 text-white rounded-3 d-flex justify-content-center align-items-center">
                    <h2 class="bg-danger p-2 opacity-75 d-flex justify-content-center align-items-center w-100"><?= $place['postTitle'] ?></h2>
                </div>
            </div>
            <div class="col-md-12 overflow-hidden w-50 opacity-75 shadow-lg" style="height: 50vh">
                <h4 class="mt-5"><?= $place['postTitle'] ?></h4>
                <p class="mt-2"><?= $place['postDate'] ?></p>
                <p class="mt-4"><?= $place['postDescription'] ?></p>
            </div>
            <!-- Card End -->

            <?php
                endforeach;
            ?>

        </div>

    </div>
    <!-- Container End -->
</main>