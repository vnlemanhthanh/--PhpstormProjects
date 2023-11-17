<?php

$articles = [
    ["title" => "First post", "content" => "This is the first post"],
    ["title" => "Another post", "content" => 'another post to read here'],
    ['title' => 'Read this', 'content' => 'You must read this article']
];

foreach ($articles as $article) {

    foreach ($article as $key => $value) {
       echo ($key == 'title') ? ($key . ' - ' . $value . ", ") : ($key . ' - ' . $value . "; ");
    }
    echo "<br/>";
}
echo "<hr>";

var_dump($articles);
echo "<br/><br>";
var_dump($articles[0]['content']);
echo "<hr/>";

//$articles1 = 1.34;
//
//$articles = [
//    "first" => $articles1,
//    "second" => "Another post",
//    "four" => "Read this!"
//];
//
//var_dump($articles);
//var_dump($articles["four"][1]);

//$articles = ["First post", "Second Post", "Read this!"];
//
////echo $articles;
//var_dump($articles);
//echo "<hr/>";
////var_dump("<hr/>");
//var_dump($articles[0]);

//$string = "Hello";
//$count = 10;
//$size = 2;
//$bool = false;
//$int = 10;
//$null = null;
//
//var_dump($string . "<hr/>");
//var_dump($count + 5);
//var_dump($count * $size);
//var_dump(!$bool and null);
//var_dump($int);
//var_dump($null);
//var_dump(null);

//$message = "Hello World";
//$count = 3;
//$price = 1.99;
//
//var_dump($message);
//var_dump($count);
//var_dump($price);
