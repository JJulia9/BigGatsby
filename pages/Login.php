<?php include '../account/auth/dbConfig.php'; ?>
<?php include '../partials/Header.php'; ?>
<?php include '../partials/Navigation.php'; ?>
<

<div class="login-container">
	<section id="content">
		<form action="../account/auth/authenticate.php" method="post">
			<h1>Hello again!</h1>
            <h3>Enter your email and you password to confirm your identity</h3>
			<div>
            
				<input type="text" placeholder="Email" required="" id="email" name="email" />
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
    <?php include '../partials/Footer.php'; ?>
</div><!-- container -->


