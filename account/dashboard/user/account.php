<?php
session_start();
include '../../auth/dbConfig.php';
include '../../../partials/Header.php';
include '../../../partials/Navigation.php';

// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // User is logged in, fetch user information from session
    $name = $_SESSION['name'];

    // Fetch additional user information (e.g., email) from the database using the username
    if ($stmt = $conn->prepare('SELECT email FROM theatre.users WHERE username = ?')) {
        $stmt->bind_param('s', $name); // Corrected variable name to $name
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->fetch();
        $stmt->close();
    }
    // Note: You might not want to display the password directly on the page for security reasons.
} else {
    // User is not logged in, redirect to login page
    header('Location: login');
    exit;
}
?>




<div class="accountWrapper">
<p class="section-header">
	personal info </p>

    <form class="accountForm" method="post">
    
    
    <div class="personalInfo">
        <label class="username"> Username</label>
        <p>  <?php echo $name; ?> </p>
        </div>

        <div class="email">
        <label class=""> Email</label>
        <p>  <?php echo $email;?> </p>
        <hr>
        </div>

        
    </div>
    
</form>

<a href="<?= BASE_PATH?>logout" class="signOut"> 
    <img src="<?= BASE_PATH?>assets/images/signOut.svg" alt="" srcset="">
    Sigh out</a>
    
    </div>

    
<?php 
  include '../../../../partials/Footer.php';
?>