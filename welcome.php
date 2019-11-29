<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Gen 3 Market</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">
    <link rel="stylesheet" href="assets/css/carousel.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

    <!-- Jumbotron -->
    <div class="jumbotron" style="margin-bottom: 0;">
        <h1>Gen 3 Market Logo Goes Here!</h1>
    </div>

    <!-- Top menu -->
    <nav class="navbar navbar-dark navbar-expand-md">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Clothes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Men's</a>
                            <a class="dropdown-item" href="#">Women's</a>
                            <a class="dropdown-item" href="#">Kids</a>
                        </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Food
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Water</a>
                            <a class="dropdown-item" href="#">
                                Sports Drink</a>
                            <a class="dropdown-item" href="#">Canned Goods</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Electronics
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Phones</a>
                            <a class="dropdown-item" href="#">Laptops</a>
                            <a class="dropdown-item" href="#">Accessories</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Specials
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Open Box</a>
                            <a class="dropdown-item" href="#">Discontinued</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="log_reg.html">Log-in/Register</a>
                            <a class="dropdown-item" href="#">Administrator</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-style: italic; font-weight: bold;">Welcome, <?php echo $_POST["email"]; ?>! <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Top content -->
    <div class="top-content">
        <div class="container-fluid">

            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                        <img src="assets/img/backgrounds/mens.jpg" class="img-fluid mx-auto d-block" alt="men's clothes">
                        <div class="carousel-caption">
                            <p>Men's Clothes</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/img/backgrounds/womens.jpg" class="img-fluid mx-auto d-block" alt="women's clothes">
                        <div class="carousel-caption">
                            <p>Women's Clothes</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/img/backgrounds/kids.jpeg" class="img-fluid mx-auto d-block" alt="Kids clothes">
                        <div class="carousel-caption">
                            <p style="color: black;">Kid's Clothes</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/img/backgrounds/water.jpg" class="img-fluid mx-auto d-block" alt="water">
                        <div class="carousel-caption">
                            <p style="color: black;">Water</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/img/backgrounds/sports-drinks.jpg" class="img-fluid mx-auto d-block" alt="Sports Drinks">
                        <div class="carousel-caption">
                            <p style="color: black;">Sports Drinks</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/img/backgrounds/canned_goods.jpg" class="img-fluid mx-auto d-block" alt="canned goods">
                        <div class="carousel-caption">
                            <p style="color: yellow;">Canned Goods</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/img/backgrounds/cell_phone.jpg" class="img-fluid mx-auto d-block" alt="cell phones">
                        <div class="carousel-caption">
                            <p style="color: white;">Cell Phones</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/img/backgrounds/laptops.jpg" class="img-fluid mx-auto d-block" alt="laptops">
                        <div class="carousel-caption">
                            <p>Laptops</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true" style="color:red;"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true" style="color: red;"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Section 1 -->
    <div class="section-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col section-1 section-description wow fadeIn">
                    <h1>Bootstrap 4 Carousel with Multiple Items</h1>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>
                        This is a free <strong>Carousel</strong> template with <strong>Multiple Items</strong> made with
                        the <strong>Bootstrap 4</strong> framework. Check it out now. Download it, customize and use it as you like!
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 section-1-box wow fadeInUp">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-1-box-icon">
                                <i class="fas fa-magic"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3>Branding</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 section-1-box wow fadeInDown">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-1-box-icon">
                                <i class="fas fa-cog"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3>Web design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 section-1-box wow fadeInUp">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-1-box-icon">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3>Social media</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="section-2-container section-container section-container-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col section-2 section-description wow fadeIn">
                </div>
            </div>
            <div class="row">
                <div class="col section-2-box wow fadeInLeft">
                    <h3>Section 2</h3>
                    <p class="medium-paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                        Ut wisi enim ad minim veniam, quis nostrud.
                        Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat.
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                        Ut wisi enim ad minim veniam, quis nostrud.
                        Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="section-3-container section-container">
        <div class="container">

            <div class="row">
                <div class="col section-3 section-description wow fadeIn">
                    <h2>Section 3</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-3-box-icon">
                                <i class="fas fa-paperclip"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3>Ut wisi enim ad minim</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                Ut wisi enim ad minim veniam, quis nostrud.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-3-box-icon">
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3>Sed do eiusmod tempor</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                Ut wisi enim ad minim veniam, quis nostrud.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-3-box-icon">
                                <i class="fas fa-cloud"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3>Quis nostrud exerci tat</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                Ut wisi enim ad minim veniam, quis nostrud.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-3-box-icon">
                                <i class="fab fa-google"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3>Minim veniam quis nostrud</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                Ut wisi enim ad minim veniam, quis nostrud.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Section 4 -->
    <div class="section-4-container section-container section-container-image-bg">
        <div class="container">
            <div class="row">
                <div class="col section-4 section-description wow fadeInLeftBig">
                    <h2>Section 4</h2>
                    <p>
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                        aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-container">

        <div class="container">
            <div class="row">

                <div class="col">
                    <p>&copy; <?php echo date("Y"); ?> Gen 3 Market </p>
                </div>

            </div>
        </div>

    </footer>

    <!-- Javascript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>
