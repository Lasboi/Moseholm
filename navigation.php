<?php

//Navigation modul som kan importeres til php sider
echo'
<nav>
    <div class="desktopShow">
        <div class="upperNav">
            <div class="navMobile">
                <a href="tel:+4522455326" class="navTopText"><i class="fas fa-phone navTopIcon"></i>+45 22 45 53 26</a>
            </div>
            <div class="navEmail">
                <a href="mailto:hej@moseholm.dk" class="navTopText"><i class="fas fa-envelope navTopIcon"></i>hej@moseholm.dk</a>
            </div>
        </div>
    
        <div class="mainNav">
            <div class="mainLogoWrapper">
                <a href="index.php"><img src="images/moseholm_Logo.png" class="mainLogo" alt="Moseholm Logo"></a>
            </div>
            <div class="mainNavLink">
                <a href="klikoghent.php">Klik&Hent</a>
                <a href="index.php">Gårdbutikken</a>
                <a href="index.php">Om Moseholm</a>
                <a href="index.php">Kontakt os</a>
            </div>
        </div>
    </div>

    <div class="mobileShow">
        <div class="upperNav">
            <div class="navMobile">
                <a href="tel:+4522455326" class="navTopText"><i class="fas fa-phone navTopIcon"></i>+45 22 45 53 26</a>
            </div>
            <div class="navEmail">
                <a href="mailto:hej@moseholm.dk" class="navTopText"><i class="fas fa-envelope navTopIcon"></i>hej@moseholm.dk</a>
            </div>
        </div>
        
        <div class="mobileNav">
            <a href="index.php"><img src="images/moseholm_Logo.png" alt="Moseholm Logo" class="mobileNavImage"></a>
            <div id="mobileLinks">
                <a href="klikoghent.php">Klik&Hent</a>
                <a href="index.php">Gårdbutikken</a>
                <a href="index.php">Om Moseholm</a>
                <a href="index.php">Kontakt os</a>
            </div>

            <a href="javascript:void(0);" class="icon" onclick="mobileNavbarToggle()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
</nav>'
?>