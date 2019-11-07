<?php


require_once('../database.php');

?>

<!doctype html>
<html>
<head>
    <title>Gen3Market</title>
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <!--No Css Applied Yet -->
</head>
<body>
<header><h1>Gen3Market - Place An Order</h1></header>
<div id="logo">
    <img id="fb" src="../images/foodbank.png">
</div>

<main>
    <h1>Customer Data</h1>

    <form action="customer.php" method="post">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="firstName"></td>
            </tr>
            <tr>
                <td>Surname:</td>
                <td><input type="text" name="lastName"></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="tel" name="phoneNumber"></td>
            </tr>
        </table>
        <input type="submit" value="Next">
    </form>
    <br>
</main>
<footer>
    <br><p>&copy; <?php echo date("Y"); ?> Gen3Market</p>
</footer>

</body>
</html>