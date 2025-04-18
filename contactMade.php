<?php



?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css_/style.css'>
    <script src='js/contact.js' defer></script>
    <title>HomePilot</title>
</head>
<body>
    <?php
    echo "<header>
        <img class='css--homePilotLogoText' src='Images/Logo/homepilot.webp' alt=''>
        <a href='index.php'><button class='css--button js--button'>Grafieken</button></a>
        <a href='settings.php'><button class='css--button js--button'>Instellingen</button></a>
        <a href='contact.php'><button class='css--button css--activeButton' id='js--activeButton'>Contact</button></a>
        <article class='css--tijdVak' id='js--tijdVak'></article>
    </header>";
    ?>
    <?php
    echo "<main id='js--contactMain' class='css--contactMain'>

        <article class='css--contactArt' id='js--contactArt'>
        <form method='GET'>
        <p>dankuwel</p>
        </form>
        </article>
        <article class='css--contactInfoArt css--article'>
            <p class='css--contactP'>U kunt ons ook mailen of bellen.<br>
                Wij zijn ma-za van <br>9.00-17.00 beschikbaar</p><br><br>
            <p class='css--contactP'>+31 06 97395610</p><br><br>
            <p class='css--contactP'>info@homepilot.com</p>
            <a href='https://github.com/Stogdy/HuisDashboardM3/tree/main' target='_blank'><img src='Images/github.png' alt='github link' class='css--gitHubLink' target='_blank'></a>
        </article>

    </main>";
    ?>
    <?php 
    echo "<footer> 
        <p>HomePilot | Adres: Contactweg 36, Amsterdam | Telefoonnummer: +31 06 97395610 | Email: info@homepilot.com</p>
    </footer>";
    ?>
    
</body>

</html>