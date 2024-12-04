<?php
$texty = json_decode(file_get_contents('Obsah/cenik.txt'), true);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($texty['cenik_nadpis']) ?> - VetJede</title>
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
        <a href="kontakt.php">Kontakt</a>
        <a href="cenik.php" class="vybrano">Ceník</a>
    </nav>

    <div class="tabulka">
        <h2><?= htmlspecialchars($texty['cenik_nadpis']) ?></h2>
        <p><?= htmlspecialchars($texty['cestovne']) ?></p>
        <p><?= htmlspecialchars($texty['ceny_uvod']) ?></p>
        <p><?= htmlspecialchars($texty['priplatek_za_vikendy']) ?></p>
    </div>
    
    <div class="tabulka">
        <h3><?= htmlspecialchars($texty['vakcinace_pes_nadpis']) ?></h3>
        <p><?= htmlspecialchars($texty['vakcinace_pes_cena']) ?></p>
        <ul>
            <?php foreach ($texty['vakcinace_pes_polozky'] as $polozka): ?>
                <li><?= htmlspecialchars($polozka) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="tabulka">
        <h3><?= htmlspecialchars($texty['vakcinace_kocka_nadpis']) ?></h3>
        <ul>
            <?php foreach ($texty['vakcinace_kocka_polozky'] as $polozka): ?>
                <li><?= htmlspecialchars($polozka) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="tabulka">
        <h3><?= htmlspecialchars($texty['vakcinace_kralik_nadpis']) ?></h3>
        <ul>
            <?php foreach ($texty['vakcinace_kralik_polozky'] as $polozka): ?>
                <li><?= htmlspecialchars($polozka) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="tabulka">
        <h3><?= htmlspecialchars($texty['vakcinace_fretka_nadpis']) ?></h3>
        <ul>
            <?php foreach ($texty['vakcinace_fretka_polozky'] as $polozka): ?>
                <li><?= htmlspecialchars($polozka) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="tabulka">
        <p><?= htmlspecialchars($texty['cipovani_nadpis']) ?></p>
        <p><?= htmlspecialchars($texty['cipovani_popis']) ?></p>
        <p><?= htmlspecialchars($texty['ockovaci_prukaz']) ?></p>
        <p><?= htmlspecialchars($texty['petpas']) ?></p>
    </div>

    <div class="tabulka">
        <p><?= htmlspecialchars($texty['klinicke_vysetreni']) ?></p>
        <p><?= htmlspecialchars($texty['ocni_vysetreni']) ?></p>
        <h4><?= htmlspecialchars($texty['osetreni_drapu_nadpis']) ?></h4>
        <ul>
            <?php foreach ($texty['osetreni_drapu_polozky'] as $polozka): ?>
                <li><?= htmlspecialchars($polozka) ?></li>
            <?php endforeach; ?>
        </ul>
        <h4><?= htmlspecialchars($texty['osetreni_analych_zlazek_nadpis']) ?></h4>
        <ul>
            <?php foreach ($texty['osetreni_analych_zlazek_polozky'] as $polozka): ?>
                <li><?= htmlspecialchars($polozka) ?></li>
            <?php endforeach; ?>
        </ul>
        <h4>Čištění uší</h4>
        <p><?= htmlspecialchars($texty['cisteni_usi']) ?></p>
        <h4>Ošetření drobných poranění</h4>
        <p><?= htmlspecialchars($texty['osetreni_poraneni']) ?></p>
    </div>

    <div class="tabulka">
        <h2 class="eutanasie"><?= htmlspecialchars($texty['eutanasie_nadpis']) ?></h2>
        <p><?= htmlspecialchars($texty['eutanasie_cena']) ?></p>
    </div>

    <div class="tabulka">
        <p><?= htmlspecialchars($texty['antiparazitika_nadpis']) ?></p>
        <p><?= htmlspecialchars($texty['odcervovaci_tableta']) ?></p>
        <ul>
            <?php foreach ($texty['antiparazitika_polozky'] as $polozka): ?>
                <li><?= htmlspecialchars($polozka) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="tabulka">
        <p><?= htmlspecialchars($texty['konzultace']) ?></p>
        <p><?= htmlspecialchars($texty['dornova_metoda']) ?></p>
    </div>

    <footer>
        <p>© 2024 Veterinářka Jede. Všechna práva vyhrazena.</p>
    </footer>
</body>
</html>
