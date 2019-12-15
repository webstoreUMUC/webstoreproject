<?php
session_start();


$conn = new mysqli("localhost", "sparrow1_grouplo", "Passw0rd123", "sparrow1_gen3market");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ID = 205;
$table = "food";

$sql = "SELECT productName, productCategory, productQty, productSize, price FROM $table where productID = $ID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$category = $row["productCategory"];
$name = $row["productName"];
$quantity = $row["productQty"];
$size = $row["productSize"];
$price = $row["price"];
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $name ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

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
    <div class="container" style="margin-top: 80px;">

        <div class="row">

            <div class="col-lg-3">
                <h1 class="my-4"><?php echo $name ?></h1>
                <div class="list-group">
                    <a class="list-group-item active" style="color: white; margin-bottom: 10px;"><?php echo $name ?></a>
                    <form action="cart_form.php" method="post">
						<input type="hidden" name="ID" value="<?php echo $ID; ?>">
						<input type="hidden" name="category" value="<?php echo $category; ?>">
						<input type="hidden" name="price" value="<?php echo $price; ?>">
						<input type="hidden" name="table" value="<?php echo $table; ?>">
						<input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
						<select name="withdrawQty" class="custom-select mb-3">
							<option selected>Quantity</option>
							<?php
								for ($i = 1; $i <= $quantity; $i++) {
									echo "<option value=" . $i . ">" . $i . "</option>";
								}
							?>
						</select>
                        <button name="submit" type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                    
                </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div class="card mt-4">
                    <img class="card-img-top img-fluid" src="assets/img/backgrounds/babyfood_chicken.jpeg" alt="">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $name ?></h3>
                        <h4><?php echo $price;?></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
                        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                        4.0 stars
                    </div>
                </div>
                <!-- /.card -->

                <div class="card card-outline-secondary my-4">
                    <div class="card-header">
                        Product Reviews
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <a href="#" class="btn btn-success">Leave a Review</a>
                    </div>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col-lg-9 -->

        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Gen 3 Market 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
