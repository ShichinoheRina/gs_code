<html>
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
        <h1>ここ1週間の生活習慣</h1>
        <table border="1">
            <tr>
                <th>名前</th>
                <th>Q1.湯舟につかった回数</th>
                <th>Q2.一日の平均睡眠時間</th>
                <th>Q3.一日の平均歩数</th>
                <th>Q4.充実した日数</th>
                <th>Q5.食事の量と栄養バランス</th>
                <th>健康度(25点中)</th>
            </tr>
          
        <?php
        // ファイルを開く
        $openFile = fopen('./data/data.text', 'r');

        // ファイル内容を1行ずつ読み込んで出力
        // fgets($openFile)で、1行を読み込み、それを$strに代入
        // 何も読み込むものがなくなると、while文が終了する
        while ($str = fgets($openFile)) {
            $ary = explode("/", $str); //文字列を配列に変換
            echo '<tr>';
            for($i = 0; $i < sizeof($ary); $i++){
                echo "<td> {$ary[$i]} </td>";
            }
            echo '</tr>';


            // nl2br ... textファイルの改行を<br>に変換する関数
        };
        fclose($openFile);



        /** JavaScript出力開始 */
        echo <<<EOM
        <script type="text/javascript">
        // alert("aaa");
        </script>
        EOM;
        /** JavaScript出力終了 */

        ?>
        </table>

        <div class="back">
            <a href="post.php" class="back">最初に戻る</a>
        </div>
    </body>
</html>




