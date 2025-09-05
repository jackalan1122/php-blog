<?php
include 'db_connect.php';

$sql = "SELECT * FROM blog_posts ORDER BY create_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="hero">
        <div class="container">
            <h1>Blog Posts</h1>
            <div class="blog-container">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='blog-post'>";
                        echo "<h2 class='main-heading'>" . $row['title'] . "</h2>";
                        echo "<small>Posted on " . $row['create_at'] . "</small>";
                        echo "<p>" . nl2br($row['description']) . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No blog posts yet!</p>";
                }
                ?>
            </div>
        </div>
    </section>
</body>
</html>