<?php
session_start();
include '../../../auth/dbConfig.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login/');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $blogId = $_GET['bid'];
    $blogId = filter_var($blogId, FILTER_VALIDATE_INT);

    if ($blogId === false) {
        // Handle invalid $blogId, perhaps redirect or show an error message
        exit("Invalid blog ID");
    }

    // Handle file upload
    $imgPath = $_FILES['img_path']['name'];

    // Validate and sanitize input values if needed

    // Update blog in the database
    $updateBlog = $conn->prepare('UPDATE blog SET title = ?, blog_content = ?, img_path = ?, show_name = ?, published = ? WHERE id = ?');
    $updateBlog->bind_param('ssssii', $title, $blogContent, $imgPath, $showName, $published, $blogId);
    $updateBlog->execute();
    $updateBlog->close();

    // Move the uploaded file to the desired destination
    move_uploaded_file($_FILES['img_path']['tmp_name'], 'path_to_upload_directory/' . $imgPath);

    // Redirect to a confirmation page or wherever needed
    header('Location: ../../../../a/allBlogs');
    exit;
}
?>
