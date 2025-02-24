<?php

require "functions.php";

require "Database.php";

// require "router.php";

// connect to my sql database
$config = [
    'host' => '127.0.0.1',     
    'db'   => 'book_review_db', 
    'user' => 'user4',           
    'pass' => 'pass44$',               
    'charset' => 'utf8mb4'
];
$db = new Database($config);
$book = $db ->query("select * from books")->fetch();

// foreach ($posts as $post){
//     echo "<li>" . $post["title"] . "</li> <br> " ;
// }

dd($book);
