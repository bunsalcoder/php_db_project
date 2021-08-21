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
                <h1 class="display-4 fst-italic">Tech is now the thing to be explored</h1>
                <p class="lead my-3 fs-6">The application of scientific knowledge for practical purposes, especially in industry.</p>
            </div>
        </div>
        <!-- First Banner End -->

        <!-- Thumbnail Start -->
        <div class="row mb-2">

            <!-- php foreach start -->
            <?php
                require_once('inc/database.php');
                $teches = selectAllTech();

                foreach ($teches as $tech):
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

        <!-- Article Start -->
        <div class="row g-5">
            <div class="col-md-8">
                <article class="blog-post">
                    <h2 class="blog-post-title">General Technology</h2>
                    <p class="blog-post-meta">August 16, 2021 by <a href="#">Bunsal</a></p>

                    <p>The latest tech news about the world's best (and sometimes worst) hardware, apps, and much more. From top companies like Google and Apple to tiny startups ...</p>
                    <hr>
                    <p>Technology ("science of craft", from Greek τέχνη, techne, "art, skill, cunning of hand"; and -λογία, -logia[2]) is the sum of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation. Technology can be the knowledge of techniques, processes, and the like, or it can be embedded in machines to allow for operation without detailed knowledge of their workings. Systems (e.g. machines) applying technology by taking an input, changing it according to the system's use, and then producing an outcome are referred to as technology systems or technological systems.</p>
                    <h2>Blockquotes</h2>
                    <p>Here are some quotes about technology: </p>
                    <blockquote class="blockquote">
                        <p>Technology is best when it brings people together.</p>
                        <p>It has become appallingly obvious that our technology has exceeded our humanity.</p>
                        <p>It is only when they go wrong that machines remind you how powerful they are.</p>
                    </blockquote>
                    <h3>Modern Technology</h3>
                    <p>Modern technology is one of a kind:</p>
                    <ul>
                        <li>Artificial Intelligence</li>
                        <li>Robotic</li>
                        <li>Upcoming...</li>
                    </ul>
                    <h2>Information Technology</h2>
                    <p>building communications networks for a company, safeguarding data and information, creating and administering databases, helping employees troubleshoot problems with their computers or mobile devices, or doing a range of other work to ensure the efficiency and security of business information ...</p>
                    <h3>Programming</h3>
                    <p>process of creating a set of instructions that tell a computer how to perform a task. Programming can be done using a variety of computer programming languages</p>
                </article>
            </div>
            <!-- Article End -->

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">The latest tech news about the world's best (and sometimes worst) hardware, apps, and much more. From top companies like Google and Apple to tiny startups ...</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">January 2021</a></li>
                            <li><a href="#">December 2020</a></li>
                            <li><a href="#">November 2020</a></li>
                            <li><a href="#">October 2020</a></li>
                            <li><a href="#">September 2020</a></li>
                            <li><a href="#">August 2020</a></li>
                            <li><a href="#">July 2020</a></li>
                            <li><a href="#">June 2020</a></li>
                            <li><a href="#">May 2020</a></li>
                            <li><a href="#">April 2020</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>