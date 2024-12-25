<?php
$texty = json_decode(file_get_contents('Obsah/kontakt.txt'), true);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($texty['kontakt_nadpis']) ?> - VetJede</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1>VetJede</h1>
        <h3>Veterinářka jede - až k Vám domů!</h3>
    </header>
    <div class="obrazek">
    </div>
    <nav>
        <a href="index.php">Domů</a>
        <a href="o-mne.php">O mně</a>
        <a href="sluzby.php">Služby</a>
        <a href="kontakt.php" class="vybrano">Kontakt</a>
        <a href="cenik.php">Ceník</a>
    </nav>
    <div class="tabulka">
        <h2><?= htmlspecialchars($texty['kontakt_nadpis']) ?></h2>
        <p><?= htmlspecialchars($texty['kontakt_jmeno']) ?></p>
        <p><?= htmlspecialchars($texty['kontakt_telefon']) ?></p>
        <p><?= htmlspecialchars($texty['kontakt_email']) ?></p>
        <p>
            <?= htmlspecialchars($texty['kontakt_pracovni_doba']) ?> 
            <a href="cenik.php">ceník</a>
        </p>
        <p><?= htmlspecialchars($texty['kontakt_lokalita']) ?></p>
    </div>
    <div class="tabulka">
        <h2><?= htmlspecialchars($texty['spoluprace_nadpis']) ?></h2>
        <p><?= htmlspecialchars($texty['spoluprace_nazev']) ?></p>
        <img src="imgs/psi-hotel.jpg" alt="Psí hotel Kuky" class="psi-hotel-img">
        <p><?= htmlspecialchars($texty['spoluprace_popis']) ?></p>
        <a href="<?= htmlspecialchars($texty['spoluprace_odkaz']) ?>" target="_blank">Navštivte web</a>
    </div>
    <footer>
        <p>© 2024 Veterinářka Jede. Všechna práva vyhrazena.</p>
    </footer>
</body>
</html>
