<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lidia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img src="assets/images/Logo.png" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a href="index.php" class="navbar-brand">
                        <img src="assets/images/Logo.png" class="img-fluid" alt="">
                    </a>
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3 ">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Feature</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Review</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Location</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a href="#" class="login nav-link">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="main-content">
        <section class="section_1 heroImage">
            <div class="custom container">
                <div class="content d-flex justify-content-between">
                    <div class="left_caption">
                        <h1>Search & review
                            your <span class="blue">fav book</span> effortlessly</h1>
                        <p>Embark on a literary journey like never before with our revolutionary
                            <br> library application! Introducing a seamless experience
                            <br> that transcends traditional boundaries, where you
                            <br> can effortlessly search your favorite books.✨
                        </p>
                        <div class="cta">
                            <a href="">Start now →</a>
                        </div>
                    </div>
                    <div class="right_img position-relative">
                        <img src="assets/images/Left.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section_2 features">
            <div class="custom container">
                <div class="content">
                    <div class="title_wrap">
                        <h4>FEATURES</h4>
                        <h3>🤔• What You Can Do?</h3>
                    </div>
                    <div class="inner-content">

                        <?php
                        $listFeatures = [
                            [
                                "icon" => "Icon1.png",
                                "title" => "Search Book",
                                "description" => "Effortlessly find your next read with our powerful and intuitive book search.",
                            ],
                            [
                                "icon" => "Icon2.png",
                                "title" => "Review book",
                                "description" => "Discover insightful critiques  and share your thoughts on diverse literary masterpieces effortlessly.",
                            ],
                            [
                                "icon" => "Icon3.png",
                                "title" => "Wishlist book",
                                "description" => "Curate your literary dreams–wishlist books  for future adventures and discoveries.",
                            ],
                        ];
                        ?>
                        <div class="list_features">
                            <div class="row">
                                <?php foreach ($listFeatures as $value) : ?>
                                    <div class="col-md-4">
                                        <div class="item text-center mx-auto">
                                            <div class="icon">
                                                <img src="assets/images/<?= $value["icon"] ?>" class="img-fluid" alt="">
                                            </div>
                                            <div class="caption">
                                                <h3><?= $value["title"] ?></h3>
                                                <p><?= $value["description"] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section_3 service">
            <div class="custom container">
                <div class="content">
                    <div class="title_wrap">
                        <h4>Services</h4>
                        <h3>🚀• The Services for You</h3>
                    </div>
                    <div class="description" id="left">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="img_description">
                                    <img src="assets/images/service/img-service-left.jpg" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="caption_img">
                                    <h3><span>Rent</span> your favorite book
                                        fairly easy on <span>Lidia</span>!</h3>
                                    <p>Viewing, rent, and organize your favorite books has
                                        never been easier. An integrated digital library rent
                                        that’s simple to use, Lidia lets you spend less time
                                        managing your work and more time actually doing it!
                                    </p>
                                    <p>
                                        Effortless rentals, personalized shelves—Lidia
                                        transforms book management, enhancing your
                                        reading experience~
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description" id="right">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="caption_img">
                                    <h3>Quick Book Rentals:
                                        <br> <span>Dive</span> into <span>Reading</span> Instantly
                                    </h3>
                                    <p>Discover instant literary delight. Access a vast library,
                                        borrow your favorite reads, and dive into captivating
                                        stories within minutes. Reading made quick and easy,
                                        just a click away!
                                    </p>
                                    <p>
                                        Unlock a world of stories effortlessly.
                                        Browse genres, choose, rent in minutes.
                                        Seamlessly manage your reading adventures
                                        with our intuitive platform~
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img_description">
                                    <img src="assets/images/service/img-service-right.jpg" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section_4 review">
            <div class="custom container">
                <div class="content">
                    <div class="title_wrap">
                        <h4>REVIEWS</h4>
                        <h3>💬• Reviews of Others</>
                    </div>

                    <?php
                    $listReview = [
                        [
                            "img" => "profile3.png",
                            "description" => "Engaging plot, vivid characters; a captivating read that lingers in your thoughts.",
                            "name" => "Dianna Rose",
                            "status" => "College Student",
                        ],
                        [
                            "img" => "profile2.png",
                            "description" => "Thought-provoking narrative and rich prose. A must-read for any avid book lover!",
                            "name" => "John Smith",
                            "status" => "School Student",
                        ],
                        [
                            "img" => "profile1.png",
                            "description" => "Immersive storytelling! An enriching literary experience worth savoring and sharing.",
                            "name" => "Robert William",
                            "status" => "ERP Developer",
                        ],
                    ];
                    ?>

                    <div class="list_review">
                        <div class="row">
                            <?php foreach ($listReview as $value) : ?>
                                <div class="col-md-4">
                                    <div class="item">
                                        <div class="img">
                                            <img src="assets/images/<?= $value["img"] ?>" alt="">
                                        </div>
                                        <div class="caption">
                                            <p><?= $value["description"] ?></p>
                                            <h3><?= $value["name"] ?></h3>
                                            <h4><?= $value["status"] ?></h4>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section_5 location">
            <div class="custom container">
                <div class="content">
                    <div class="title_wrap">
                        <h4>LOCATION</h4>
                        <h3>🗺• Our Library Location</h3>
                    </div>
                    <div class="inner_content">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.818186451598!2d112.7457101344961!3d-7.261522132054309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f963d6b15f05%3A0x4aa167ad55b09e7a!2sPerpustakaan%20Umum%20Kota%20Surabaya!5e0!3m2!1sid!2sid!4v1711330243689!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <img src="assets/images/Location.png" class="img-fluid" alt=""> -->
                    </div>
                </div>
            </div>
        </section>

        <section class="section_6 copyright">
            <div class="custom container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item">
                                <h3>Managed By</h3>
                                <div class="caption">
                                    <div class="img">
                                        <img src="assets/images/logo-bottom.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <h3>Managed By</h3>
                                <div class="caption">
                                    <div class="img d-flex gap-3">
                                        <img src="assets/images/Twitter.png" class="img-fluid" alt="">
                                        <img src="assets/images/Instagram.png" class="img-fluid" alt="">
                                        <img src="assets/images/Facebook.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <h3>Managed By</h3>
                                <div class="caption">
                                    <div class="tag">
                                        <p>#RentFavBooks</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright_blue">
                <h3>© 2024 Lidia. All rights reserved.</h3>
            </div>
        </section>
    </div>
    <script src="assets/js/main.js" text="javascript"></script>
</body>

</html>