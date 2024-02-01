<?php include '../partials/Header.php'; ?>
<?php include '../partials/Navigation.php'; ?>



<div class="login-container" style="background-image: url(<?= BASE_PATH ?>assets/images/registerBackg.png)">
	<section id="content">
		<form action="<?=BASE_PATH?>account/auth/register.php" method="post">
			<h1>Welcome!</h1>
            <h3>Enter your username,email and password to create an account</h3>
			<div>
			<label for="username"></label>
			<input type="text" placeholder="Username" required="" id="username" name="username" />
			</div>
            
            <div>
            <label  for="email"></label>
				<input type="text" placeholder="Email" required="" id="email"  name="email"/>
			</div>
			<div>  

			<label  for="password"></label>
				<input type="password" placeholder="Password" required="" id="password" name="password" />
			</div>
			<div>

            <div class="buttonLink">
                <button class="logInButton" type="submit"> Register</button>
				<a href="<?=BASE_PATH?>login">Have an account?</a>
            </div>
	
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
   
</div><!-- container -->

<?php include '../partials/Footer.php'; ?>




