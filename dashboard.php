<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Add</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="form">
        <div class="container">
            <h1>Add a New Post</h1>
    <form action="add_blog.php" method="post" class="new">
    <input type="text" name="title" placeholder="Post Title" required><br>
    <textarea name="description" placeholder="Post Description" required></textarea><br>
    <button type="submit">Add Post</button>
</form>
        </div>
    </section>
</body>
</html>