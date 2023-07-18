<?php
require('../Controllers/connect_db.php');
$pdo = connect_db();
$msg = '';
// Check if POST data is not empty

$request = "SELECT*from utilisateurs";
$allUsers = $pdo->prepare($request);
$allUsers->execute();
$listUsers = $allUsers->fetchAll();
for ($i = 0; $i < count($listUsers); $i++)
    // insert data on table user
$insert = "INSERT INTO utilisateurs (`nom_utilisateur`,`email`,`mot_de_passe`,role) VALUES (?,?,?,?)";
$pdo->prepare($insert)->execute($data);
?>
<div class="content update">
    <h2>Create Admin</h2>
    <form action="add_admin.php?id=<?= $Users[$i]['id_utilisateur']; ?>" method="post">
        <label for="nom_utilisateur">nom_utilisateur</label>
        <input type="text" name="nom_utilisateur" id="nom_utilisateur">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="mot_de_passe">mot_de_passe</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe">
        <label for="role">role</label>
        <input type="text" name="role" id="role">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
        <p>
            <?= $msg ?>
        </p>
    <?php endif; ?>
</div>