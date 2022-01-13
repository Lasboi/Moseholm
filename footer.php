<?php
//Footer modul som kan importeres til php sider
echo '
<footer class="footerWrapper">
	<div class="footerFlexWrap">
		<div class="footerContentWrapper">
			<h2 class="text-white text-center footerHeadline">Navigation</h2>
				<a href="klikoghent.php" class="footerLink text-center"><p class="text-center text-white footerLink">Klik og Hent</p></a>
				<a href="index.php" class="footerLink text-center"><p class="text-center text-white footerLink">Gårdbutikken</p></a>
				<a href="index.php" class="footerLink text-center"><p class="text-center text-white footerLink">Om Moseholm</p></a>
				<a href="index.php" class="footerLink text-center"><p class="text-center text-white footerLink">Kontakt os</p></a>
		</div>
		<div class="footerContentWrapper">
			<h2 class="text-white text-center footerHeadline">Kontakt os</h2>
				<a href="tel:+4522455326" class="footerContact text-center"><p class="text-center text-white footerContact"><i class="fas fa-phone footerIcon"></i>+45 22 45 53 26</p></a>
				<a href="mailto:hej@moseholm.dk" class="footerContact text-center"><p class="text-center text-white footerContact"><i class="fas fa-envelope footerIcon"></i>hej@moseholm.dk</p></a>
				<a href="https://goo.gl/maps/6oNiYcTkb5aeCtw29" target="_blank" rel="noopener" class="footerContact text-center footerContact"><p class="text-center text-white footerContact"><i class="fas fa-map-marker-alt footerIcon"></i>Moseholm 1, 4180 Sorø</p></a>
		</div>
		<div class="footerContentWrapper">
			<h2 class="text-white text-center footerHeadline">Følg Moseholm</h2>
			<div class="footerSocialFlex">
				<a href="images/Facebook_Opslag.png" target="_blank" class="footerLogo"><img src="images/facebook_logo.png" alt="Facebook Logo Moseholm"></a>
				<a href="images/Instagram_Opslag.png" target="_blank" class="footerLogo"><img src="images/instagram_logo.png" alt="Instagram Logo Moseholm"></a>
				<a href="images/LinkedIn_Opslag.png" target="_blank" class="footerLogo"><img src="images/linkedin_logo.png" alt="LinkedIn Logo Moseholm"></a>
			</div>
			<h2 class="text-white text-center footerHeadline">Kontrol Rapport</h2>
			<img src="images/kontrol_rapport.gif" alt="Moseholm Kontrol Rapport 2022" class="footerControlImage">
		</div>
	</div>
</footer>
'

?>