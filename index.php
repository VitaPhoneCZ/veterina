<?php
// Načtení textů z externího JSON souboru
$texty = json_decode(file_get_contents('Obsah/HomePage.txt'), true);
?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $texty['hlavicka_nadpis'] ?></title>
    <link rel="stylesheet" href="styles.css">
    <script src="scriptindex.js" defer></script>
</head>

<body>
    <header>
        <h1><?= $texty['hlavicka_nadpis'] ?></h1>
        <h3><?= $texty['hlavicka_podnadpis'] ?></h3>
    </header>
    <div class="obrazek">
    </div>
    <nav>
        <a href="index.php" class="vybrano">Domů</a>
        <a href="o-mne.php">O mně</a>
        <a href="sluzby.php">Služby</a>
        <a href="kontakt.php">Kontakt</a>
        <a href="cenik.php">Ceník</a>
    </nav>
    <div class="tabulka">
        <h2><?= $texty['hlavni_nadpis'] ?></h2>
        <p><?= $texty['hlavni_paragraf'] ?></p>
        <img src="imgs/zuzka2-min.jpg" alt="">
    </div>
    <div class="tabulka">
        <h2>Výhody ošetření zvířete v domácím prostředí:</h2>
        <?php foreach ($texty['vyhody'] as $title => $content): ?>
            <h3 class="expandable">🢂<?= $title ?></h3>
            <div class="content">
                <p><?= $content ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="tabulka">
        <h2>Jaká zvířata ošetřuji?</h2>
        <h3>Psi</h3>
        <img src="imgs/pes.png" alt="pes">
        <h3>Kočky</h3>
        <img src="imgs/kocka.png" alt="kočka">
        <h3>Drobní savci</h3>
        <img src="imgs/mali.png" alt="drobní savci">
    </div>
    <footer>
        <p><?= htmlspecialchars($texty['paticka']) ?></p>
    </footer>
</body>

</html>
