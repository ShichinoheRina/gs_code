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



// ファイルに書き込み
$file = fopen('data/data.text', 'a');
fwrite($file, $name . '/' . $bath . '/' . $sleep . '/' . $walk . '/' . $day . '/' . $meal . "\n");
fclose($file);
//文字作成

    


?>