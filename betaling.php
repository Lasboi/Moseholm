<?php

// forbindelse til database
require "settings/init.php";

//Hvis der bliver medsendt data fra formen
if(!empty($_POST["data"])){
    $data = $_POST["data"];

    //Indsæt data i databasen
    $sql = "UPDATE user SET userName=:userName WHERE userId=1";

    //Lav data fra bruger om til noget vi kan indsætte sikkert
    $bind = [":userName" => $data["userName"]];

    //Sætter indholdet ind
    $db->sql($sql, $bind, false);

    //Sikre brugeren kommer videre til den rigtige side
    header("Location: https://las-designs.dk/moseholm/ordre.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Moseholm Gårdbutik - Betaling</title>

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

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<!-- Inkludere navigations modulet -->
<?php include 'navigation.php';?>

<!-- Inkludere hero modulet -->
<?php include 'hero_text.php';?>

<!-- Overskrift -->
<h2 class="centeredHeader">Betaling</h2>

<!-- Form som brugeren kan udfylde -->
<form method="post" action="betaling.php">
    <div class="formWrapper">
        <div class="formFlexWrapper">
            <div class="formSection">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="name"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Navn & Efternavn" aria-label="Navn & Efternavn" aria-describedby="name" name="data[userName]">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="adress"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Adresse" aria-label="Adresse" aria-describedby="adress">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="email"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="email">
                </div>
            </div>

            <div class="formSection">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="cardNumber"><i class="far fa-credit-card"></i></span>
                    </div>
                    <input type="number" class="form-control" placeholder="Kreditkort nummer" aria-label="Kreditkort nummer" aria-describedby="cardNumber">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="cardDate"><i class="far fa-credit-card"></i></span>
                    </div>
                    <input type="number" class="form-control" placeholder="Udløbsmåned & år" aria-label="Udløbsmåned & år" aria-describedby="cardDate">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="cardCVV"><i class="far fa-credit-card"></i></span>
                    </div>
                    <input type="number" class="form-control" placeholder="CVV Nummer" aria-label="CVV Nummer" aria-describedby="cardCVV">
                </div>
            </div>
        </div>
        <hr>
        <p class="basketTotal">Subtotal</p>
        <p class="basketTotalAmount">39,00 DKK</p>
        <div class="basketButton">
            <a href="ordre.php">
                <button class="productButton" type="submit"><i class="fas fa-shopping-basket basketIcon"></i>Køb produkt</button>
            </a>
        </div>
    </div>
</form>

<!-- Inkludere footer modulet -->
<?php include 'footer.php';?>

<!-- Henter bootstrap funktioner -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Henter mobil navbar funktioner -->
<script src="js/mobileNavToggle.js"></script>
</body>
</html>