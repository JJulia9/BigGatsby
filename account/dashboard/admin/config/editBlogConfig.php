<?php
session_start();
include '../../../auth/dbConfig.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login/');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $blogId = filter_input(INPUT_GET, 'bid', FILTER_VALIDATE_INT);

    if ($blogId === false) {
        // Handle invalid $blogId, perhaps redirect or show an error message
        exit("Invalid blog ID");
    }

    // Fetch existing blog data to retain unchanged values
    $getBlogData = $conn->prepare('SELECT title, blog_content, img_path, show_name, published FROM blog WHERE id = ?');
    $getBlogData->bind_param('i', $blogId);
    $getBlogData->execute();
    $getBlogData->bind_result($existingTitle, $existingBlogContent, $existingImgPath, $existingShowName, $existingPublished);
    $getBlogData->fetch();
    $getBlogData->close();

    // Handle file upload
    $newImgPath = $_FILES['img_path']['name'];

    // Retain existing values if corresponding form fields are left empty
    $title = ($_POST['title'] !== '') ? $_POST['title'] : $existingTitle;
    $blogContent = ($_POST['blog_content'] !== '') ? $_POST['blog_content'] : $existingBlogContent;
    $imgPath = ($newImgPath !== '') ? $newImgPath : $existingImgPath;
    $showName = ($_POST['show_name'] !== '') ? $_POST['show_name'] : $existingShowName;
    $published = ($_POST['published'] !== '') ? $_POST['published'] : $existingPublished;

    // Update blog in the database
    $updateBlog = $conn->prepare('UPDATE blog SET title = ?, blog_content = ?, img_path = ?, show_name = ?, published = ? WHERE id = ?');
    $updateBlog->bind_param('ssssii', $title, $blogContent, $imgPath, $showName, $published, $blogId);
    $updateBlog->execute();
    $updateBlog->close();

    // Move the uploaded file to the desired destination if a new file is uploaded
    if ($newImgPath !== '') {
        move_uploaded_file($_FILES['img_path']['tmp_name'], '../../../../assets/images/events/' . $imgPath);
    }

    // Redirect to a confirmation page or wherever needed
    header('Location: ../../../../blogs');
    exit;
}
?>
