<!-- +Users should be able to register on the website with a unique username, password, and
email address. Password strength will be checked.
- +Registered users should be able to log in with their credentials.
- +Registered users should have access to a profile page where they can view their account
information.
- Admins should be the only ones allowed to create and edit new blog articles.
- Users should be able to click on specific events to access detailed information.
- Admin can edit comments and publish them.
- Registered users should have the ability to leave comments on events and articles.
- +Admins should have access to a secure dashboard for managing blog articles, user
accounts, and comments.
- Admins should be able to make user accounts inactive.
- System must remember user log in info for 24 hours.
- The website should be responsive, adapting to various screen sizes and devices. -->



<?php
session_start();
include 'partials/Header.php';
include 'account/auth/dbConfig.php';
?>

<section class="hero">
    <p class="hero-p">
Olivia Matthews
Ethan Anderson
Ava Richardson
Liam Harris
Sophia Miller
Carter 
Isabella Turner
Aiden Campbell
Emma Clark
 </p>

<h1 class="hero-h1">BIg Gatsby</h1>
<h3 class="hero-h3">theatre</h3>



<div class="lineBox">
        <p class="box__line">03.03 Broadway Extravaganza: A Night of Musical Delights  13.03 Shakespearean Showcase: Classic Tales Reimagined   18.03 Emerging Playwrights Festival: Unveiling New Voices
		</p>
    </div>

</section>


<div class="lines">
	<img src="assets/images/lines.svg" alt="">
</div>


<?php
include 'partials/Navigation.php';
?>

<div class="slider">
	<div class="slider-wrapper">
		<div class="slide">
			<img src="assets/images/1.jpg" alt="">
		</div>

		<div class="slide">
			<img src="assets/images/2.jpg" alt="">
		</div>

		<div class="slide">
			<img src="assets/images/3.jpg" alt="">
		</div>

		<div class="slide">
			<img src="assets/images/4.jpg" alt="">
		</div>

		<div class="slide">
			<img src="assets/images/5.jpg" alt="">
		</div>

		<div class="slide">
			<img src="assets/images/6.jpg" alt="">
		</div>

		<div class="slide">
			<img src="assets/images/7.jpg" alt="">
		</div>

		<div class="slide">
			<img src="assets/images/8.jpg" alt="">
		</div>
	
		<div class="slide">
			<img src="assets/images/9.jpg" alt="">
		</div>

		<div class="slide">
			<img src="assets/images/10.jpg" alt="">
		</div>


	</div>
</div>

<div class="background-svg1">


<h2 class="main-header">What's on</h2>

	
<div class="home-grid">

	<div class="grid-item1">

		<img src="assets/images/event1.jpg" alt="event" srcset="" >
	</div>

	<div class="grid-item2">
		<img src="assets/images/event2.jpg" alt="event" srcset="">
	</div>

	<div class="grid-item3">
		<img src="assets/images/event3.jpg" alt="event" srcset=""  >
	</div>

	<div class="grid-item4">
		<img src="assets/images/februaryEvents.png" alt="" sizes="" srcset="">
		<p>february events</p>
	</div>

	<div class="grid-item5">
		<img src="assets/images/event4.jpg" alt="event" srcset=""  >
	</div>

</div>


<p class="section-header">
	ticles ar </p>

</div>

<section class="blog">

	<div class="blog-wrapper">
		<div class="blog-img">
			<img src="assets/images/blog1.png" alt="" srcset="">
		</div>

		<div class="blog-articles">
			
			<hr>
			<div class="article">
			<p>lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
			<svg xmlns="http://www.w3.org/2000/svg" width="44" height="38" viewBox="0 0 44 38" fill="none">
<path d="M2.95898 16.25C1.57827 16.25 0.458984 17.3693 0.458984 18.75C0.458984 20.1307 1.57827 21.25 2.95898 21.25V16.25ZM42.8121 20.5178C43.7884 19.5415 43.7884 17.9585 42.8121 16.9822L26.9021 1.07233C25.9258 0.0960197 24.3429 0.0960197 23.3666 1.07233C22.3903 2.04864 22.3903 3.63155 23.3666 4.60786L37.5088 18.75L23.3666 32.8921C22.3903 33.8684 22.3903 35.4514 23.3666 36.4277C24.3429 37.404 25.9258 37.404 26.9021 36.4277L42.8121 20.5178ZM2.95898 21.25H41.0443V16.25H2.95898V21.25Z" fill="#960B17"/>
</svg>
		</div>

			<hr>
			<div class="article">
			<p>lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
			<svg xmlns="http://www.w3.org/2000/svg" width="44" height="38" viewBox="0 0 44 38" fill="none">
<path d="M2.95898 16.25C1.57827 16.25 0.458984 17.3693 0.458984 18.75C0.458984 20.1307 1.57827 21.25 2.95898 21.25V16.25ZM42.8121 20.5178C43.7884 19.5415 43.7884 17.9585 42.8121 16.9822L26.9021 1.07233C25.9258 0.0960197 24.3429 0.0960197 23.3666 1.07233C22.3903 2.04864 22.3903 3.63155 23.3666 4.60786L37.5088 18.75L23.3666 32.8921C22.3903 33.8684 22.3903 35.4514 23.3666 36.4277C24.3429 37.404 25.9258 37.404 26.9021 36.4277L42.8121 20.5178ZM2.95898 21.25H41.0443V16.25H2.95898V21.25Z" fill="#960B17"/>
</svg>	
		</div>

			<hr>
			<div class="article">
			<p>lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
			<svg xmlns="http://www.w3.org/2000/svg" width="44" height="38" viewBox="0 0 44 38" fill="none">
<path d="M2.95898 16.25C1.57827 16.25 0.458984 17.3693 0.458984 18.75C0.458984 20.1307 1.57827 21.25 2.95898 21.25V16.25ZM42.8121 20.5178C43.7884 19.5415 43.7884 17.9585 42.8121 16.9822L26.9021 1.07233C25.9258 0.0960197 24.3429 0.0960197 23.3666 1.07233C22.3903 2.04864 22.3903 3.63155 23.3666 4.60786L37.5088 18.75L23.3666 32.8921C22.3903 33.8684 22.3903 35.4514 23.3666 36.4277C24.3429 37.404 25.9258 37.404 26.9021 36.4277L42.8121 20.5178ZM2.95898 21.25H41.0443V16.25H2.95898V21.25Z" fill="#960B17"/>
</svg>	
		</div>

			<hr>
			<div class="article">
			<p>lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
			<svg xmlns="http://www.w3.org/2000/svg" width="44" height="38" viewBox="0 0 44 38" fill="none">
<path d="M2.95898 16.25C1.57827 16.25 0.458984 17.3693 0.458984 18.75C0.458984 20.1307 1.57827 21.25 2.95898 21.25V16.25ZM42.8121 20.5178C43.7884 19.5415 43.7884 17.9585 42.8121 16.9822L26.9021 1.07233C25.9258 0.0960197 24.3429 0.0960197 23.3666 1.07233C22.3903 2.04864 22.3903 3.63155 23.3666 4.60786L37.5088 18.75L23.3666 32.8921C22.3903 33.8684 22.3903 35.4514 23.3666 36.4277C24.3429 37.404 25.9258 37.404 26.9021 36.4277L42.8121 20.5178ZM2.95898 21.25H41.0443V16.25H2.95898V21.25Z" fill="#960B17"/>
</svg>	
		</div>

		</div>
	</div>
	</section>
    







<?php
include 'partials/Footer.php';
?>