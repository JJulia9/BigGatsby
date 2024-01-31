<?php
include '../../../auth/dbConfig.php';

// Check if blog ID is provided
if (isset($_GET['bid'])) {
    $blogId = $_GET['bid'];
    


    // Prepare and execute queries to delete associated comments and userblog entries
    $deleteComments = $conn->prepare('DELETE FROM comments WHERE fk_userBlog IN (SELECT id FROM userblog WHERE fk_blog_id = ?)');
    $deleteUserBlog = $conn->prepare('DELETE FROM userblog WHERE fk_blog_id = ?');
    $deleteBlog = $conn->prepare('DELETE FROM blog WHERE id = ?');

    // Bind parameters
    $deleteComments->bind_param('i', $blogId);
    $deleteUserBlog->bind_param('i', $blogId);
    $deleteBlog->bind_param('i', $blogId);

    // Execute queries
    $deleteComments->execute();
    $deleteUserBlog->execute();
    $deleteBlog->execute();

    // Check if any rows were affected in the blog table
    if ($deleteBlog->affected_rows > 0) {
        echo "Blog deleted successfully.";
    } else {
        echo "No blog found with the specified ID.";
    }

    // Close prepared statements
    $deleteComments->close();
    $deleteUserBlog->close();
    $deleteBlog->close();

} else {
    echo "Blog ID not provided.";
}
?>
