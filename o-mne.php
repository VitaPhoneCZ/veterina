<?php
// Načtení textového obsahu z externího JSON souboru
$texty = json_decode(file_get_contents('Obsah/O_mne.txt'), true);
?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($texty['title']) ?></title>
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
        <a href="o-mne.php" class="vybrano">O mně</a>
        <a href="sluzby.php">Služby</a>
        <a href="kontakt.php">Kontakt</a>
        <a href="cenik.php">Ceník</a>
    </nav>
    <div class="tabulka">
        <h2><?= htmlspecialchars($texty['hlavni_nadpis']) ?></h2>
        <h3><?= htmlspecialchars($texty['jmeno']) ?></h3>
        <p><?= htmlspecialchars($texty['odstavec_1']) ?></p>
        <p><?= htmlspecialchars($texty['odstavec_2']) ?></p>
        <p><?= htmlspecialchars($texty['odstavec_3']) ?></p>
        <p><?= htmlspecialchars($texty['odstavec_4']) ?></p>
        <img src="zuzka1-min.jpg" alt="">
    </div>
    <footer>
        <p><?= htmlspecialchars($texty['paticka']) ?></p>
    </footer>
</body>

</html>
