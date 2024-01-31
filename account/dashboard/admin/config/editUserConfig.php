<?php
session_start();
include '../../../auth/dbConfig.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login/');
    exit;
}




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uid = $_GET['uid'];
$uid = filter_var($uid, FILTER_VALIDATE_INT);
if ($uid === false) {
    // Handle invalid $uid, perhaps redirect or show an error message
    exit("Invalid user ID");
}

    $username = $_POST['username'];
    $email = $_POST['email'];

    // Validate and sanitize input values
   
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ( $username === false  || $email === false) {
        // Handle invalid input, perhaps redirect or show an error message

        exit("Invalid input values");
    }

    // Update user in the database
    $updateUser = $conn->prepare('UPDATE users SET username = ?,  email = ? WHERE id = ?');
    $updateUser->bind_param('sss', $username,  $email, $uid);

    $updateUser->execute();

    $updateUser->close();


    // Redirect to a confirmation page or wherever needed
    header('Location: ../../../../a/allUsers');
    exit;

} 
?>
