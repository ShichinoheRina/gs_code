<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<p>回答ありがとうございました</p>
<ul>
        <li><a href="read.php">結果を確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>
</html>



<?php

//post.phpからpostでデータ受診
$name = $_POST["name"];
$bath = $_POST["bath"];
$sleep = $_POST["sleep"];
$walk = $_POST["walk"];
$day = $_POST["day"];
$meal = $_POST["meal"];


//valueで取得した "0回.1" を.で分割
$bath_p = explode(".", $bath);
$sleep_p = explode(".", $sleep);
$walk_p = explode(".", $walk);
$day_p = explode(".", $day);
$meal_p = explode(".", $meal);
$point = $bath_p[1]+$sleep_p[1]+$walk_p[1]+$day_p[1]+$meal_p[1];


// ファイルに書き込み
$file = fopen('data/data.text', 'a');
fwrite($file, $name . '/' . $bath_p[0] . '/' . $sleep_p[0] . '/' . $walk_p[0] . '/' . $day_p[0] . '/' . $meal_p[0] . '/' . $point . "\n");
fclose($file);
//文字作成

    


?>