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

    <style>
        #nav7 { /* Annahme: #nav7 für Anfahrt */
            color: var(--active-color); /* Diese Variable kommt aus root.css */
        }
    </style>

    <link rel="stylesheet" href="<?php echo $base_path; ?>css/unterseiten.css">
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/anfahrt.css">

    <title>Reiterhof Campo verde | Anfahrt</title>
</head>
<body>

    <?php include $base_path_php . 'web_data_import/nav.php'; ?>

    <div class="inhalt">
        <ueberschrift-anfahrt>
            <h1 class="ueberschrift">Anfahrt</h1>
        </ueberschrift-anfahrt>

        <div class="content anfahrt-infos">
            <div class="mapouter">
                <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=8.865816593170168%2C49.31003120273889%2C8.869357109069826%2C49.31156654459113&amp;layer=mapnik" allowfullscreen></iframe>
                <a href="https://www.openstreetmap.org/?#map=19/49.310799/8.867587" target="_blank" class="map-overlay-link">Größere Karte anzeigen</a>
            </div>
            
            <info-anfahrt>
                <ul>
                    <li>
                        <strong class="strong">campo verde</strong> <br>
                        Fam. Carrasco Herrera   <br>
                        Daisbacher Weg 1    <br>
                        74927 Eschelbronn   <br>
                        Rhein-Neckar-Kreis
                    </li>
                </ul>
            </info-anfahrt>
        </div>
    </div>

    <?php include $base_path_php . 'web_data_import/php_import_bottom.txt'; ?>

    <script src="<?php echo $base_path; ?>js/unterseiten_animation.js" defer></script>

</body>
</html>