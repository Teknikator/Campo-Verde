<?php
    // Stellen Sie sicher, dass $base_path und $base_path_php hier definiert sind,
    // z.B. durch einleitendes Include einer Konfigurationsdatei.
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
        #foot2 { 
            color: var(--active-color); /* Diese Variable kommt aus root.css */
        }
    </style>

    <link rel="stylesheet" href="<?php echo $base_path; ?>css/unterseiten.css">
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/footer_seiten.css">

    <title>Reiterhof Campo verde | Impressum</title>
</head>
<body>

    <?php include $base_path_php . 'web_data_import/nav.php'; ?>

    <div class='impressum'>
        <h1 class="ueberschrift">Impressum</h1> <div class="inhalt"> <p class="strong">Angaben gemäß § 5 TMG</p>
            <p class="info">
                Patricia Carrasco <br>
                Daisbacher Weg. 1<br>
                74927 Eschelbronn <br>
            </p>
            <p class="strong">
                Vertreten durch:
            </p>
            <p class="info">
                Patricia Carrasco
            </p>
            <p class="strong">
                Kontakt:
            </p>
            <p class="info">
                Telefon: <a href="tel:06226-972288">06226-972288</a><br>
                E-Mail: <a href='mailto:patrizel@web.de'>patrizel@web.de</a></br>
            </p>
            <p class="strong stronger">
                Haftungsausschluss:
            </p>
            <div class="haftung">
                <p class="strong">
                    Haftung für Inhalte
                </p>
                <p class="info">
                    Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit,
                    Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen. Als
                    Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den
                    allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht
                    verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen
                    zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder
                    Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine
                    diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten
                    Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese
                    Inhalte umgehend entfernen.
                </p>
                <p class="strong">
                    Haftung für Links
                </p>
                <p class="info">Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen
                    Einfluss haben.
                    Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der
                    verlinkten
                    Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten
                    Seiten
                    wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte
                    waren zum
                    Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten
                    Seiten ist
                    jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von
                    Rechtsverletzungen werden wir derartige Links umgehend
                    entfernen.
                </p>
                <p class="strong">
                    Urheberrecht
                </p>
                <p class="info">
                    Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem
                    deutschen
                    Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb
                    der
                    Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw.
                    Erstellers.
                    Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet.
                    Soweit
                    die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter
                    beachtet.
                    Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine
                    Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei
                    Bekanntwerden von
                    Rechtsverletzungen werden wir derartige Inhalte umgehend
                    entfernen.
                </p>
                <p class="strong">
                    Datenschutz
                </p>
                <p class="info">
                    Infos zu unserem Datenschutz finden Sie im <a href="<?php echo $base_path; ?>php/datenschutz.php">Datenschutz</a>.
                </p>
            </div>
        </div>
    </div>

    <?php include $base_path_php . 'web_data_import/php_import_bottom.txt'; ?>

    <script src="<?php echo $base_path; ?>js/unterseiten_animation.js" defer></script>

</body>
</html>