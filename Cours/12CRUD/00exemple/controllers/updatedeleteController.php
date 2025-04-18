<?php

// Suppression d'un produit via l'ID passé dans l'URL (?supprimer=ID)
if (isset($_GET['supprimer'])) {
    $id = $_GET['supprimer'];
    // Requête préparée de suppression par ID
    $stmt = $pdo->prepare("DELETE FROM produits WHERE id = ?");
    $stmt->execute([$id]);
}

// Mise à jour d'un produit avec les données du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $categorie_id = $_POST['categorie_id'];

    // Requête préparée pour mettre à jour les champs d'un produit
    $stmt = $pdo->prepare("UPDATE produits SET nom = ?, prix = ?, categorie_id = ? WHERE id = ?");
    $stmt->execute([$nom, $prix, $categorie_id, $id]);
}

include_once "views/upadtedelete.php";
?>