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
        #nav3 {
            color: var(--active-color); /* Diese Variable kommt aus root.css */
        }
    </style>

    <title>Reiterhof Campo verde | Therapeutisches Reiten</title>
</head>
<body>

    <?php include $base_path_php . 'web_data_import/nav.php'; ?>

    <div class="inhalt">
        <h1 class="ueberschrift">Therapeutisches Reiten</h1>
        <div class="content inhalt-therapeutisches-reiten">
            <div class="bild">
                <img src="<?php echo $base_path; ?>bilder/therapeutisches_reiten.webp" alt="Kind beim Therapeutischen Reiten mit Unterstützung">
            </div>
            <div class="text">
                <h4>Wir bieten therapeutisches Reiten und Reiten-lernen in einem geschützten und unterstützten Rahmen
                    für Menschen mit unterschiedlichsten Einschränkungen an. In der Einzelförderung, die in der Regel
                    eine Zeitstunde dauert, biete ich den Kontakt und Umgang mit dem Pferd, sowie die erforderlichen
                    Abläufe vor, während und nach dem Reiten an. Hier steht nicht das Erlernen von reiterlichen
                    Kompetenzen an erster Stelle, sondern die Förderung von Selbstvertrauen, Selbstreflexion sowie
                    körperliche Funktionen und deren Verbesserungen. Wir unterstützen beim Erlernen von sozialen
                    Kompetenzen und dem Umgang mit der eigenen Frustrationstoleranz und Impulskontrolle. <br> Das Tier
                    dient hier als Verbindung zwischen Therapeut und Patient.
                    <br>
                    Infos zu freien Plätzen und die Kosten bitte im persönlichen Kontakt erfragen.
                </h4>
            </div>
        </div>
    </div>

    <?php include $base_path_php . 'web_data_import/php_import_bottom.txt'; ?>
    <script src="<?php echo $base_path; ?>js/unterseiten_animation.js" defer></script>

</body>
</html>