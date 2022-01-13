<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Moseholm Gårdbutik - Kurv</title>

    <!-- Sætter vores favicon -->
    <link rel="icon" type="image/x-icon" href="images/moseholm_favicon.ico">

    <!-- Copyright & søgemaskinekontrol -->
    <meta name="robots" content="noindex">
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

<!-- Overskrift-->
<h2 class="centeredHeader">Kurv</h2>

<!-- Viser de ting du har i kurven -->
<div class="basketInfoWrapper">
    <div class="basketFlexWrap">
        <div class="basketSection1">
            <img src="images/honning-produkt.png" class="basketImage" alt="Moseholm billig honing">
        </div>
        <div class="basketSection2">
            <h3 class="basketHeadline">Ny Dansk Honning</h3>
            <hr>
            <p class="basketText">1 Stk. - 39,00 DKK</p>
        </div>
    </div>
    <hr>
    <p class="basketTotal">Subtotal</p>
    <p class="basketTotalAmount">39,00 DKK</p>
    <div class="basketButton">
        <a href="betaling.php">
            <button class="productButton"><i class="fas fa-shopping-basket basketIcon"></i>Køb produkt</button>
        </a>
    </div>
</div>

<!-- Inkludere footer modulet -->
<?php include 'footer.php';?>

<!-- Henter bootstrap funktioner -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Henter mobil navbar funktioner -->
<script src="js/mobileNavToggle.js"></script>
</body>
</html>