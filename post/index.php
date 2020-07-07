<?php

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

echo json_encode([
    "summary" => [
       "size" => sizeof(POSTS)
    ],
    "posts" => POSTS
]);