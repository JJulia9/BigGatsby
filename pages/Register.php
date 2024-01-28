<?php include '../account/auth/dbConfig.php'; ?>
<?php include '../partials/Header.php'; ?>
<?php include '../partials/Navigation.php'; ?>



<div class="login-container" style="background-image: url(<?= BASE_PATH ?>assets/images/registerBackg.png)">
	<section id="content">
		<form action="../../account/auth/register.php" method="post">
			<h1>Welcome!</h1>
            <h3>Enter your username,email and password to create an account</h3>
			<div>
			<label class="block mb-2 text-sm font-bold text-gray-700" for="username">
										
									</label>
				<input type="text" placeholder="Username" required="" id="username" name='username' />
			</div>
            
            <div>
            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									
								</label>
				<input type="text" placeholder="Email" required="" id="email"  name='email'/>
			</div>
			<div>  
			<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
										
									</label>
				<input type="password" placeholder="Password" required="" id="password"
                                        name='password' />
			</div>
			<div>

            <div class="buttonLink">
                <button class="logInButton" type="submit"> Register</button>
				<a href="<?= BASE_PATH ?>login">Have an account?</a>
            </div>
	
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
    <?php include '../partials/Footer.php'; ?>
</div><!-- container -->






