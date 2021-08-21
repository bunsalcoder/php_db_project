<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/carousel.css">
</head>
<body>
    <!-- Main Start-->
    <main>

        <!-- Carousel Start-->
        <div id="myCarousel" class="carousel slide w-75 mt-2" data-bs-ride="carousel" style="margin-left: 13%;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://media.istockphoto.com/vectors/website-app-design-development-technology-software-code-programming-vector-id1136829806?k=6&m=1136829806&s=612x612&w=0&h=I9MCTwTJObr2QRUNAvF1EFK9yO8Sfn_3rTFxyiClYPA=">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Tech is Everything.</h1>
                            <p>Technology industry news, commentary and analysis.</p>
                            <p><a class="btn btn-lg btn-danger" href="http://localhost/php_db_project/pages/signup.php">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2015/06/01/09/04/blog-793047__340.jpg">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Blogging is a hobby.</h1>
                            <p>Posts are typically displayed in reverse chronological order.</p>
                            <p><a class="btn btn-lg btn-danger" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2016/01/09/18/27/camera-1130731__340.jpg"> 

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Our experienced writers travel the world to bring you informative and inspirational features.</p>
                            <p><a class="btn btn-lg btn-danger" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel End-->

        <!-- 3 headings start -->
        <div class="container marketing">

            <!-- Three columns of text below the carousel start-->
            <div class="row mt-5">
                <div class="col-lg-4">
                    <img class="rounded-circle" width="140" height="140" src="https://media.istockphoto.com/photos/he-knows-his-way-around-any-network-picture-id1138004657?k=6&m=1138004657&s=612x612&w=0&h=FAdl2CaEYV0LqU-0Ozl-ffmshvGKcT82i2jJsCEBFZg=" alt="">

                    <h2>Tech</h2>
                    <p>Technology industry news, commentary and analysis, with reporting on big tech, startups, and internet culture.</p>
                    <p><a class="btn btn-danger" href="?page=tech">View details &raquo;</a></p>
                </div>

                <div class="col-lg-4">
                    <img class="rounded-circle" width="140" height="140" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbIw4iUs2fTVfxEjDVSUwe1KouOv7kShjWMA&usqp=CAU" alt="">

                    <h2>Blogging</h2>
                    <p> Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page.</p>
                    <p><a class="btn btn-danger" href="#">View details &raquo;</a></p>
                </div>

                <div class="col-lg-4">
                    <img class="rounded-circle" width="140" height="140" src="https://cdn.pixabay.com/photo/2017/12/15/13/51/polynesia-3021072__340.jpg" alt="">

                    <h2>Travel</h2>
                    <p>Our experienced writers travel the world to bring you informative and inspirational features, destination roundups, travel ideas ...</p>
                    <p><a class="btn btn-danger" href="?page=travel">View details &raquo;</a></p>
                </div>
            </div>
            <!-- Three columns of text below the carousel end-->

        </div>
        <!-- 3 headings end -->

        <!-- Thumbnail Start -->
        <div class="album py-5 bg-dark">

            <!-- Container Start -->
            <div class="container">

                <!-- Search Start-->
                <div class="d-flex justify-content-center mb-4">
                    <form method="post">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control form-control" placeholder="Find ..." name="searchTechAndTravel">
                            <button type="submit" class="input-group-text btn-danger"><i class="bi bi-search me-2"></i> Search </button>
                        </div>
                    </form>
                </div>
                <!-- Search End -->
                
                <!-- Row Start -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <!-- php foreach start -->
                    <?php
                        require_once('inc/database.php');

                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $techAndTravels = searchTechAndTravel($_POST);
                        }else{
                            $techAndTravels = selectAllTechAndTravelPlace();
                        }

                        foreach ($techAndTravels as $both):
                    ?>

                    <!-- Card Start -->
                    <div class="col">
                        <div class="card shadow-lg rounded bg-dark">
                            <img src="assets/img/<?= $both['postImg'] ?>" style="height: 35vh;" alt="">
                            <div class="card-body">
                                <p class="card-text text-white"><?= $both['postTitle'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-danger"><a href="?page=tech_detail&id=<?= $both['postID'] ?>" class="nav-link px-2 text-white">View</a></button>
                                    </div>
                                    <small class="text-muted"><?= $both['postDate'] ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card End -->

                    <?php
                        endforeach;
                    ?>
                    <!-- php foreach end -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->

        </div>
        <!-- Thumbnail End -->
    </main>
    <!-- Main End-->
</body>
</html>


