<?php include '../partials/Header.php'; ?>


<div class="login-container">
	<section id="content">
		<form action="">
			<h1>Hello again!</h1>
            <h3>Enter your email and you password to confirm your identity</h3>
			<div>
            
				<input type="text" placeholder="Email" required="" id="email" />
			</div>
			<div>  
               
				<input type="password" placeholder="Password" required="" id="password" />
			</div>
			<div>
            <div class="buttonLink">
                <button class="logInButton"> Login</button>
				<a href="<?= BASE_PATH ?>pages/Register.php">Create an account?</a>
            </div>
	
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
    <?php include '../partials/Footer.php'; ?>
</div><!-- container -->


