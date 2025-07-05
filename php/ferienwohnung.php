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
        #nav6 {
            color: var(--active-color);
            /* Diese Variable kommt aus root.css */
        }
    </style>

    <link rel="stylesheet" href="<?php echo $base_path; ?>css/unterseiten.css">

    <title>Reiterhof Campo verde | Ferienwohnung</title>
</head>

<body>

    <?php include $base_path_php . 'web_data_import/nav.php'; ?>

    <div class="inhalt">
        <h1 class="ueberschrift">Ferienwohnung</h1>
        <div class="content inhalt-ferienwohnung">
            <div class="bild">
                <img src="<?php echo $base_path; ?>bilder/ferienwohnung.webp"
                    alt="Innenansicht einer Ferienwohnung mit Schlafzimmer und Küche">
            </div>
            <div class="text">
                <h4>
                    Unsere voll ausgestattete Ferienwohnung, auf Anfrage buchbar, bietet Ihnen allen Komfort für einen
                    entspannten Aufenthalt. Mit einer Küche, einem eigenen Bad und flexiblen
                    Schlafmöglichkeiten für bis zu 10 Personen ist sie die perfekte Unterkunft für größere Familien oder
                    Gruppen, die gemeinsam die Natur und den Reitsport erleben möchten.
                </h4>
            </div>
        </div>
    </div>

    <?php include $base_path_php . 'web_data_import/php_import_bottom.txt'; ?>

    <script src="<?php echo $base_path; ?>js/unterseiten_animation.js" defer></script>

</body>

</html>