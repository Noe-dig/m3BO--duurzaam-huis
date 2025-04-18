<?php

$stad = "AMSTERDAM";

?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css_/style.css'>
    <script src='js/grafieken.js' defer></script>
    <title>HomePilot</title>
</head>
<body>
    <div class="loadingScreen">
        <img class="css--homePilotLogo" src="Images/Logo/HomePilotLogo.webp" alt="Home Pilot logo">
    </div> 
    <?php
        echo "<header id='js--header'>
        <img class='css--homePilotLogoText' src='Images/Logo/homepilot.webp' alt=''>
        <a href='index.php'><button class='css--button css--activeButton' id='js--activeButton'><p class='css--tabTekst'>Grafieken</p></button></a>
        <a href='settings.php'><button class='css--button' id='js--button'><p class='css--tabTekst'>Instellingen</p></button></a>
        <a href='contact.php'><button class='css--button' id='js--button'><p class='css--tabTekst'>Contact</p></button></a>
        <article class='css--tijdVak' id='js--tijdVak'></article>
    </header>";
    ?>
    <?php
        echo "<main id='js--grafMain' class='css--settingsMain'>

        <article class='css--weerBalkArt css--article'>
            <a class='weatherwidget-io' href='https://forecast7.com/nl/52d374d90/amsterdam/' data-label_1='$stad' data-label_2='WEER' data-font='Helvetica' data-icons='Climacons Animated' data-theme='pure' >$stad WEER</a>
                <!-- https://weatherwidget.io -->
        </article>
        
        <article class='css--WDataArt css--article'>
            <!-- <IFRAME SRC='https://gadgets.buienradar.nl/gadget/radarfivedays' 
            NORESIZE SCROLLING=NO HSPACE=0 VSPACE=0 FRAMEBORDER=0 MARGINHEIGHT=0 MARGINWIDTH=0 WIDTH=256 HEIGHT=406></IFRAME> -->
        </article>
        <article class='css--BRArt css--article'></article>
        <article class='css--SUSDArt css--article'></article>
        <article class='css--graphArt css--article'></article>
        <article class='css--KWArt css--article'></article>

    </main>";
    ?>
    <?php
        echo "<footer>
                <p>HomePilot | Adres: Contactweg 36, Amsterdam | Telefoonnummer: +31 06 97395610 | Email: info@homepilot.com</p>
            </footer>";
    ?>
</body>
 
</html>