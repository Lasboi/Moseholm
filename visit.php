<?php

//Visit modul som kan importeres til php sider
echo '
<div class="visitContentWrapper">

    <div class="desktopShow">
        <h2 class="centeredHeader">Besøg Moseholm Gårdbutik</h2>

        <div class="visitHeaderWrap">
            <h3 class="visitHeaderText">Åbningstider</h3>
            <h3 class="visitHeaderText">Adresse</h3>
        </div>

        <div class="visitContentWrap">
            <div class="visitTimes">
                <p>Mandag-Torsdag<br>10:00-18:00</p>
                <p>Fredag-Lørdag<br>12:00-16:00</p>
                <p>Søndag<br>Lukket</p>
                <p>Helligdage<br>Lukket</p>
            </div>
            <a href="https://goo.gl/maps/6oNiYcTkb5aeCtw29" target="_blank" rel="noopener">
                <img src="images/moseholm-kort.png" alt="Moseholm Adresse" class="visitImage">
            </a>
        </div>
    </div>

    <div class="mobileShow">
        <h2 class="centeredHeader">Besøg Moseholm Gårdbutik</h2>
        <h3 class="visitHeaderText">Åbningstider</h3>
        <div class="visitTimes">
            <p>Mandag-Torsdag<br>10:00-18:00</p>
            <p>Fredag-Lørdag<br>12:00-16:00</p>
            <p>Søndag<br>Lukket</p>
            <p>Helligdage<br>Lukket</p>
        </div>
        <h3 class="visitHeaderText">Adresse</h3>
        <a href="https://goo.gl/maps/6oNiYcTkb5aeCtw29" target="_blank" rel="noopener">
            <img src="images/moseholm-kort.png" alt="Moseholm Adresse" class="visitImage">
        </a>
    </div>
</div>'
?>