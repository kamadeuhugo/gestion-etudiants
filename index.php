<?php
$etudiants = [
    ["nom" => "Jessy KAMADEU", "note" => 16.0],
    ["nom" => "Alice", "note" => 15.5],
];
?>
<!DOCTYPE html>
<html>
<head><title>Gestion Etudiants</title></head>
<body>
    <h1>Liste des étudiants</h1>
    <ul>
    <?php foreach($etudiants as $e): ?>
        <li><?= $e['nom'] ?> — <?= $e['note'] ?>/20</li>
    <?php endforeach; ?>
    </ul>
</body>
</html>