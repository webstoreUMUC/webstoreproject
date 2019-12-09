<?php

session_start();

?>




<!doctype php>
<php lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Gen 3 Market </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">
    <link rel="stylesheet" href="assets/css/carousel.css">


</head>

<body>

   <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/ico/logo.png" alt="gen3logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Clothes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="mens.php">Men's</a>
                            <a class="dropdown-item" href="women.php">Women's</a>
                            <a class="dropdown-item" href="kids.php">Kids</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Food
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="canned.php">Canned Goods</a>
                            <a class="dropdown-item" href="babyfood.php">Baby Food</a>
                            <a class="dropdown-item" href="candy.php">Candy</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Beverages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="natural.php">Natural Juices</a>
                            <a class="dropdown-item" href="artificial.php">Artificial</a>
                            <a class="dropdown-item" href="dairy.php">Dairy</a>
                            <a class="dropdown-item" href="soda.php">Soda</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Electronics
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="phones.php">Phones</a>
                            <a class="dropdown-item" href="peripherals.php">Peripherals</a>
                            <a class="dropdown-item" href="consoles.php">Consoles</a>
                        </div>
                    </li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="log_reg.php">Log-in/Register</a>
                            <a class="dropdown-item" href="gen3marketAdmin/index.php">Administrator</a>
							<a class="dropdown-item" href="logout.php">Log out</a>
                        </div>
					</li>
					<li class="nav-item">
                        <a class="nav-link" style="font-style: italic; font-weight: bold;"><?php if (!$_SESSION == NULL) echo $_SESSION['user']; ?> <span class="sr-only">(current)</span></a>
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
                        <a href="mens.php">
                            <img src="assets/img/backgrounds/mens.jpg" class="img-fluid mx-auto d-block" alt="men's clothes">
                        </a>

                        <div class="carousel-caption">
                            <p>Men's Clothes</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="women.php">
                            <img src="assets/img/backgrounds/womens.jpg" class="img-fluid mx-auto d-block" alt="women's clothes">
                        </a>

                        <div class="carousel-caption">
                            <p>Women's Clothes</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="kids.php">
                            <img src="assets/img/backgrounds/kids.jpeg" class="img-fluid mx-auto d-block" alt="Kids clothes">
                        </a>
                        <div class="carousel-caption">
                            <p style="color: black;">Kid's Clothes</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="soda.php">
                            <img src="assets/img/backgrounds/main_juice_slide.jpeg" class="img-fluid mx-auto d-block" alt="water">
                        </a>
                        <div class="carousel-caption">
                            <p style="color: black;">Orange Juice</p>
                        </div>
                    </div>
                    
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="canned.php">
                            <img src="assets/img/backgrounds/canned_goods.jpg" class="img-fluid mx-auto d-block" alt="canned goods">
                        </a>
                        <div class="carousel-caption">
                            <p style="color: yellow;">Canned Goods</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="phones.php">
                            <img src="assets/img/backgrounds/cell_phone.jpg" class="img-fluid mx-auto d-block" alt="cell phones">
                        </a>
                        <div class="carousel-caption">
                            <p style="color: white;">Cell Phones</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="laptops.php">
                            <img src="assets/img/backgrounds/main_console_slide.jpeg" class="img-fluid mx-auto d-block" alt="laptops">
                        </a>
                        <div class="carousel-caption">
                            <p>Consoles</p>
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



    <!-- Section 2 -->
    <div class="section-3-container section-container">
        <div class="container">

            <div class="row">
                <div class="col section-3 section-description wow fadeIn">
                    <h2>Gen 3 Market Items</h2>
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
                            <h3>Clothes</h3>
                            <p>
                                At Gen3market, we pride ourselves with the low cost high quality fabrics our designers uses to create our clothing lines.
                                All clothes and fabrics are careful tested to meet our original desiners criterial. We promise you the best always. 
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
                            <h3>Food</h3>
                            <p>
                                All food products on Gen3market are non perishable items. We do not sell GMO products and our vendors inspect these items to 
                                to make sure there are no recalls. 
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
                            <h3>Beverages</h3>
                            <p>
                                All beverage products on Gen3market are non perishable items. We do not sell GMO products and our vendors inspect these items to 
                                to make sure there are no recalls. For sports products, we select only the popular brands available in the leading gymasuems and as seen on 
                                TV. Gen3market imports these products from respective vendors. For more info on our product selections, please send us an email using the contatact
                                us link.
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
                            <h3>Electronics</h3>
                            <p>
                               If you want market trend,top of the line electronics devices and appliance, look no further.
                               We have gaming consoles and mobile devices in stocks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Section 3 -->
    <div class="section-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col section-1 section-description wow fadeIn">
                    <h1>Gen 3 Market Information</h1>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>
                        <strong>Learn more about Gen 3 Market.</strong>
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
                            <h3>
                                    <a href="contactus.html"> Contact Us</a>
                            
                            </h3>
                            <p>For any questions or inquiries plese use this form to send us an email</p>
                         <!-- <a href="contactus.html" class="twitter-follow-button" data-show-count="true"> Contact Us</a> -->
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
                            <h3>Gen 3 Market Vision</h3>
                            <p>We pledge to provide the best products with top of the line quality.We aim to bring you affordable 
                               products with unbeatable prices forever.
                            </p>
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
                            <p>Follow us on Twitter<a href="https://twitter.com/Officialgen3ma1?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="true"> @Officialgen3ma1</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer-container">

        <div class="container">
            <div class="row">

                <div class="col">
					<p class="m-0 text-center text-white"><a href = "privacypolicy.html">Privacy policy </a></p>
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

</php>
