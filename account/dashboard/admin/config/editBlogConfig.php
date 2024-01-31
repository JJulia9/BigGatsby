<?php
session_start();
include '../../../auth/dbConfig.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login/');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $blogId = $_POST['bId'];
    $title = $_POST['title'];
    $blogContent = $_POST['blog_content'];
    $imgPath = $_POST['img_path'];
    $showName = $_POST['show_name'];
    $published = isset($_POST['published']) ? 1 : 0;

    // Validate and sanitize input values if needed

    // Update blog in the database
    $updateBlog = $conn->prepare('UPDATE blog SET title = ?, blog_content = ?, img_path = ?, show_name = ?, published = ? WHERE id = ?');
    $updateBlog->bind_param('ssssii', $title, $blogContent, $imgPath, $showName, $published, $blogId);
    $updateBlog->execute();
    $updateBlog->close();

    // Redirect to a confirmation page or wherever needed
    header('Location: ../../../../a/allBlogs ');
    exit;
} 

