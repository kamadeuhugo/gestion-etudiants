<?php
if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
    echo "L'étudiant $nom a été supprimé !";
}
?>
<!DOCTYPE html>
<html>
<head><title>Supprimer un étudiant</title></head>
<body>
    <h1>Supprimer un étudiant</h1>
    <a href="supprimer.php?nom=Jessy">Supprimer Jessy</a><br>
    <a href="supprimer.php?nom=Alice">Supprimer Alice</a><br><br>
    <a href="index.php">Retour à la liste</a>
</body>
</html>