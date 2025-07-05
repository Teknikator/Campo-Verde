<?php
    include 'web_data_import/php_import_top.txt'
?>

<!DOCTYPE html>
<html lang="de">

<head>

    <?php include 'web_data_import/header.php'; ?>

    <title>Reiterhof Campo verde</title>
    <!--Spezifischer Import-->
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/startseite.css">
</head>

<body>

    <?php include $base_path_php . 'web_data_import/nav.php'; ?>

    <inhalt-start-seite class="inhalt">
        <Ueberschrift>
            <h3>Herzlich Willkommen auf unserem Hof:</h3>
            <h1>campo verde</h1>
        </Ueberschrift>
        <nr-1>
            <p class="Info-Text-Startseite">
                Seit 2009 gibt es unseren Hof campo verde in Eschelbronn zwischen dem
                Kraichgau und dem vorderen
                Odenwald. Er liegt außerhalb vom Dorf und fast am Waldrand gelegen genießen wir hier mit unserer Familie
                und den Tieren die Natur und Ruhe. <br><br>
                Unser kleiner Stall bietet für unsere und eingestellten Pferde eine harmonische Atmosphäre und die
                Möglichkeit, in Gruppen artgerecht zu leben. <br><br>
                Hier können sich Mensch und Tier auf Augenhöhe begegnen.
            </p>
            <img class="Bild-Startseite" src="<?php echo $base_path; ?>bilder/startseite_foto.webp" alt="">
        </nr-1>
    </inhalt-start-seite>

    <?php include 'web_data_import/php_import_bottom.txt'; ?>

</body>

</html>