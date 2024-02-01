<?php
include '../../../auth/dbConfig.php';



    // Check if 'bid' parameter is set in the URL
    if (isset($_GET['bid'])) {
        $blogId = $_GET['bid'];

        // Validate and sanitize $blogId
        $blogId = filter_var($blogId, FILTER_VALIDATE_INT);
        if ($blogId === false) {
            // Handle invalid $blogId, perhaps redirect or show an error message
            exit("Invalid blog ID");
        }

        // Rest of your code to retrieve blog information based on $blogId
    } else {
        // Handle the case where 'bid' is not set
        exit("Blog ID not provided");


       

    }
    


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
        header('Location: ../../../../a/allBlogs'); ;
    } else {
        echo "No blog found with the specified ID.";
    }

    // Close prepared statements
    $deleteComments->close();
    $deleteUserBlog->close();
    $deleteBlog->close();

    

?>
