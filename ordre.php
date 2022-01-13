<?php

// forbindelse til database
require "settings/init.php";

//Henter fra database
$users = $db->sql("select * FROM user");
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Moseholm Gårdbutik - Ordre bekræftelse</title>

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

<!-- Looper alle entries i databasen igennem -->
<?php
foreach ($users as $user){
?>

    <!-- Udskriver brugerens navn -->
<h2 class="centeredHeader">Hej <?php echo $user->userName?>!</h2>
    <?php
}
?>

<!-- Bestillings oplysninger-->
<h3 class="centeredHeaderText">Mange tak for din bestilling!<br>Nedstående finder du din ordre bekræftelse</h3>

<div class="orderWrapper">
    <p class="orderText">1 Stk. - Ny Dansk Honning</p>
    <hr>
    <p class="orderText">39,00 DKK</p>
    <hr>
    <p class="orderText">Subtotal<br><b>39,00 DKK</b></p>
    <hr>
    <p class="orderText">Din ordre har fået følgende ordre nummer<br><b>1</b></p>
</div>

<p class="collectText">Du kan afhente din ordre allerede efter 2 timer, så vil vi stå klar med dine varer!<br><br>

    Hvis du har lagt din ordre udenfor vores normale åbningstider,<br>
    så vil dine varer tidligst være klar 2 timer efter vi åbner.<br><br>

    Tak fordi du har valgt at handle hos Moseholm!
</p>


<!-- Inkludere footer modulet -->
<?php include 'footer.php';?>

<!-- Henter bootstrap funktioner -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Henter mobil navbar funktioner -->
<script src="js/mobileNavToggle.js"></script>
</body>
</html>