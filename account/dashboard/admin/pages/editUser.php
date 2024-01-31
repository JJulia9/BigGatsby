<?php
session_start();
include '../../../auth/dbConfig.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login/');
    exit;
}

$uid = $_GET['uid'];

// Validate and sanitize $uid
$uid = filter_var($uid, FILTER_VALIDATE_INT);
if ($uid === false) {
    // Handle invalid $uid, perhaps redirect or show an error message
    exit("Invalid user ID");
}

$users = $conn->prepare('SELECT 
        u.id,
        u.username,
        u.active,
        u.email 
       FROM users u
       WHERE u.id = ?');

$users->bind_param('i', $uid);
$users->execute();
$users->store_result();
$users->bind_result($userId, $username, $active, $email);
$users->fetch();
?>

<form action="../../account/dashboard/admin/config/editUserConfig.php?uid=<?= $uid ?>" method="post" enctype="multipart/form-data">
    <input type="text" value="<?= $userId ?>" name="uid" readonly>
    <input type="text" value="<?= $username ?>" name="username">
    <input type="text" value="<?= $active ?>" name="active">
    <input type="text" value="<?= $email ?>" name="email">
    <input type="submit" class="submit">
</form>
