<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>FoodBank</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>FoodBank</h1></header>

<main>
    <h1>Database Error</h1>
    <p>There was an error connecting to the database.</p>
    <p>Error message: <?php echo $error_message; ?></p>
    <p>&nbsp;</p>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> FoodBank</p>
</footer>
</body>
</html>