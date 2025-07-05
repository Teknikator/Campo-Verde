<?php
    include '../web_data_import/php_import_top.txt';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include $base_path_php . 'web_data_import/header.php'; ?>

    <link rel="stylesheet" href="<?php echo $base_path; ?>css/unterseiten.css">
    <style>
        /* Navigations-Style für die aktuelle Seite */
        #nav2 {
            color: var(--active-color); /* Diese Variable kommt aus root.css */
        }
    </style>

    <title>Reiterhof Campo verde | Pensionsstall</title>
</head>
<body>

    <?php include $base_path_php . 'web_data_import/nav.php'; ?>

    <div class="inhalt">
        <h1 class="ueberschrift">Pensionsstall</h1>
        <div class="content inhalt-pensionsstall">
            <div class="bild">
                <img src="<?php echo $base_path; ?>bilder/pensionsstall.webp" alt="Pferde im Pensionsstall">
            </div>
            <div class="text">
                <h4>Campo verde bietet insgesamt 15 Plätze für Pferde und Ponys, davon sind aktuell 8 Plätze an Einsteller
                    vermietet. Wir bieten Boxen mit und ohne Paddock (für die Nacht), einen großen Laufststall, in dem die
                    Pferde sich am Tag in der Gruppe frei bewegen können.
                    <br>
                    Ein ehemaliges Futtersilo ist zum Offenstall für max.4 Pferde umgebaut worden. Hier gibt es einen großen
                    überdachten Bereich zum Fressen und Liegen und eine große Bewegungsfläche mit direkt angrenzender Koppel.
                    Die Ponys leben in einem seperaten Offenstall mit 2 Unterständen sowie einer großen Auslauf-Fläche.
                    <br>
                    Alle Pensionsplätze werden durch uns in Vollpension versorgt, in allen Stallbereichen gibt es Heuraufen zur
                    freien Heuverfügung oder Heunetze.
                    <br>
                    In den Sommermonaten sind die Pferde ganztägig auf unseren zahlreichen Koppeln untergebracht.
                    <br>
                    Direkt am Stall befindet sich ein Sand-Reitplatz und ein überdachtes Roundpen.
                    <br>
                    Durch die direkte Nähe zum Wald gibt es vielseitige Möglichkeiten zum Ausreiten im Gelände. Viele
                    unterschiedliche Wege bieten eine große Auswahl an Touren durch den Wald oder entlang der Felder.
                    <br>
                    Infos zu freien Stellplätzen und Einstellpreisen gibt es im persönlichen Kontakt oder auf unserer <br> Facebook
                    Seite: <a href="https://www.facebook.com/profile.php?id=100057515586491" target="_blank" rel="noopener noreferrer">https://www.facebook.com/profile.php?id=100057515586491</a>
                </h4>
            </div>
        </div>
    </div>

    <?php include $base_path_php . 'web_data_import/php_import_bottom.txt'; ?>
    <script src="<?php echo $base_path; ?>js/unterseiten_animation.js" defer></script>

    </body>
</html>