<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $note = $_POST['note'];
    echo "Etudiant $nom ajouté avec la note $note/20 !";
}
?>
<!DOCTYPE html>
<html>
<head><title>Ajout Etudiant</title></head>
<body>
    <h1>Ajouter un étudiant</h1>
    <form method="POST">
        <input type="text" name="nom" placeholder="Nom" required><br><br>
        <input type="number" name="note" placeholder="Note /20" required><br><br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>