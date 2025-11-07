<?php
// Header file for FrontendHomeHive
// Define the base URL for the application and also serves as a template for this project
$BASE_URL = isset($BASE_URL) ? $BASE_URL : "http://" . $_SERVER['HTTP_HOST'] . "/HomeHive/FrontendHomeHive/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeHive</title>
    <link rel="stylesheet" href="<?=$BASE_URL?>asserts/css/style.css">
</head>
<body>
    <header>
        <h1><a href="<?=$BASE_URL ?>index.php">House Rentals</a></h1>
        <nav>
            <a href="<?=$BASE_URL ?>index.php">Home</a>
            <a href="<?=$BASE_URL ?>add.php">Add To Listing</a>
        </nav>
    </header> 
    <main>
        <footer>
            <p>HomeHive.All Rights Reserved</p>
        </footer>
    </main>
</body>
</html>