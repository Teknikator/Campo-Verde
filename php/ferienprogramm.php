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
        #nav5 {
            color: var(--active-color); /* Diese Variable kommt aus root.css */
        }
    </style>

    <link rel="stylesheet" href="<?php echo $base_path; ?>css/unterseiten.css">

    <title>Reiterhof Campo verde | Ferienprogramm</title>
</head>
<body>

    <?php include $base_path_php . 'web_data_import/nav.php'; ?>

    <div class="inhalt">
        <h1 class="ueberschrift">Ferienprogramm</h1>
        <div class="content inhalt-ferienprogramm">
            <div class="bild">
                <img src="<?php echo $base_path; ?>bilder/ferienprogramm.webp" alt="Kinder und Ponys beim Ferienprogramm auf dem Reiterhof">
            </div>
            <div class="text">
                <h4>
                    In den Sommerferien kannst du bei campo verde an 2 bis 3 separaten Wochen ein aufregendes
                    Ferienprogramm erleben.
                    <br>
                    Jede Woche dauert eine ganze Woche lang und bietet Platz für höchstens 12
                    begeisterte Kinder.
                    <br>
                    Wenn du zu den erfahrenen Reiter*innen gehörst, besteht sogar die Möglichkeit,
                    in der Ferienwohnung zu übernachten.
                    <br><br>
                    Um die genauen Termine und Preise zu erfahren, kannst du uns
                    jederzeit per E-Mail oder Telefon kontaktieren.
                </h4>
            </div>
        </div>
    </div>

    <?php include $base_path_php . 'web_data_import/php_import_bottom.txt'; ?>

    <script src="<?php echo $base_path; ?>js/unterseiten_animation.js" defer></script>

</body>
</html>