<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
    <h1>自己管理シート</h1>
    
<form method="post" action="write.php" class="form">
    <input type="text" name="name" placeholder="お名前" id="name" class="name">
    <p>ここ１週間の生活状況を教えてください</p>
    
    <legend>Q1.湯舟には何回つかりましたか？</legend>
    <div class="q1">
    <label for="q1-4"><input type="radio" name="bath" id="q1-4" value="0回">0回.</label>
    <label for="q1-3"><input type="radio" name="bath" id="q1-3" value="1~2回">1~2回</label>
    <label for="q1-2"><input type="radio" name="bath" id="q1-2" value="3~4回">3~4回</label>
    <label for="q1-1"><input type="radio" name="bath" id="q1-1" value="5~7回">5~7回</label></br>
    </div>

    <legend>Q2.一日の平均睡眠時間は何時間ですか？</legend>
    <div class="q2">
    <label for="q2-1"><input type="radio" name="sleep" id="q2-1" value="1~2時間">1~2時間</label>
    <label for="q2-2"><input type="radio" name="sleep" id="q2-2" value="3~4時間">3~4時間</label>
    <label for="q2-3"><input type="radio" name="sleep" id="q2-3" value="6~8時間">6~8時間</label>
    <label for="q2-4"><input type="radio" name="sleep" id="q2-4" value="9時間以上">9時間以上</label></br>
    </div>

    <legend>Q3.一日の平均歩数はどのくらいですか？</legend>
    <div class="q3">
    <label for="q3-1"><input type="radio" name="walk" id="q3-1" value="5~7回">~5000歩</label>
    <label for="q3-2"><input type="radio" name="walk" id="q3-2" value="3~4回">5000~10000歩</label>
    <label for="q3-3"><input type="radio" name="walk" id="q3-3" value="1~2回">10000~20000歩</label>
    <label for="q3-4"><input type="radio" name="walk" id="q3-4" value="0回">20000歩~</label></br>
    </div>

    <legend>Q4.充実した日は何日ありましたか？</legend>
    <div class="q4">
    <label for="q4-1"><input type="radio" name="day" id="q4-1" value="0~1日">0~1日</label>
    <label for="q4-2"><input type="radio" name="day" id="q4-2" value="2~3日">2~3日</label>
    <label for="q4-3"><input type="radio" name="day" id="q4-3" value="4~5日">4~5日</label>
    <label for="q4-4"><input type="radio" name="day" id="q4-4" value="6~7日">6~7日</label></br>
    </div>

    <legend>Q5.食事の量と栄養バランスはどうですか？</legend>
    <div class="q5">
    <label for="q5-1"><input type="radio" name="meal" id="q5-1" value="両方ダメ">両方ダメ</label>
    <label for="q5-2"><input type="radio" name="meal" id="q5-2" value="食事量のみ適切">食事量のみ適切</label>
    <label for="q5-3"><input type="radio" name="meal" id="q5-3" value="栄養バランスのみ適切">栄養バランスのみ適切</label>
    <label for="q5-4"><input type="radio" name="meal" id="q5-4" value="両方ばっちり">両方ばっちり</label></br>
    </div>
    <input type="submit" value="送信" class="sbtn"> 
</form>

</body>
</html>




