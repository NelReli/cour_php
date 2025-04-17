<?php
// UPDATE - Mise à jour du nom d'un élève
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifier'])) {
    $id = (int) $_POST['id'];
    $nouveauNom = trim(htmlspecialchars($_POST['nom']));
 
    // Requête SQL préparée pour modifier le nom
    $stmt = $pdo->prepare("UPDATE eleves SET nom = :nom WHERE id = :id");
    $stmt->execute([
        ':nom' => $nouveauNom,
        ':id' => $id
    ]);
 
    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>✅ Élève ID $id mis à jour avec succès ! Nouveau nom : $nouveauNom</p>";
    } else {
        echo "<p style='color: red;'>❌ Aucun changement effectué.</p>";
    }
}

include_once "view/03update.php";
?>