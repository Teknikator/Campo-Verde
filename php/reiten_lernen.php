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
        #nav4 {
            color: var(--active-color); /* Diese Variable kommt aus root.css */
        }
    </style>

    <link rel="stylesheet" href="<?php echo $base_path; ?>css/unterseiten.css">

    <title>Reiterhof Campo verde | Reiten lernen</title>
</head>
<body>

    <?php include $base_path_php . 'web_data_import/nav.php'; ?>

    <div class="inhalt">
        <h1 class="ueberschrift">Reiten lernen</h1>
        <div class="content inhalt-reiten-lernen">
            <div class="bild">
                <img src="<?php echo $base_path; ?>bilder/reiten_lernen.webp" alt="Person auf Pferd beim Reitunterricht">
            </div>
            <div class="text">
                <h4>Wir bieten Unterricht im kleinen Rahmen ( max. 2-3 Kinder). Die Reitstunde findet immer im Freien
                    statt, fast immer gehen wir ins Gelände, manchmal findet die Einheit auf dem Reitplatz statt. Wir
                    legen großen Wert auf das Übermitteln des tierfreundlichen Umgangs mit dem Pferd. Zu der 60min.
                    Einheit zählt auch die Vor-und Nachbereitung, d.h. das Pferd holen, putzen und helfen beim Satteln
                    und nach der Reitstunde das Pferd wieder versorgen und zurückbringen. Ab welchem Alter Kinder mit
                    dem Reiten beginnen können, ist individuell. Bis ca. zum 6.LJ ist ein Reitunterricht noch nicht zu
                    empfehlen, hier geht es in erster Linie darum, eine gute Zeit mit/auf dem Pony zu verbringen.
                    <br>
                    Infos zu freien Plätzen und die Kosten bitte im persönlichen Kontakt erfragen.
                    <br>
                    In den Sommerferien finden tages- und wochenweise Ferienprogramme statt.
                </h4>
            </div>
        </div>
    </div>

    <?php include $base_path_php . 'web_data_import/php_import_bottom.txt'; ?>

    <script src="<?php echo $base_path; ?>js/unterseiten_animation.js" defer></script>

</body>
</html>