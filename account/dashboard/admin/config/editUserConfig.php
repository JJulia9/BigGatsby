<?php
session_start();
include '../../../auth/dbConfig.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login/');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $is_active = $_POST['active'];
    $email = $_POST['email'];

    // Validate and sanitize input values
   
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $is_active = filter_var($is_active, FILTER_VALIDATE_INT);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ( $username === false || $is_active === false || $email === false) {
        // Handle invalid input, perhaps redirect or show an error message
        exit("Invalid input values");
    }

    // Update user in the database
    $updateUser = $conn->prepare('UPDATE users SET username = ?, active = ?, email = ? WHERE id = ?');
    $updateUser->bind_param('sis', $username, $is_active, $email);
    $updateUser->execute();

    // Redirect to a confirmation page or wherever needed
    header('Location: a/allUsers ');
    exit;
} else {
    // Redirect to the appropriate page if accessed without a POST request
    header('Location: a/allUsers');
    exit;
}
?>
