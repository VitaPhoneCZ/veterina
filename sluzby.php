<?php
// Načtení textového obsahu
$texty = [];
foreach (file('Obsah/sluzby.txt') as $radek) {
    list($klic, $hodnota) = explode('=', trim($radek), 2);
    $texty[$klic] = $hodnota;
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $texty['hlavicka_title'] ?></title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1><?= $texty['hlavicka_nadpis'] ?></h1>
        <h3><?= $texty['hlavicka_podnadpis'] ?></h3>
    </header>
    <div class="obrazek">
    </div>
    <nav>
        <a href="index.php">Domů</a>
        <a href="o-mne.php">O mně</a>
        <a href="sluzby.php" class="vybrano">Služby</a>
        <a href="kontakt.php">Kontakt</a>
        <a href="cenik.php">Ceník</a>
    </nav>
    <div class="tabulka">
        <p><?= $texty['sluzby_uvod'] ?></p>
        <h2><?= $texty['sluzby_nadpis'] ?></h2>
        <h3 onclick="scrollToPrevence()" class="preklik"><?= $texty['sluzby_prehled_prevence'] ?></h3>
        <h3 onclick="scrollToEuthanasia()" class="preklik"><?= $texty['sluzby_prehled_euthanasia'] ?></h3>
        <h3 onclick="scrollToAparat()" class="preklik"><?= $texty['sluzby_prehled_aparat'] ?></h3>
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
        <button class="arrow right">&#10095;</button>
    </div>
    <div class="tabulka">
        <h3><?= $texty['prevence_nadpis'] ?></h3>
        <ul>
            <li><?= $texty['prevence_klinicke_vysetreni'] ?></li>
            <li><?= $texty['prevence_vakcinace'] ?></li>
            <li><?= $texty['prevence_antiparazitarni_program'] ?></li>
            <li><?= $texty['prevence_uprava_drapku'] ?></li>
            <li><?= $texty['prevence_paranalni_vacky'] ?></li>
        </ul>
    </div>
    <div class="tabulka">
        <h3><?= $texty['administrativa_nadpis'] ?></h3>
        <ul>
            <li><?= $texty['administrativa_cipovani'] ?></li>
            <li><?= $texty['administrativa_ockovaci_prukaz'] ?></li>
            <li><?= $texty['administrativa_europas'] ?></li>
            <li><?= $texty['administrativa_veterinarni_potvrzeni'] ?></li>
        </ul>
    </div>
    <div class="tabulka">
        <h2><?= $texty['euthanasia_nadpis'] ?></h2>
        <p><?= $texty['euthanasia_popis'] ?></p>
        <h3><?= $texty['euthanasia_prubeh_nadpis'] ?></h3>
        <p><?= $texty['euthanasia_prubeh'] ?></p>
        <h3>Jste rozhodnutí pro eutanasii doma?</h3>
        <div class="parent-container">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
            <a href="kontakt.php" class="call-link">
                <i class="fas fa-phone"></i> Objednejte si veterináře domů
            </a>
        </div>  
    </div>
    <div class="tabulka">
        <h2><?= $texty['aparat_nadpis'] ?></h2>
        <p><?= $texty['aparat_popis'] ?></p>
    </div>
    <footer>
        <p><?= $texty['paticka'] ?></p>
    </footer>
</body>
</html>
