<?php

require_once './config/bootstrap.php';

$posts = Post::getAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - Blog || Bekzod</title>
</head>
<body>
    <h1>OOP - Blog </h1>
    <h3><a href="create.php">Create new Post</a></h3>
    <br>
    <hr>
    <br>
    <ul>
        <?php foreach($posts as $post) : ?>
            <li>
                <h3>
                    <a href="post.php?id=<?=$post->id?>">
                        <?= $post->id . ' - ' . $post->title; ?>
                    </a>
                </h3>
                <p><?= $post->body; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
