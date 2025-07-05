<?php
    // Pfade für PHP-Includes und HTML-Links/Ressourcen müssen definiert sein
    // Dies sollte idealerweise in einer zentralen Konfigurationsdatei geschehen,
    // die vor dieser Datei inkludiert wird (z.B. 'root_pfad.php' wie von dir erwähnt)

    // Beispiel für die Definition der Pfade, falls nicht bereits geschehen:
    // $base_path = '/Campo-Verde-update/new'; // Für HTML-Links, CSS, JS
    // $base_path_php = '/var/www/html/Campo-Verde-update/new/'; // Für PHP includes

    // Falls 'php_import_top.txt' und 'php_import_bottom.txt' tatsächlich einen Level höher liegen:
    include '../web_data_import/php_import_top.txt'; // Beibehaltung deiner relativen Pfadangabe
?>

<!DOCTYPE html>
<html lang="de">
<head>

    <?php include $base_path_php . 'web_data_import/header.php'; ?>
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/ueber_uns.css">

    <title>Reiterhof Campo verde | Über uns</title>
</head>
<body>

    <?php include $base_path_php . 'web_data_import/nav.php'; ?>

    <inhalt-ueber-uns>
        <info-ueber-uns>
            <p class="ueberschrift-ueber-uns">Wir sind die Familie Carrasco Herrera <br> wir leben seit 2009 mit unseren Tieren auf unserem Hof campo verde.</p>
        </info-ueber-uns>
        <person class="person1">
            <infos-person>
                <p class="name"><b>Patricia Carrasco Herrera</b></p>
                <p class="ueber-mich">Ich bin Ergotherapeutin, Reittherapeutin und Fachlehrerin seit 1998 an der SRH.</p>
            </infos-person>
            <bild-person>
                <img src="<?php echo $base_path; ?>bilder/Personenbilder/Patricia Carassco.webp" alt="Patricia Carrasco Herrera">
            </bild-person>
        </person>

        <person class="person2">
            <bild-person>
                <img src="<?php echo $base_path; ?>bilder/Personenbilder/Eliel Carassco.webp" alt="Eliel Carrasco Herrera">
            </bild-person>

            <infos-person>
                <p class="name"><b>Eliel Carrasco Herrera</b></p>
                <p class="ueber-mich">Geboren in Chile, ich lebe seit 2005 in Deutschland. <br> Ich kümmere mich hier um den Hof und die Tiere.</p>
            </infos-person>
        </person>
        <person class="person3">
            <infos-person>
                <p class="name"><b>Pablo Carrasco Herrera</b></p>
            </infos-person>
            <bild-person>
                <img src="<?php echo $base_path; ?>bilder/Personenbilder/Pablo Carassco.webp" alt="Pablo Carrasco Herrera">
            </bild-person>
        </person>

        <person class="person4">
            <bild-person>
                <img src="<?php echo $base_path; ?>bilder/Personenbilder/Nemias Carassco.webp" alt="Nemias Carrasco Herrera">
            </bild-person>

            <infos-person>
                <p class="name"><b>Nemias Carrasco Herrera</b></p>
            </infos-person>
        </person>

        <info-mitarbeiter>
            <p class="unsere-mitarbeiter">Unsere Mitarbeiter:</p>

            <mitarbeiter>
                <img src="<?php echo $base_path; ?>bilder/Tiere/Aragon.webp" alt="Aragon">
                <img src="<?php echo $base_path; ?>bilder/Tiere/Tangy.webp" alt="Tangy">
                <img src="<?php echo $base_path; ?>bilder/Tiere/Alicia und Mia.webp" alt="Alicia und Mia">
                <img src="<?php echo $base_path; ?>bilder/Tiere/Lisa.webp" alt="Lisa">
                <img src="<?php echo $base_path; ?>bilder/Tiere/Frodo + Luca.webp" alt="Frodo und Luca">
                <img src="<?php echo $base_path; ?>bilder/Tiere/Lizzy.webp" alt="Lizzy">
                <img src="<?php echo $base_path; ?>bilder/Tiere/Leo.webp" alt="Leo">
                <img src="<?php echo $base_path; ?>bilder/Tiere/Tommy + Lucy.webp" alt="Tommy und Lucy">
                <img src="<?php echo $base_path; ?>bilder/Tiere/Polly.webp" alt="Polly">
            </mitarbeiter>
        </info-mitarbeiter>
    </inhalt-ueber-uns>

    <?php include $base_path_php . 'web_data_import/php_import_bottom.txt'; ?>
    <script src="<?php echo $base_path; ?>js/ueber_uns_animation.js"></script>
</body>
</html>