<?php 
  session_start(); 
  include '../../../../partials/Header.php';
?>



<div class="accountWrapper">
<p class="section-header">
	personal info </p>

    <form class="accountForm">
    
    <div class="personalInfo">
        <label class="username"> Username</label>
        <p> <?= $_SESSION['username'] ?> </p>
        </div>

        <div class="email">
        <label class=""> Email</label>
        <p> <?= $_SESSION['email'] ?> </p>
        <hr>
        </div>

        <div class="password">
        <label class=""> Password</label>
        <p> <?= $_SESSION['password'] ?> </p>
        <hr>
        </div>
    </div>

</form>

<a class="signOut"> 
    <img src="<?= BASE_PATH?>assets/images/signOut.svg" alt="" srcset="">
    Sigh out</a>

    </div>

    
<?php 
  include '../../../../partials/Footer.php';
?>