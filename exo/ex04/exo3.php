<?php
session_start();

// Initialiser le panier si vide
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

// Ajouter un article
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $prix = floatval($_POST['prix'] ?? 0);

    if ($nom && $prix > 0) {
        $_SESSION['panier'][] = [
            'nom' => htmlspecialchars($nom),
            'prix' => $prix
        ];
    }
}

// Vider le panier (optionnel)
if (isset($_GET['vider'])) {
    $_SESSION['panier'] = [];
    header("Location: panier.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Panier</title>
</head>
<body>
    <h2>Ajouter un article</h2>
    <form method="POST">
        <input type="text" name="nom" placeholder="Nom de l'article" required>
        <input type="number" name="prix" placeholder="Prix (€)" step="0.01" required>
        <button type="submit">Ajouter au panier</button>
    </form>

    <h3>Contenu du panier :</h3>
    <ul>
        <?php 
        $total = 0;
        foreach ($_SESSION['panier'] as $article): 
            $total += $article['prix'];
        ?>
            <li><?= htmlspecialchars($article['nom']) ?> - <?= number_format($article['prix'], 2) ?> €</li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Total :</strong> <?= number_format($total, 2) ?> €</p>

    <a href="?vider=1">🗑️ Vider le panier</a>
</body>
</html>
