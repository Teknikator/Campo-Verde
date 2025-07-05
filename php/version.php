<?php
    include '../web_data_import/php_import_top.txt';
    // Annahme: $base_path und $base_path_php sind in php_import_top.txt definiert
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <?php include $base_path_php . 'web_data_import/header.php'; ?>

    <title>Reiterhof campo verde | Versionen</title>

    <link rel="stylesheet" href="<?php echo $base_path; ?>css/version.css">
    
</head>
<body>

    <?php include $base_path_php . 'web_data_import/nav.php'; ?>

    <main id="version-page-main" class="main-content-wrapper"> 
        <nav class="page-navigation">
            <a href="<?php echo $base_path; ?>index.php" class="back-to-home-link">
                <img src="<?php echo $base_path; ?>bilder/arrow-left-solid.svg" alt="Zurück" class="arrow-icon"> Zurück zur Startseite
            </a>
        </nav>

        <section class="section-last-update">
            <div class="last-update-box">
                <p>Letztes Update 05.07.2025</p>
            </div>
        </section>

        <section class="section-progress-bars">
            <h2 class="section-title">Technologie-Nutzung</h2>
            <div class="progress-cards-container">
                <div class="progress-card">
                    <div class="percent" style="--clr: #ff7043; --num:76;"> <div class="dot"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="number">
                            <h2>76 <span>%</span></h2>
                            <p>Html</p>
                        </div>
                    </div>
                </div>
                <div class="progress-card">
                    <div class="percent" style="--clr: #29b6f6; --num:16;"> <div class="dot"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="number">
                            <h2>16 <span>%</span></h2>
                            <p>Css</p>
                        </div>
                    </div>
                </div>
                <div class="progress-card">
                    <div class="percent" style="--clr: #ffca28; --num:8;"> <div class="dot"></div>
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>
                        <div class="number">
                            <h2>8 <span>%</span></h2>
                            <p>JavaScript</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-version-history">
            <h2 class="section-title">Versions-Chronik</h2>
            <div class="version-list-container">
                <article class="version-entry">
                    <a href="#" data-nummer="10" class="version-header clickable-header">
                        Version 1.0 (Juli. 2025) Final <span class="toggle-icon">+</span>
                    </a>
                    <ul class="version-details" id="lang10">
                        <li><abbr>+</abbr> Switch von Google Maps auf Open Street Maps</li>
                        <li><abbr>+</abbr> Animationen hinzugefügt</li>
                        <li><abbr>+</abbr> Seiten Infos geupdatet</li>
                        <li><abbr>+</abbr> Seiten Design angepasst</li>
                        <li><abbr>+</abbr> Seiten Responsive gemacht</li>
                        <li><abbr>+</abbr> Bilder Komprimiert um Ladengeschwindigkeit zu erhöhen</li>
                        <li><abbr>+</abbr> Seiten Ladengeschwindigkeit um bis zu 200% erhöht</li>
                        <li><abbr>+</abbr> Seiten von html auf php umgestellt</li>
                    </ul>
                </article>
                <article class="version-entry">
                    <a href="#" data-nummer="08" class="version-header clickable-header">
                        Version 0.8 (März. 2024) Beta <span class="toggle-icon">+</span>
                    </a>
                    <ul class="version-details" id="lang08">
                        <li><abbr>+</abbr> Impressum und Datenschutz überarbeitet (09.03.2024)</li>
                        <li><abbr>+</abbr> Lenny ist vor wenigen Tagen auf der Regenbogenwiese angekommen(21.02.2024)</li>
                        <li><abbr>+</abbr> Bildergalerie Design verändert Mobile & PC (11.02.2024)</li>
                        <li><abbr>+</abbr> Regenbogenwiese | Bilder getrennt (04.02.2024)</li>
                    </ul>
                </article>
                <article class="version-entry">
                    <a href="#" data-nummer="07" class="version-header clickable-header">
                        Version 0.7 (Jan. 2024) Beta <span class="toggle-icon">+</span>
                    </a>
                    <ul class="version-details" id="lang07">
                        <li><abbr>+</abbr> Regenbogenwiese | Bilder getrennt (04.02.2024)</li>
                        <li><abbr>+</abbr> Fehler auf Mobilgeräten behoben (26.01.2024)</li>
                        <li><abbr>+</abbr> Datenschutz veränderung (04.01.2024)</li>
                        <li><abbr>+</abbr> Server umzug, neuer leistungsstärkerer Server 100% Ökostrom (25.07.2023)</li>
                    </ul>
                </article>
                <article class="version-entry">
                    <a href="#" data-nummer="06" class="version-header clickable-header">
                        Version 0.6 (Juni. 2023) Beta <span class="toggle-icon">+</span>
                    </a>
                    <ul class="version-details" id="lang06">
                        <li><abbr>+</abbr> Seite Bilder überarbeitet (Fehler Behoben Bild Endung immer .jpg!) (14.06.2023)</li>
                        <li><abbr>+</abbr> Seite Bilder überarbeitet (Dialog Box-shadow + Border) (14.06.2023)</li>
                        <li><abbr>+</abbr> Seite Bilder überarbeitet (Bilder werden klein geladen) (13.06.2023)</li>
                        <li><abbr>+</abbr> Seite Bilder (Regenbogenwiese) überarbeitet (Bilder Tiere hinzugefügt) (13.06.2023)</li>
                        <li><abbr>+</abbr> Seite Bilder (Regenbogenwiese) überarbeitet (hintergrundbild Regenbogen) (06.06.2023)</li>
                    </ul>
                </article>
                <article class="version-entry">
                    <a href="#" data-nummer="05" class="version-header clickable-header">
                        Version 0.5 (Juni. 2023) Beta <span class="toggle-icon">+</span>
                    </a>
                    <ul class="version-details" id="lang05">
                        <li><abbr>+</abbr> Seite Ferienwohnung erstellt (05.06.2023)</li>
                        <li><abbr>+</abbr> Seite Ferienprogramm erstellt (05.06.2023)</li>
                        <li><abbr>+</abbr> Über Uns Überarbeitet (05.06.2023)</li>
                        <li><abbr>+</abbr> Bild Starseite Überarbeitet (05.06.2023)</li>
                        <li><abbr>+</abbr> Anfahrt Überarbeitet (02.06.2023)</li>
                        <li><abbr>+</abbr> Über Uns Überarbeitet (02.06.2023)</li>
                        <li><abbr>+</abbr> Startseite Überarbeitet (02.06.2023)</li>
                        <li><abbr>+</abbr> Schriftart Patrick Hand hinzugefügt (02.06.2023)</li>
                        <li><abbr>+</abbr> Mit Patricia Farben Verändert (02.06.2023)</li>
                        <li><abbr>+</abbr> Mit Patricia Rechtschreibfehler Korrigiert (02.06.2023)</li>
                    </ul>
                </article>
                <article class="version-entry">
                    <a href="#" data-nummer="04" class="version-header clickable-header">
                        Version 0.4 (Mai. 2023) Beta <span class="toggle-icon">+</span>
                    </a>
                    <ul class="version-details" id="lang04">
                        <li><abbr>+</abbr> Seiten <a href="<?php echo $base_path; ?>Unterseiten/Über uns/über-uns.html">Über Uns</a>, <a href="<?php echo $base_path; ?>Unterseiten/Anfahrt/anfahrt.html">Anfahrt</a> und <a href="<?php echo $base_path; ?>Unterseiten/bilder/bilder.html">Bilder Galerie</a> sind im Handy format verfügbar (responsiv) (10.05.2023)</li>
                        <li><abbr>+</abbr> Seiten <a href="<?php echo $base_path; ?>Unterseiten/Therapeutisches-Reiten/therapeutisches-reiten.html">Therapeutisches Reiten</a>, <a href="<?php echo $base_path; ?>Unterseiten/Pensionsstall/pensionsstall.html">Pensionsstall</a> und <a href="<?php echo $base_path; ?>Unterseiten/Reiten-lernen/reiten-lernen.html">Reiten lernen</a> sind im Handy format verfügbar (responsiv) (10.05.2023)</li>
                        <li><abbr>+</abbr> Seite Reiten lernen erstellt (08.05.2023)</li>
                        <li><abbr>+</abbr> Seite Therapeutisches Reiten erstellt (08.05.2023)</li>
                        <li><abbr>+</abbr> Seite Pensionsstall erstellt (08.05.2023)</li>
                        <li><abbr>+</abbr> Impressum erstellt (08.05.2023)</li>
                        <li><abbr>+</abbr> Datenschutz Aktualisiert (08.05.2023)</li>
                        <li><abbr>+</abbr> Tool Turnstile eingebunden (Cloudflare) (08.05.2023)</li>
                        <li><abbr>+</abbr> Tool Web Analytics eingebunden (Cloudflare) (08.05.2023)</li>
                        <li><abbr>+</abbr> Webseite ist nun Https geschützt mit Cloudflare <a href="https://reiterhof-campo-verde.de">https://reiterhof-campo-verde.de</a> (08.05.2023)</li>
                        <li><abbr>+</abbr> Webseite ist nun unter <a href="http://reiterhof-campo-verde.de">http://reiterhof-campo-verde.de</a> erreichbar dadurch gibt es mögliche Probleme(07.05.2023)</li>
                    </ul>
                </article>
                <article class="version-entry">
                    <a href="#" data-nummer="03" class="version-header clickable-header">
                        Version 0.3 (April. 2023) Beta <span class="toggle-icon">+</span>
                    </a>
                    <ul class="version-details" id="lang03">
                        <li><abbr>+</abbr> Neuer Text Startseite (27.04.2023)</li>
                        <li><abbr>+</abbr> Footer Responsiv gemacht (27.04.2023)</li>
                        <li><abbr>+</abbr> Startseite Responsiv gemacht (27.04.2023)</li>
                        <li><abbr>+</abbr> Versionsseite Responsiv gemacht (04.04.2023)</li>
                        <li><abbr>+</abbr> Über Uns Seite Bearbeitet (04.04.2023)</li>
                        <li><abbr>+</abbr> Dropdown Menü Nav-leiste hinzugefügt (30.03.2023)</li>
                        <li><abbr>+</abbr> Datenschutz Verändert (28.03.2023)</li>
                        <li><abbr>+</abbr> Logo geändert </li>
                        <li><abbr>+</abbr> Starseiten Text Verändert (09.02.2023)</li>
                        <li><abbr>+</abbr> Bilder Galerie erstellt + Dialog bei Anklicken des Bildes(08.02.2023)</li>
                        <li><abbr>+</abbr> Version Desing überarbeitet (05.02.2023)</li>
                        <li><abbr>+</abbr> Hyperlink E-Mail im Footer (02.02.2023)</li>
                        <li><abbr>+</abbr> Hyperlink Telefon im Footer (02.02.2023)</li>
                        <li><abbr>+</abbr> Bilder Galerie Seite erstellt (31.01.2023)</li>
                    </ul>
                </article>
                <article class="version-entry">
                    <a href="#" data-nummer="02" class="version-header clickable-header">
                        Version 0.2 (Sep. 2022) Beta <span class="toggle-icon">+</span>
                    </a>
                    <ul class="version-details" id="lang02">
                        <li><abbr>+</abbr> Cookies Überarbeitet</li>
                        <li><abbr>+</abbr> Server Überarbeitet, Ordner Verschiebung &#10132; mögliche Bugs (28.09.2022)</li>
                        <li><abbr>+</abbr> Version Änderungsprotokol Seite überarbeitet (18.09.2022)</li>
                        <li><abbr>+</abbr> Anfahrt-Seite erstellt mit Inhalt (18.09.2022)</li>
                        <li><abbr>+</abbr> Webseite Online genommen (16.09.2022)</li>
                        <li><abbr>+</abbr> Textart eingebunden (Courgette)</li>
                        <li><abbr>+</abbr> 404 Error Code Seite erstellt (nicht eingebunden)</li>
                        <li><abbr>+</abbr> Cookies Aktzeptieren erstellt</li>
                        <li><abbr>+</abbr> Footer via. JavaScript erstellt</li>
                        <li><abbr>-</abbr> Footer entfernt</li>
                        <li><abbr>-</abbr> Navigationsleiste entfernt</li>
                    </ul>
                </article>
                <article class="version-entry">
                    <a href="#" data-nummer="01" class="version-header clickable-header">
                        Version 0.1 (Aug. 2022) Beta <span class="toggle-icon">+</span>
                    </a>
                    <ul class="version-details" id="lang01">
                        <li><abbr>+</abbr> Textarten eigebunden (Roboto, Dancing script)</li>
                        <li><abbr>+</abbr> Version Änderungsprotokol Seite erstellt</li>
                        <li><abbr>+</abbr> Navleiste erstellt</li>
                        <li><abbr>+</abbr> Footer erstellt</li>
                        <li><abbr>+</abbr> Startseite erstellt</li>
                        <li><abbr>+</abbr> Logo erstellt</li>
                    </ul>
                </article>
            </div>
        </section>
    </main>

    <?php include $base_path_php . 'web_data_import/php_import_bottom.txt'; ?>

    <script src="<?php echo $base_path; ?>js/versionen.js"></script>

</body>
</html>