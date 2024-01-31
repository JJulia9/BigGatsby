<?php
    include '../../../auth/dbConfig.php';

    $blogId = $_GET['bid'];

    
    $deleteBlog = $conn->prepare('DELETE FROM blog WHERE blog.id = '.$blogId.' ');

    
    $deleteUser->execute();

    header('Location: ../../../../a/allBlogs');

    ?>
