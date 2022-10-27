<?php

require_once './config/bootstrap.php';

if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['title'] !== '' && $_POST['body'] !== ''){
    $title = $_POST['title'];
    $body = $_POST['body'];

    Post::createPost($title,$body);

    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE new POST </title>
</head>
<body>
    <div>
        <h1>Create new Post</h1>
        <form action="" method="POST">
            <div>
                <input type="text" name='title' placeholder="title">
            </div>
            <div>
                <textarea type="text" name='body' placeholder="body" rows="10" ></textarea>
            </div>
            <button type="submit">Create new Post</button>
        </form>
    </div>
</body>
</html>