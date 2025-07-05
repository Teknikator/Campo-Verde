<?php
    include '../web_data_import/php_import_top.txt';
    // Annahme: $base_path und $base_path_php sind in php_import_top.txt definiert
?>

<?php
// Parameter für die aktuelle Kategorie aus der URL lesen, Standard ist 'all'
$current_category = isset($_GET['category']) ? $_GET['category'] : 'all';

$page_title = 'Reiterhof campo verde | Bilder';
$heading_text = 'Bilder';
$all_bilder_active = '';
$regenbogenwiese_active = '';
$background_class = ''; // Klasse für spezifischen Hintergrundstil

// Pfad für Bilder festlegen
// Absoluter Serverpfad zum Bilderordner
$image_base_dir_server = $base_path_php .'bilder/Archiv/small/';
// Webpfad, wie er im Browser angezeigt wird
$image_base_dir_web = $base_path .'bilder/Archiv/small/';

if ($current_category === 'regenbogenwiese') {
    $page_title = 'Reiterhof campo verde | Regenbogenwiese';
    $heading_text = 'Regenbogenwiese';
    $regenbogenwiese_active = 'active';
    // Annahme: Regenbogenwiese-Bilder sind in einem Unterordner 'regenbogenwiese'
    $image_source_dir = $base_path_php .'bilder/Archiv/regenbogenwiese/small/';
    $web_path_prefix = $base_path .'bilder/Archiv/regenbogenwiese/small/';
    $background_class = 'regenbogenwiese-background'; // CSS-Klasse für den Hintergrund
} else {
    $all_bilder_active = 'active';
    $image_source_dir = $image_base_dir_server;
    $web_path_prefix = $image_base_dir_web;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include $base_path_php . 'web_data_import/header.php'; ?>

    <title><?php echo htmlspecialchars($page_title); ?></title>

    <link rel="stylesheet" href="<?php echo $base_path; ?>css/dialog.css">
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/bilder.css">
    
</head>
<body>
    
    <?php include $base_path_php . 'web_data_import/nav.php'; ?>

    <div class="inhalt-bilder <?php echo htmlspecialchars($background_class); ?>">
        <Ueberschrift>
            <h1 class="ueberschrift"><?php echo htmlspecialchars($heading_text); ?></h1>
        </Ueberschrift>

        <div class="buttons">
            <a class="<?php echo htmlspecialchars($all_bilder_active); ?>" href="bilder.php?category=all">Alle Bilder</a>
            <a class="<?php echo htmlspecialchars($regenbogenwiese_active); ?>" href="bilder.php?category=regenbogenwiese">Regenbogenwiese</a>
        </div>

        <div class="alle-bilder">
            <div id="overlay"></div>
            <?php
            // Unterstützte Bildformate für glob()
            $supported_formats = '{jpg,jpeg,png,gif,webp}';

            // Alle Bilder im aktuell ausgewählten Verzeichnis abrufen
            $images = glob($image_source_dir . '*.' . $supported_formats, GLOB_BRACE);

            if ($images) {
                foreach ($images as $image_path) {
                    $file_name = basename($image_path);
                    $full_web_path = $web_path_prefix . $file_name;
                    // id="bild" beibehalten, wie im Original. Beachten Sie, dass IDs einzigartig sein sollten.
                    echo '<bild class="bild"><img src="' . htmlspecialchars($full_web_path) . '" alt="' . htmlspecialchars(pathinfo($file_name, PATHINFO_FILENAME)) . '" id="bild"></bild>';
                }
            } else {
                echo '<p>Es wurden keine Bilder in diesem Verzeichnis gefunden.</p>';
            }
            ?>
        </div>
    </div>

    <?php include $base_path_php . 'web_data_import/php_import_bottom.txt'; ?>

    <script src="<?php echo $base_path; ?>js/dialog.js"></script>

</body>
</html>