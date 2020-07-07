<?php

if (!isset($_GET['id'])){
    die('Post Id is required');
}

const POSTS = [

    [
        "id" => "POST_0001",
        "title" => "Hello World Film  Winning Award",
        "content" => "Here goes some contents of the Hello World Film Winning Award"
    ], 
    [
        "id" => "POST_0002",
        "title" => "Hello World Film  Winning Award 2",
        "content" => "Here goes some contents of the Hello World Film Winning Award 2"
    ],
    [
        "id" => "POST_0003",
        "title" => "Hello World Film  Winning Award 3",
        "content" => "Here goes some contents of the Hello World Film Winning Award 3"
    ]


    ];

$postId = $_GET['id'];

$targetPost = [];

foreach (POSTS as $currentPost){
    if ($currentPost['id'] == $postId){
        $targetPost = $currentPost;
    break;
    }
    continue;
}

echo json_encode([
    "summary" => [
       "status" => sizeof($targetPost) === 0? "Not found":"Found"
    ],
    "post" => $targetPost
]);

