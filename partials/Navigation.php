<input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
  	<label for="menu-icon"></label>
  	<nav class="nav"> 		
  		<ul class="pt-5">
		<?php if (!isset($_SESSION['loggedin'])): ?>
		 	<li><a href="<?= BASE_PATH ?>home">Home</a></li>
  			<li><a href="<?= BASE_PATH ?>events">Events</a></li>
  			<li><a href="<?= BASE_PATH ?>blogs">Blog</a></li>
  			<li><a href="<?= BASE_PATH ?>contact">Contact</a></li>
			<li><a href="<?= BASE_PATH ?>login">Login</a></li>
			
			<?php else: ?>
				<li><a href="<?= BASE_PATH ?>home">Home</a></li>
  			<li><a href="<?= BASE_PATH ?>events">Events</a></li>
  			<li><a href="<?= BASE_PATH ?>blogs">Blog</a></li>
  			<li><a href="<?= BASE_PATH ?>contact">Contact</a></li>
			<li><a href="<?= BASE_PATH ?>u/account">Account</a></li>
	
						
			<?php if ($_SESSION['is_admin'] == 1): ?>
			<li><a href="<?= BASE_PATH ?>a/allUsers">Dashboard</a></li>
			<?php endif ?>

			<?php endif ?>
                    
  		</ul>
  	</nav>