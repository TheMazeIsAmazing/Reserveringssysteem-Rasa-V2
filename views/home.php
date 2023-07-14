<!DOCTYPE html>
<html lang="nl">
<head>
    <title>My MVC Framework</title>
</head>
<body>
<h1>Posts</h1>
<ul>
    <?php foreach ($posts as $post): ?>
        <li><?php echo $post['title']; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
