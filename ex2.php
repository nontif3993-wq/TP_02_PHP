# TP_02_PHP<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
    <?php
    $nom = "ONTIF";
    $prenom = "NOUSSAIBA";
    $age = 20;
    $formation = ";

    // 2. Phrase construite avec la concaténation (.)
    $phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en " . $formation . ".";

    // 3. Ajout avec l'opérateur .=
    $phrase .= " J'apprends PHP";

    echo "<p>$phrase</p>";

    // 4. Deux variables différentes : la casse compte en PHP
    $note = 12;
    $Note = 16;

    echo "<p>\$note = $note</p>";
    echo "<p>\$Note = $Note</p>";
    ?>
</body>
</html