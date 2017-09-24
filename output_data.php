<?php
include("func.php");

$income1 = $_POST["income1"];
$income2 = $_POST["income2"];
$income3 = $_POST["income3"];
$money1 = $_POST["money1"];
$money2 = $_POST["money2"];
$money3 = $_POST["money3"];

for($i=1; $i<4; $i++){
    cell()
}

//$age = $_POST["age"];
//$name = $_POST["name"];
//$email = $_POST["email"];
//$quest = $_POST["quest"];

//書き込み
//$jis_name = mb_convert_encoding($name,"sjis","utf-8");//文字コードをutf-8からシフトjisに変換
//$jis_quest = mb_convert_encoding($quest,"sjis","utf-8");//文字コードをutf-8からシフトjisに変換

//$d = date("Y-m-d H:i:s");
//$str = $d.",".$jis_name.",".$email.",".$jis_quest.",".$age;

$str = $income1.",".$money1.",".$income2.",".$money2.",".$income3.",".$money3;
$file = fopen("data/data.csv","a");	// ファイル読み込み
flock($file, LOCK_EX);			// ファイルロック
fwrite($file, $str."\n");
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);



$sum1 = 0;
$sum2 = 0;
$sum3 = 0;
$sum4 = 0;
$sum5 = 0;
$sum6 = 0;
$fp = fopen('data/data.csv','r');
$count = count( file('data/data.csv') );
while ($csv = fgetcsv($fp)) {
$ans1 = $csv[0];
$ans2 = $csv[1];
$ans3 = $csv[2];
$ans4 = $csv[3];
$ans5 = $csv[4];
$ans6 = $csv[5];
//print $sum ."<br>";
//$sum1 += $ans1;
$sum2 += $ans2;
//$sum3 += $ans3;
$sum4 += $ans4;
//$sum5 += $ans5;
$sum6 += $ans6;
}

//print $sum1 . "<br>";
print $sum2 . "<br>";
//print $sum3 . "<br>";
print $sum4 . "<br>";
//print $sum5 . "<br>";
print $sum6 . "<br>";
print $count;

//print $sum1/$count . "<br>";
//print $sum2/$count . "<br>";
//print $sum3/$count . "<br>";
//print $sum4/$count . "<br>";
//print $sum5/$count . "<br>";
//print $sum6/$count . "<br>";
//print $count;

//for($i=0;$i<6;$i++){
//    if($str[$i]=="1"){
//        $s[$i]="正解";
//    }else{
//        $s[$i]="不正解";
//    }
//}

?>
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h1>回答！！</h1>
        <div class="ans-wrap">
            <div class="title">
            <h3 class="qnum">第1問：</h3>
            <h3>
                <?= h($q1)." 正解率:".round(($sum1/$count)*100,1)."%"; ?>
            </h3>
            </div>
            <p class="p-ans">正解は「20分」です。</br>
                ライオンなどの肉食動物に襲われないように常に警戒していなければならないため、長時間は眠りません！</p>
        </div>
        <div class="ans-wrap">
            <div class="title">
            <h3 class="qnum">第2問：</h3>
            <h3>
                <?= h($q2)." 正解率:".round(($sum2/$count)*100,1)."%"; ?>
            </h3>
            </div>
            <p class="p-ans">正解は「特に何も考えていない」です。</br>
                『地獄に落ちていく罪人を、上からじっと見ているところ』を表現しており、何かを考えているわけではないのです！</p>
        </div>
        <div class="ans-wrap">
            <div class="title">
            <h3 class="qnum">第3問：</h3>
            <h3>
                <?= h($q3)." 正解率:".round(($sum3/$count)*100,1)."%"; ?>
            </h3>
            </div>
            <p class="p-ans">正解は「④約38.5℃」です。</br>
                人間と比べて心拍数が高く、運動量が多いことが理由です！</p>
        </div>
        <div class="ans-wrap">
            <div class="title">
            <h3 class="qnum">第4問：</h3>
            <h3>
                <?= h($q4)." 正解率:".round(($sum4/$count)*100,1)."%"; ?>
            </h3>
            </div>
            <p class="p-ans">正解は「③肉球」です。</br>
                あまり汗をかかないぶん、熱中症になりやすいので要注意！</p>
        </div>
        <div class="ans-wrap">
            <div class="title">
            <h3 class="qnum">第5問：</h3>
            <h3>
                <?= h($q5)." 正解率:".round(($sum5/$count)*100,1)."%"; ?>
            </h3>
            </div>
            <p class="p-ans">正解は「①３種類」です。</br>
                ネコの血液型は、Ａ型・Ｂ型・AB型の３種類しかありません！</p>
        </div>
        <div class="ans-wrap">
            <div class="title">
            <h3 class="qnum">第6問：</h3>
            <h3>
                <?= h($q6)." 正解率:".round(($sum6/$count)*100,1)."%"; ?>
            </h3>
            </div>
            <p class="p-ans">正解は「⑤百万倍」です。</br>
                イヌは嗅覚に関係する「嗅細胞」や「嗅粘膜」が人間よりも発達しているため、嗅覚が優れているのです！</p>
        </div>

    </body>

    </html>
