<?php

// forbindelse til database
require "settings/init.php";

//Henter fra database
$products = $db->sql("select * FROM product");
?>

<!DOCTYPE html>
<html lang="da">
<head>

    <!-- SEO -->
    <meta charset="utf-8">
    <meta name="robots" content="All">
    <title>Moseholm Gårdbutik - Ny dansk honning</title>
    <meta name="description" content="Vores nye danske honning er produceret på vores gård hvor bierne frit kan færdes som de ønsker, det mener vi giver bedre honning">

    <!-- OG Tags -->
    <meta property="og:title" content="Moseholm Gårdbutik - Ny dansk honning fra fritflyvende bier">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://las-designs.dk/moseholm/produktside.php">
    <meta property="og:image" content="https://las-designs.dk/moseholm/images/honning-produkt.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@MoseholmDK">
    <meta name="twitter:title" content="Moseholm Gårdbutik - Ny dansk honning fra fritflyvende bier">
    <meta name="twitter:description" content="Vores nye danske honning er produceret på vores gård hvor bierne frit kan færdes som de ønsker, det mener vi giver bedre honning">
    <meta name="twitter:image" content="https://las-designs.dk/moseholm/images/friske-varer.png">

    <!-- Sætter vores favicon -->
    <link rel="icon" type="image/x-icon" href="images/moseholm_favicon.ico">

    <!-- Copyright -->
    <meta name="author" content="Lasse Nielsen">
    <meta name="copyright" content="Zealand - Lasse Nielsen">

    <!-- Bootstrap & Styling -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Impotere font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Impotere font Montserrat Font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- Gør siden responsiv -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<!-- Inkludere navigations modulet -->
<?php include 'navigation.php';?>

<!-- Inkludere hero modulet -->
<?php include 'hero_text.php';?>

<!-- Looper alle entries i databasen igennem -->
<?php
    foreach ($products as $product){
?>

        <!-- Produkt information -->
<div class="productInfoWrapper">
    <div class="productSection1">
        <img src="images/<?php echo $product->prodPicture?>" class="productImage" alt="Moseholm billig honing">
    </div>
    <div class="productSection2">
        <h2 class="productHeader"><?php echo $product->prodName?></h2>
        <p class="productAmount">Produktet indenholder: <?php echo $product->prodContains?></p>
        <p class="productText">Beskrivelse: <?php echo $product->prodDescription?></p>
        <hr>
        <h3 class="productPrice"><?php echo number_format($product->prodPrice, 2, ",", ".");?> DKK</h3>
        <div class="countWrapper">
            <input type="button" value="-" id="minus2" onclick="minus2()" class="countButton">
            <input type="text" value="1" id="count2" class="countText">
            <input type="button" value="+" id="plus2" onclick="plus2()" class="countButton">
        </div>
        <div class="basketButton">
            <a href="kurv.php">
                <button class="productButton"><i class="fas fa-shopping-basket basketIcon"></i>Køb produkt</button>
            </a>
        </div>
    </div>
</div>
<?php
}
?>

<!-- Inkludere footer modulet -->
<?php include 'footer.php';?>


<!-- Henter knap funktioner -->
<script src="js/basketCount.js"></script>

<!-- Henter bootstrap funktioner -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Henter mobil navbar funktioner -->
<script src="js/mobileNavToggle.js"></script>
</body>
</html>
