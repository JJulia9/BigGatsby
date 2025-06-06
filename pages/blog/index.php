<?php 
session_start();
include '../../account/auth/dbConfig.php';
include '../../partials/Header.php'; 
include '../../partials/Navigation.php';



    $blog = $conn->prepare('SELECT 
	
    b.id,
    b.title,
    b.blog_content,
    b.created_on,
    b.img_path,
    b.show_name

   FROM blog b  ');

$blog->execute();
$blog->store_result();
$blog->bind_result($blogID, $blogTitle, $blogContent, $blogCreated, $imgPath, $showName);
echo $blogID;


?>



<p class="section-header">
	icles art </p>


<div class="articlesWrap">

  <?php while ($blog->fetch()): ?>
    
    <div class="articleContainer">

        <div class="articleImg">
            <img src="<?= BASE_PATH ?>assets/images/events/<?= $imgPath ?>" alt="<?= $showName ?>">
        </div>

        <div class="articleText">
        <hr>
            <h3><?= $blogTitle ?></h3>
			<p><?= $blogContent ?></p>

            <a href="<?=BASE_PATH?>blogDetails/<?= $blogID ?>">
			<svg xmlns="http://www.w3.org/2000/svg" width="44" height="38" viewBox="0 0 44 38" fill="none">
<path d="M2.95898 16.25C1.57827 16.25 0.458984 17.3693 0.458984 18.75C0.458984 20.1307 1.57827 21.25 2.95898 21.25V16.25ZM42.8121 20.5178C43.7884 19.5415 43.7884 17.9585 42.8121 16.9822L26.9021 1.07233C25.9258 0.0960197 24.3429 0.0960197 23.3666 1.07233C22.3903 2.04864 22.3903 3.63155 23.3666 4.60786L37.5088 18.75L23.3666 32.8921C22.3903 33.8684 22.3903 35.4514 23.3666 36.4277C24.3429 37.404 25.9258 37.404 26.9021 36.4277L42.8121 20.5178ZM2.95898 21.25H41.0443V16.25H2.95898V21.25Z" fill="#960B17"/>
</svg>	
</a>

<hr>


	</div>

    </div>

    
    <?php endwhile ?>
 


</div>

<?php include '../../partials/Footer.php'; ?>