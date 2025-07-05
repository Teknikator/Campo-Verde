<nav-leiste class="nav-leiste" id="navleiste">
    <logo class="logo">
        <a href="<?php echo $base_path; ?>index.php">
            <img src="<?php echo $base_path; ?>bilder/campo_verde_logo.png">
        </a>
    </logo>
    <input type="checkbox" id="toggle_button">
    <label for="toggle_button" class="toggle_button" id="burgermenu">
        <span class="bar">
        </span>
        <span class="bar">
        </span>
        <span class="bar">
        </span>
    </label>
    <ul id="navul">
        <li><a href="<?php echo $base_path; ?>php/ueber_uns.php" id="nav1">Über uns</a></li>
        <li class="expandable_li"><input type="checkbox" id="products_checkbox"><label
                for="products_checkbox">Wir bieten an</label>
            <ul class="dropdown">
                <li><a href="<?php echo $base_path; ?>php/pensionsstall.php" id="nav2">Pensionsstall</a>
                </li>
                <li><a href="<?php echo $base_path; ?>php/therapeutisches_reiten.php" id="nav3">Therapeutisches Reiten</a></li>
                <li><a href="<?php echo $base_path; ?>php/reiten_lernen.php" id="nav4">Reiten lernen</a></li>
                <li><a href="<?php echo $base_path; ?>php/ferienprogramm.php" id="nav5">Ferienprogramm</a></li>
                <li><a href="<?php echo $base_path; ?>php/ferienwohnung.php" id="nav6">Ferienwohnung</a>
                </li>
            </ul>
        </li>
        <li><a href="<?php echo $base_path; ?>php/anfahrt.php" id="nav7">Anfahrt</a></li>
    </ul>
</nav-leiste>