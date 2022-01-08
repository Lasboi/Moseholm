<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Moseholm Gårdbutik - Klik & Hent</title>

    <!-- Sætter vores favicon -->
    <link rel="icon" type="image/x-icon" href="images/moseholm_favicon.ico">

    <meta name="robots" content="All">
    <meta name="author" content="Lasse Nielsen">
    <meta name="copyright" content="Zealand - Lasse Nielsen">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Impotere font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Impotere font Montserrat Font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include 'navigation.php';?>

<?php include 'hero_text.php';?>

<h2 class="centeredHeader">Moseholm Webshop</h2>

<div class="saleButtonWrapper">
    <div class="row">
        <div class="col-2"></div>
            <div class="col-lg-2 text-center">
                <button class="productButton">Kød produkter</button>
            </div>
            <div class="col-lg-2 text-center">
                <button class="productButton">Mejeri produkter</button>
            </div>
            <div class="col-lg-2 text-center">
                <button class="productButton">Korn produkter</button>
            </div>
            <div class="col-lg-2 text-center">
                <button class="productButton">Natur produkter</button>
            </div>
        <div class="col-2"></div>
    </div>
</div>

<select class="form-select selectItem" aria-label="Default select example">
    <option selected>Standard sortering</option>
    <option value="1">Pris høj til lav</option>
    <option value="2">Pris lav til høj</option>
    <option value="3">Alfabetisk</option>
</select>

<div class="productContentWrapper">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <img src="images/honning-produkt.png" class="card-img-top" alt="Moseholm billig honing">
                <div class="card-body">
                    <h2 class="card-title text-center cardTitleText">Honning - 300g</h2>
                    <h3 class="card-text text-center cardPrice">39 DKK</h3>
                    <div class="countWrapper">
                        <input type="button" value="-" id="minus" onclick="minus()" class="countButton">
                        <input type="text" value="1" id="count" class="countText">
                        <input type="button" value="+" id="plus" onclick="plus()" class="countButton">
                    </div>
                    <div class="basketButton">
                        <a href="index.php">
                            <button class="productButton"><i class="fas fa-shopping-basket basketIcon"></i>Køb produkt</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="images/honning-produkt.png" class="card-img-top" alt="Moseholm billig honing">
                <div class="card-body">
                    <h2 class="card-title text-center cardTitleText">Honning - 300g</h2>
                    <h3 class="card-text text-center cardPrice">39 DKK</h3>
                    <div class="countWrapper">
                        <input type="button" value="-" id="minus" onclick="minus()" class="countButton">
                        <input type="text" value="1" id="count" class="countText">
                        <input type="button" value="+" id="plus" onclick="plus()" class="countButton">
                    </div>
                    <div class="basketButton">
                        <a href="index.php">
                            <button class="productButton"><i class="fas fa-shopping-basket basketIcon"></i>Køb produkt</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="images/honning-produkt.png" class="card-img-top" alt="Moseholm billig honing">
                <div class="card-body">
                    <h2 class="card-title text-center cardTitleText">Honning - 300g</h2>
                    <h3 class="card-text text-center cardPrice">39 DKK</h3>
                    <div class="countWrapper">
                        <input type="button" value="-" id="minus" onclick="minus()" class="countButton">
                        <input type="text" value="1" id="count" class="countText">
                        <input type="button" value="+" id="plus" onclick="plus()" class="countButton">
                    </div>
                    <div class="basketButton">
                        <a href="index.php">
                            <button class="productButton"><i class="fas fa-shopping-basket basketIcon"></i>Køb produkt</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="images/honning-produkt.png" class="card-img-top" alt="Moseholm billig honing">
                <div class="card-body">
                    <h2 class="card-title text-center cardTitleText">Honning - 300g</h2>
                    <h3 class="card-text text-center cardPrice">39 DKK</h3>
                    <div class="countWrapper">
                        <input type="button" value="-" id="minus" onclick="minus()" class="countButton">
                        <input type="text" value="1" id="count" class="countText">
                        <input type="button" value="+" id="plus" onclick="plus()" class="countButton">
                    </div>
                    <div class="basketButton">
                        <a href="index.php">
                            <button class="productButton"><i class="fas fa-shopping-basket basketIcon"></i>Køb produkt</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<?php include 'footer.php';?>


<script>
    let count = 1;
    let countElement = document.getElementById("count");
    function plus(){
        count++;
        countElement.value = count;
    }
    function minus(){
        if (count > 1) {
            count--;
            countElement.value = count;
        }
    }
</script>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>