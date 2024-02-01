<?php include '../account/auth/dbConfig.php'; ?>
<?php include '../partials/Header.php'; ?>
<?php include '../partials/Navigation.php'; ?>
<

<div class="login-container">
	<section id="content">
		<form action="<?=BASE_PATH?>account/auth/authenticate.php" method="post">
			<h1>Hello again!</h1>
            <h3>Enter your username and you password to confirm your identity</h3>
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="username" />
			</div>
			<div>  
               
				<input type="password" placeholder="Password" required="" id="password" name="password" />
			</div>
			<div>
            <div class="buttonLink">
                <button type="submit" class="logInButton" value='LOGIN'> Login</button>
				<a href="<?= BASE_PATH ?>register">Create an account?</a>
            </div>
	
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
    
</div><!-- container -->


<?php include '../partials/Footer.php'; ?>