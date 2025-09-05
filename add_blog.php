<?php
include 'db_connect.php';

$title = $_POST['title'];
$description = $_POST['description'];

$sql = "insert into blog_posts (title, description) values ('$title', '$description')";
if ($conn->query($sql)) {
    echo "Blog added!";
} else {
    echo "error: " . $conn->error;
}
?>