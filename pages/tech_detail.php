
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/tech.css" rel="stylesheet">

</head>
<body>
    <main class="container mt-1">
        <!-- First Banner Start -->
        <div class="p-4 p-md-5 mb-4 text-white bg-dark bg-image" style="background-image: url('https://media.istockphoto.com/photos/businessman-hand-create-artificial-intelligence-for-technology-and-picture-id1221155808?k=6&m=1221155808&s=612x612&w=0&h=AwiAaRCBHe8DLcQbc5XVvhZL1CVkXw0_BVQs0jb-AB0='); width: 100%; height: 50vh; opacity: 1">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                    efficiently about what’s most interesting in this post’s contents.</p>
            </div>
        </div>
        <!-- First Banner End -->

        <!-- Thumbnail Start -->
        <div class="row mb-2">

            <!-- php foreach start -->
            <?php
                require_once('inc/database.php');
                $id = $_GET['id'];
                $oneTech = selectOneTech($id);

                foreach ($oneTech as $tech):
            ?>

            <!-- card start -->
            <div class="col-md-12" style="width:85%; margin-left: 8%">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm">
                    <div class="col p-4 d-flex flex-column position-static" style="width: 80%; height: 40vh">
                        <h3><?= $tech['postTitle'] ?></h3>
                        <div class="text-muted"><?= $tech['postDate'] ?></div>
                        <p class="card-text mt-3"><?= $tech['postDescription'] ?></p>
                    </div>
                    <div class="col-auto d-none d-lg-block" style="width: 35%;">
                        <img src="assets/img/<?= $tech['postImg'] ?>" style="height: 40vh;" alt="">
                    </div>  
                </div>
            </div>
            <!-- card end -->

            <!-- php foreach start -->
            <?php
                endforeach;
            ?>

        </div>
        <!-- Thumbnail End -->
    </main>
</body>
</html>

