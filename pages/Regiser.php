<?php include '../partials/Header.php'; ?>




<div class="login-container" style="background-image: url(<?= BASE_PATH ?>assets/images/registerBackg.png)">
	<section id="content">
		<form action="">
			<h1>Welcome!</h1>
            <h3>Enter your username,email and password to create an account</h3>
			<div>
            
				<input type="text" placeholder="Username" required="" id="username" />
			</div>
            
            <div>
            
				<input type="text" placeholder="Email" required="" id="email" />
			</div>
			<div>  
               
				<input type="password" placeholder="Password" required="" id="password" />
			</div>
			<div>
            <div class="buttonLink">
                <button class="logInButton"> Register</button>
				<a href="<?= BASE_PATH ?>../pages/Login.php">Have an account?</a>
            </div>
	
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
    <?php include '../partials/Footer.php'; ?>
</div><!-- container -->






