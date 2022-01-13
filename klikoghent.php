<!DOCTYPE html>
<html lang="da">
<head>

    <!-- SEO -->
    <meta charset="utf-8">
    <meta name="robots" content="All">
    <title>Moseholm Gårdbutik - Klik & Hent</title>
    <meta name="description" content="I vores webshop kan du få en lang række nye lækre friske produkter som pakkes til dig når du bestiller">

    <!-- OG Tags -->
    <meta property="og:title" content="Moseholm Webshop - Altid friske produkter klar til afhentning">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://las-designs.dk/moseholm/klikoghent.php">
    <meta property="og:image" content="https://las-designs.dk/moseholm/images/friske-varer.png">

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

<!-- Overskrift -->
<h2 class="centeredHeader">Moseholm Webshop</h2>

<!-- Kategori knapper -->
<div class="saleButtonWrapper">
    <div class="row">
        <div class="col-lg-2"></div>
            <div class="col-lg-2 col-sm-6 col-6 text-center">
                <button class="productButton">Kød produkter</button>
            </div>
            <div class="col-lg-2 col-sm-6 col-6 text-center">
                <button class="productButton">Mejeri produkter</button>
            </div>
            <div class="col-lg-2 col-sm-6 col-6 text-center">
                <button class="productButton">Korn produkter</button>
            </div>
            <div class="col-lg-2 col-sm-6 col-6 text-center">
                <button class="productButton">Natur produkter</button>
            </div>
        <div class="col-lg-2"></div>
    </div>
</div>

<!-- Sorter efter knap -->
<select class="form-select selectItem" aria-label="Default select example">
    <option selected>Standard sortering</option>
    <option value="1">Pris høj til lav</option>
    <option value="2">Pris lav til høj</option>
    <option value="3">Alfabetisk</option>
</select>

<!-- Produkter -->
<div class="productContentWrapper">
    <div class="row">
        <div class="col-lg-3 col-sm-12">
            <div class="card">
                <a href="produktside.php">
                    <img src="images/honning-produkt.png" class="card-img-top" alt="Moseholm billig honing">
                </a>
                <div class="card-body">
                    <h2 class="card-title text-center cardTitleText">Honning - 300g</h2>
                    <h3 class="card-text text-center cardPrice">39 DKK</h3>
                    <div class="countWrapper">
                        <input type="button" value="-" id="minus1" onclick="minus1()" class="countButton">
                        <input type="text" value="1" id="count1" class="countText">
                        <input type="button" value="+" id="plus1" onclick="plus1()" class="countButton">
                    </div>
                    <div class="basketButton">
                        <a href="produktside.php">
                            <button class="productButton"><i class="fas fa-shopping-basket basketIcon"></i>Køb produkt</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="card">
                <a href="produktside.php">
                    <img src="images/milk-produkt.png" class="card-img-top" alt="Moseholm frisk mælk">
                </a>
                <div class="card-body">
                    <h2 class="card-title text-center cardTitleText">Mælk - 1 liter</h2>
                    <h3 class="card-text text-center cardPrice">10 DKK</h3>
                    <div class="countWrapper">
                        <input type="button" value="-" id="minus2" onclick="minus2()" class="countButton">
                        <input type="text" value="1" id="count2" class="countText">
                        <input type="button" value="+" id="plus2" onclick="plus2()" class="countButton">
                    </div>
                    <div class="basketButton">
                        <a href="produktside.php">
                            <button class="productButton"><i class="fas fa-shopping-basket basketIcon"></i>Køb produkt</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="card">
                <a href="produktside.php">
                    <img src="images/bread-produkt.png" class="card-img-top" alt="Moseholm friskbagt brød">
                </a>
                <div class="card-body">
                    <h2 class="card-title text-center cardTitleText">Friskbagt brød - 1 stk</h2>
                    <h3 class="card-text text-center cardPrice">25 DKK</h3>
                    <div class="countWrapper">
                        <input type="button" value="-" id="minus3" onclick="minus3()" class="countButton">
                        <input type="text" value="1" id="count3" class="countText">
                        <input type="button" value="+" id="plus3" onclick="plus3()" class="countButton">
                    </div>
                    <div class="basketButton">
                        <a href="produktside.php">
                            <button class="productButton"><i class="fas fa-shopping-basket basketIcon"></i>Køb produkt</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="card">
                <a href="produktside.php">
                    <img src="images/sausage-produkt.png" class="card-img-top" alt="Frisklavet pølser klar til panden">
                </a>
                <div class="card-body">
                    <h2 class="card-title text-center cardTitleText">Danske pølser - 600g</h2>
                    <h3 class="card-text text-center cardPrice">35 DKK</h3>
                    <div class="countWrapper">
                        <input type="button" value="-" id="minus4" onclick="minus4()" class="countButton">
                        <input type="text" value="1" id="count4" class="countText">
                        <input type="button" value="+" id="plus4" onclick="plus4()" class="countButton">
                    </div>
                    <div class="basketButton">
                        <a href="produktside.php">
                            <button class="productButton"><i class="fas fa-shopping-basket basketIcon"></i>Køb produkt</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Side navigation -->
<div class="nextPageWrapper">
    <div class="nextPageButton" id="nextPageActive">
        <p>1</p>
    </div>
    <div class="nextPageButton">
        <p>2</p>
    </div>
    <div class="nextPageButton">
        <p>3</p>
    </div>
</div>

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