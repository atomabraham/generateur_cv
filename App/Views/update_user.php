<?php
require('../Controllers/connect_db.php');
$pdo = connect_db();
// select on bd
$stmt = $pdo->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur = ?');
$stmt->execute([$_GET['id']]);
$listUser = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$listUser) {
    exit('utilisateur inexistant');
}

$msg = '';
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        $nom_utilisateur = isset($_POST['nom_utilisateur']) ? $_POST['nom_utilisateur'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $mot_de_passe = isset($_POST['mot_de_passe']) ? $_POST['mot_de_passe'] : '';

        $stmt = $pdo->prepare('UPDATE utilisateurs SET nom_utilisateur = ?, email = ?, mot_de_passe  = ? WHERE id_utilisateur = ?');
        $stmt->execute([$nom_utilisateur, $email, $mot_de_passe, $_GET['id']]);
        $msg = 'donnees modifiees!';

        header('location:dashboard_admin.php?q=utilisateurs');
        // } else{
        //     $stmt = $pdo->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur = ?');
        //     $stmt->execute([$_GET['id']]);
        //     $listUser = $stmt->fetch(PDO::FETCH_ASSOC);
        //     if (!$listUser) {
        //         exit('utilisateur inexistant');
        //     }
    }
} else {
    exit('No ID specified!');
}
?>

<div class="content update">
    <h2>Update user #
        <?= $listUser['id_utilisateur'] ?>
    </h2>
    <form method="POST" action="update_user.php?id=<?= $listUser['id_utilisateur'] ?>">
        <div class="mb-3">
            <label class="form-label">nom_utilisateur</label>
            <input type="text" class="form-control" name="nom_utilisateur" value="<?= $listUser['nom_utilisateur'] ?>">

        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $listUser['email'] ?>">

        </div>
        <div class="mb-3">
            <label class="form-label">mot_de_passe</label>
            <input type="password" value="<?= $listUser['mot_de_passe'] ?>" class="form-control" name="mot_de_passe">
        </div>

        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
    <?php if ($msg): ?>
        <p>
            <?= $msg ?>
        </p>
    <?php endif; ?>
</div>