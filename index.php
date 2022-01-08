<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Moseholm Gårdbutik - Fokus på dyrevelfærd</title>

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

<?php include 'hero_button.php';?>

<div class="startHeadlineWrapper">
    <h2 class="startHeadlineText">Hvad er Moseholm?</h2>
    <p class="startHeadlineParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu sapien tortor.<br> Integer eu massa commodo, lobortis mauris eget, sagittis lorem. Nam quis efficitur leo. Sed accumsan id eros eget sollicitudin.<br> Praesent imperdiet a eros et condimentum. Fusce tempus efficitur posuere. Nunc hendrerit ligula eu mi posuere, eu elementum justo consequat.<br> Proin dui massa, auctor ac tincidunt vel, maximus vel nisl. Nam dictum libero leo, quis maximus metus pretium nec. Curabitur efficitur elit eget lacus pretium cursus.</p>
</div>

<div class="valuePointsWrapper">
    <h2 class="centeredHeader">Hvorfor vælge Moseholm?</h2>
    <div class="desktopShow">
    <div class="valueIconsWrap">
        <div>
            <img src="images/salgspointe.png" alt="Salgspointe Moseholm" class="valueImage">
        </div>
        <div class="valueContent">
            <h3 class="valueHeadline">Lorem Ipsum</h3>
            <p class="valueParagraph">Lorem ipsum dolor sit amet. Lorem ipsum sit amet. Lorem ipsum</p>
        </div>
        <div>
            <img src="images/salgspointe.png" alt="Salgspointe Moseholm" class="valueImage">
        </div>
        <div class="valueContent">
            <h3 class="valueHeadline">Lorem Ipsum</h3>
            <p class="valueParagraph">Lorem ipsum dolor sit amet. Lorem ipsum sit amet. Lorem ipsum</p>
        </div>
        <div>
            <img src="images/salgspointe.png" alt="Salgspointe Moseholm" class="valueImage">
        </div>
        <div class="valueContent">
            <h3 class="valueHeadline">Lorem Ipsum</h3>
            <p class="valueParagraph">Lorem ipsum dolor sit amet. Lorem ipsum sit amet. Lorem ipsum</p>
        </div>
    </div>
    </div>

    <div class="mobileShow">
        <div class="mobileValue">
            <img src="images/salgspointe.png" alt="Salgspointe Moseholm" class="valueImage">
            <div class="valueContent">
                <h3 class="valueHeadline">Lorem Ipsum</h3>
                <p class="valueParagraph">Lorem ipsum dolor sit amet. Lorem ipsum sit amet. Lorem ipsum</p>
            </div>
        </div>
        <div class="mobileValue">
            <img src="images/salgspointe.png" alt="Salgspointe Moseholm" class="valueImage">
            <div class="valueContent">
                <h3 class="valueHeadline">Lorem Ipsum</h3>
                <p class="valueParagraph">Lorem ipsum dolor sit amet. Lorem ipsum sit amet. Lorem ipsum</p>
            </div>
        </div>
        <div class="mobileValue">
            <img src="images/salgspointe.png" alt="Salgspointe Moseholm" class="valueImage">
            <div class="valueContent">
                <h3 class="valueHeadline">Lorem Ipsum</h3>
                <p class="valueParagraph">Lorem ipsum dolor sit amet. Lorem ipsum sit amet. Lorem ipsum</p>
            </div>
        </div>
    </div>
</div>

<div class="textContentWrap">

    <div class="textContentFlex">
        <div>
            <h2 class="startHeadlineTextContent">Moseholm Klik & Hent</h2>
            <p class="textContent">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Vestibulum eu sapien tortor. Integer eu massa commodo, lobortis mauris eget,<br> sagittis lorem. Nam quis efficitur leo. Sed accumsan id eros eget sollicitudin. Praesent imperdiet a eros et condimentum.<br> Fusce tempus efficitur posuere. Nunc hendrerit ligula eu mi posuere, eu elementum justo consequat.<br> Proin dui massa, auctor ac tincidunt vel, maximus vel nisl. Nam dictum libero leo, quis maximus metus pretium nec.<br> Curabitur efficitur elit eget lacus pretium cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu sapien tortor.<br> Integer eu massa
            </p>
        </div>
        <img src="images/friske-varer.png" alt="Friske grøntsager" class="textContentImage">
    </div>

    <div class="textContentFlexReverse">
        <img src="images/glade-faar.png" alt="Dyrevelfærd" class="textContentImage">
        <div>
            <h2 class="startHeadlineTextContent">Dyrevelfærd på Moseholm</h2>
            <p class="textContent">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Vestibulum eu sapien tortor. Integer eu massa commodo, lobortis mauris eget,<br> sagittis lorem. Nam quis efficitur leo. Sed accumsan id eros eget sollicitudin. Praesent imperdiet a eros et condimentum.<br> Fusce tempus efficitur posuere. Nunc hendrerit ligula eu mi posuere, eu elementum justo consequat.<br> Proin dui massa, auctor ac tincidunt vel, maximus vel nisl. Nam dictum libero leo, quis maximus metus pretium nec.<br> Curabitur efficitur elit eget lacus pretium cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu sapien tortor.<br> Integer eu massa
            </p>
        </div>
    </div>
</div>

<?php include 'visit.php';?>

<?php include 'footer.php';?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/mobileNavToggle.js"></script>
</body>
</html>