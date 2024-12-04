<?php
$texty = json_decode(file_get_contents('Obsah/sluzby.txt'), true);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($texty['hlavicka_title']) ?></title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1><?= htmlspecialchars($texty['hlavicka_nadpis']) ?></h1>
        <h3><?= htmlspecialchars($texty['hlavicka_podnadpis']) ?></h3>
    </header>
    <div class="obrazek"></div>
    <nav>
        <a href="index.php">Domů</a>
        <a href="o-mne.php">O mně</a>
        <a href="sluzby.php" class="vybrano">Služby</a>
        <a href="kontakt.php">Kontakt</a>
        <a href="cenik.php">Ceník</a>
    </nav>
    <div class="tabulka">
        <p><?= htmlspecialchars($texty['sluzby_uvod']) ?></p>
        <h2><?= htmlspecialchars($texty['sluzby_nadpis']) ?></h2>
        <h3 onclick="scrollToPrevence()" class="preklik"><?= htmlspecialchars($texty['sluzby_prehled_prevence']) ?></h3>
        <h3 onclick="scrollToEuthanasia()" class="preklik"><?= htmlspecialchars($texty['sluzby_prehled_euthanasia']) ?></h3>
        <h3 onclick="scrollToAparat()" class="preklik"><?= htmlspecialchars($texty['sluzby_prehled_aparat']) ?></h3>
    </div>
    <div class="slideshow-container">
        <div class="slideshow">
            <img src="imgs/pes_drapy-min.jpg" loading="lazy" alt="Obrázek 1">
            <img src="imgs/pes_injekce-min.jpg" loading="lazy" alt="Obrázek 2">
            <img src="imgs/pes_stetoskop-min.jpg" loading="lazy" alt="Obrázek 3">
            <img src="imgs/pes_zuby-min.jpg" loading="lazy" alt="Obrázek 4">
            <img src="imgs/pes_injekce+zuzka-min.jpg" loading="lazy" alt="Obrázek 5">
            <img src="imgs/pes_zuby+zuzka-min.jpg" loading="lazy" alt="Obrázek 6">
            <img src="imgs/pes-min.jpg" loading="lazy" alt="Obrázek 7">
        </div>
        <button class="arrow left">&#10094;</button>
        <button class="arrow right" id="prevence">&#10095;</button>
    </div>
    <div class="tabulka">
        <h3><?= htmlspecialchars($texty['prevence_nadpis']) ?></h3>
        <ul>
            <li><?= htmlspecialchars($texty['prevence_klinicke_vysetreni']) ?></li>
            <li><?= htmlspecialchars($texty['prevence_vakcinace']) ?></li>
            <li><?= htmlspecialchars($texty['prevence_antiparazitarni_program']) ?></li>
            <li><?= htmlspecialchars($texty['prevence_uprava_drapku']) ?></li>
            <li><?= htmlspecialchars($texty['prevence_paranalni_vacky']) ?></li>
        </ul>
    </div>
    <div class="tabulka">
        <h3><?= htmlspecialchars($texty['administrativa_nadpis']) ?></h3>
        <ul>
            <li><?= htmlspecialchars($texty['administrativa_cipovani']) ?></li>
            <li><?= htmlspecialchars($texty['administrativa_ockovaci_prukaz']) ?></li>
            <li><?= htmlspecialchars($texty['administrativa_europas']) ?></li>
            <li><?= htmlspecialchars($texty['administrativa_veterinarni_potvrzeni']) ?></li>
        </ul>
        <h3><?= htmlspecialchars($texty['stene_kote']) ?></h3>
        <ul>
            <li><?= htmlspecialchars($texty['stene_kote_ockovani']) ?></li>
            <li><?= htmlspecialchars($texty['stene_kote_vysetreni']) ?></li>
        </ul>
    </div>
    <div class="tabulka">
        <h3><?= htmlspecialchars($texty['vysetreni_krve_nadpis']) ?></h3>
        <p><?= htmlspecialchars($texty['vysetreni_krve']) ?></p>
        <h3><?= htmlspecialchars($texty['snap_testy_nadpis']) ?></h3>
        <p><?= htmlspecialchars($texty['snap_testy']) ?></p>
    </div>
    <div class="tabulka">
    <h3><?= htmlspecialchars($texty['osetreni_poraneni_nadpis']) ?></h3>
    <p></p>
    <h3><?= htmlspecialchars($texty['osetreni_usi_nadpis']) ?></h3>
    <p></p>
    <h3><?= htmlspecialchars($texty['chirurgicke_ukony_nadpis']) ?></h3>
    <p></p>
    <h3><?= htmlspecialchars($texty['ocni_vysetreni_nadpis']) ?></h3>
    <p><?= htmlspecialchars($texty['ocni_vysetreni_popis']) ?></p>
    <ul>
        <?php foreach ($texty['ocni_vysetreni_polozky'] as $polozka): ?>
            <li><?= htmlspecialchars($polozka) ?></li>
        <?php endforeach; ?>
    </ul>
    </div>
    <div class="tabulka">
    <h3><?= htmlspecialchars($texty['poradenstvi_vyziva_psu_a_kocka']) ?></h3>
    <p></p>
    <h3><?= htmlspecialchars($texty['zakoupeni_veterinarni_diety']) ?></h3>
    <p></p>
    <h3><?= htmlspecialchars($texty['aplikace_leku_nadpis']) ?></h3>
    <p><strong><?= htmlspecialchars($texty['vyziva_kloubu']) ?></strong></p>
    <h4 id="euthanasia"><?= htmlspecialchars($texty['osteopartritida_nadpis']) ?></h4>
    <ul>
        <li><?= htmlspecialchars($texty['osteopartritida_psi']) ?></li>
        <li><?= htmlspecialchars($texty['osteopartritida_kocky']) ?></li>
    </ul>
    <h4><?= htmlspecialchars($texty['lecba_kozni_alergie_nadpis']) ?></h4>
    <ul>
        <li><?= htmlspecialchars($texty['atopie_u_psu']) ?></li>
    </ul>
    </div>
    <div class="tabulka">
    <h2><?= htmlspecialchars($texty['euthanasia_nadpis']) ?></h2>
    <p><?= htmlspecialchars($texty['euthanasia_popis']) ?></p>
    <p><?= htmlspecialchars($texty['euthanasia_sluha_popis']) ?></p>
    <p><?= htmlspecialchars($texty['euthanasia_rozhodnuti']) ?></p>
    <h3><?= htmlspecialchars($texty['euthanasia_pred_prijezdem_nadpis']) ?></h3>
    <p><?= htmlspecialchars($texty['euthanasia_pred_prijezdem']) ?></p>
    <h3><?= htmlspecialchars($texty['euthanasia_prubeh_nadpis']) ?></h3>
    <p><?= htmlspecialchars($texty['euthanasia_prubeh']) ?></p>
    <h3><?= htmlspecialchars($texty['euthanasia_rozhodnuti_doma']) ?></h3>
    <div class="parent-container">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <a href="kontakt.php" class="call-link">
            <i class="fas fa-phone"></i> <?= htmlspecialchars($texty['kontakt_odkaz']) ?>
        </a>
    </div>
</div>

    <div class="tabulka">
        <h2 id="aparat"><?= htmlspecialchars($texty['aparat_nadpis']) ?></h2>
        <p><?= htmlspecialchars($texty['aparat_popis']) ?></p>
    </div>
    <footer>
        <p><?= htmlspecialchars($texty['paticka']) ?></p>
    </footer>
</body>
</html>
