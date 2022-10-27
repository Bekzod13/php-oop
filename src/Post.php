<?php

class Post{

    public static $pdo;

    public $id;
    public $title;
    public $body;
    public $created_at;

    public static function getAll(){
        $table = "posts";
        $sql = "SELECT * FROM $table";
        $stmt = self::$pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $stmt->execute(); 
        $posts = $stmt->fetchAll();

        return $posts;
    }
    public static function getById($id){
        $table = "posts";
        $sql = "SELECT * FROM $table WHERE id = ?";
        $stmt = self::$pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $stmt->execute([$id]); 
        $post = $stmt->fetch();
        return $post;
    }
    public static function createPost($title, $body){
        $table = "posts";
        $sql = "INSERT INTO $table (title, body) VALUES (:title, :body)";
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute([
            "title"=>$title,
            "body"=>$body
        ]);
    }
}
