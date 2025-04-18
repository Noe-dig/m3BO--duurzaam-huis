<?php



?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css_/style.css'>
    <script src='js/settings.js' defer></script>
    <title>HomePilot</title>
</head>
<body> <!-- onload='checkCookie()'--> 
    <div class="loadingScreen">
        <img class="css--homePilotLogo" src="Images/Logo/HomePilotLogo.webp" alt="Home Pilot logo">
    </div> 
    <?php 
    echo "<header id='js--header'>
        <img class='css--homePilotLogoText' src='Images/Logo/homepilot.webp' alt=''>
        <a href='index.php'><button class='css--button' id='js--button'><p class='css--tabTekst'>Grafieken</p></button></a>
        <a href='settings.php'><button class='css--button css--activeButton' id='js--activeButton'><p class='css--tabTekst'>Instellingen</p></button></a>
        <a href='contact.php'><button class='css--button' id='js--button'><p class='css--tabTekst'>Contact</p></button></a>
        <article class='css--tijdVak' id='js--tijdVak'></article>
    </header>";
    ?>
    <?php
    echo "<main id='js--settingsMain' class='css--settingsMain'>
        <article class='css--settingsTextArt css--article'>
            <h2>Tekstgrootte</h2>
        </article>

        <article class='css--settingsSliderArt css--article'>
            <input id='js--slider' type='range' min='1' max='5' step='1'>
        </article>

        <article class='css--settingsColorArt css--article'>
            <input type='button' id='js--greenColorButton' class='css--colorButton css--greenColorButton'>
            <input type='button' id='js--redColorButton' class='css--colorButton  css--redColorButton'>
            <input type='button' id='js--blueColorButton' class='css--colorButton  css--blueColorButton'>
            <input type='button' id='js--orangeColorButton' class='css--colorButton  css--orangeColorButton'>
            <input type='button' id='js--camoColorButton' class='css--colorButton  css--camoColorButton'>

        </article>
    </main>";
    ?>
    <?php
    echo "<footer id='js--footer'>
        <p>HomePilot | Adres: Contactweg 36, Amsterdam | Telefoonnummer: +31 06 97395610 | Email: info@homepilot.com</p>
    </footer>"
    ?>
</body> 

</html>
<input type='color' id='js--colorPicker' class='css--colorPicker' value='#11A325'>
