<?php
require('../Controllers/connect_db.php');
$pdo = connect_db();
$msg = '';
// Check that the contact ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur  = ?');
    $stmt->execute([$_GET['id']]);
    $listUsers = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$listUsers) {
        exit('user doesn\'t exist with that ID!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM utilisateurs WHERE id_utilisateur = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'You have deleted the user!';
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: dashboard_admin.php?q=utilisateurs');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>
<div class="content delete">
    <h2>Delete USER #
        <?= $listUsers['id_utilisateur'] ?>
    </h2>
    <?php if ($msg): ?>
        <p>
            <?= $msg ?>
        </p>
    <?php else: ?>
        <p>Are you sure you want to delete user #
            <?= $listUsers['id_utilisateur'] ?>?
        </p>
        <div class="yesno">
            <a href="delete_user.php?id=<?= $listUsers['id_utilisateur'] ?>&confirm=yes">Yes</a>
            <a href="delete_user.php?id=<?= $listUsers['id_utilisateur'] ?>&confirm=no">No</a>
        </div>
    <?php endif; ?>
</div>