<?php
session_start();

$conn = new mysqli("localhost", "sparrow1_grouplo", "Passw0rd123", "sparrow1_gen3market");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$product1 = 101;
$product2 = 102;
$product3 = 103;
$product4 = 104;
$product5 = 105;

$sql1 = "SELECT price FROM clothes where productID = $product1";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$price1 = $row1["price"];

$sql2 = "SELECT price FROM clothes where productID = $product2";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$price2 = $row2["price"];

$sql3 = "SELECT price FROM clothes where productID = $product3";
$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();
$price3 = $row3["price"];

$sql4 = "SELECT price FROM clothes where productID = $product4";
$result4 = $conn->query($sql4);
$row4 = $result4->fetch_assoc();
$price4 = $row4["price"];

$sql5 = "SELECT price FROM clothes where productID = $product5";
$result5 = $conn->query($sql5);
$row5 = $result5->fetch_assoc();
$price5 = $row5["price"];

$conn->close();

?>

<!DOCTYPE php>
<php lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MEN </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">


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
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Clothes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="mens.php">Men's</a>
                            <a class="dropdown-item" href="women.php">Women's</a>
                            <a class="dropdown-item" href="kids.php">Kids</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
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

    <!-- Page Content -->
    <div class="container" style="margin-top: 75px;">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Men's Clothes</h1>
                <div class="list-group">
                    <a href="mens_pants_1.php" class="list-group-item">Pants</a>
                    <a href="mens_shirt_1.php" class="list-group-item">Shirts</a>
                    <a href="mens_shoe_1.php" class="list-group-item">Shoes</a>
                    <a href="mens_sweatshirt_1.php" class="list-group-item">Sweatshirt</a>
                    <a href="mens_shorts_1.php" class="list-group-item">Shorts</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="assets/img/backgrounds/mens_shoe_1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="assets/img/backgrounds/mens_shirt_1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="assets/img/backgrounds/mens_suit_2.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="mens_pants_1.php"><img class="card-img-top" src="assets/img/backgrounds/mens_pants.jpg" alt="mens dress pants"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="mens_pants_1.php">Pants</a>
                                </h4>
                                <h5>$<?php echo $price1;?></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div id="shirts" class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="mens_shirt_1.php"><img class="card-img-top" src="assets/img/backgrounds/mens_dress_shirt.jpg" alt="mens dress shirt"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="mens_shirt_1.php">Shirt</a>
                                </h4>
                                <h5>$<?php echo $price2;?></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="mens_shoe_1.php"><img class="card-img-top" src="assets/img/backgrounds/mens_dress_shoe.jpg" alt="mens dress shoe"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="mens_shoe_1.php">Shoes</a>
                                </h4>
                                <h5>$<?php echo $price3;?></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div id="sweatshirt" class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="mens_sweatshirt_1.php"><img class="card-img-top" src="assets/img/backgrounds/mens_sweatshirt.png" alt="mens sweatshirt"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="mens_sweatshirt_1.php">Sweatshirt</a>
                                </h4>
                                <h5>$<?php echo $price4;?></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <div id="shorts" class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="mens_shorts_1.php"><img class="card-img-top" src="assets/img/backgrounds/mens_shorts.jpg" alt="mens shorts"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="mens_shorts_1.php">Shorts</a>
                                </h4>
                                <h5>$<?php echo $price5;?></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Gen3 Market 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</php>
