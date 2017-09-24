<?php
include("func.php");

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
$sum1 += $ans1;
$sum2 += $ans2;
$sum3 += $ans3;
$sum4 += $ans4;
$sum5 += $ans5;
$sum6 += $ans6;
}

?>

    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h1>家計簿</h1>
        <h2>Income</h2>
        <form action="output_data.php" method="post">
            <p><select name="income1">
                <option value="salary">給料</option>
                <option value="gamble">ギャンブル収入</option>
                <option value="pickup">拾った</option>
                <option value="lottery">宝くじ</option>
            </select>：<input type="text" name="money1">円</p>
            <p><select name="income2">
                <option value="salary">給料</option>
                <option value="gamble">ギャンブル収入</option>
                <option value="pickup">拾った</option>
                <option value="lottery">宝くじ</option>
            </select>：<input type="text" name="money2">円</p>
            <p> <select name="income3">
                <option value="salary">給料</option>
                <option value="gamble">ギャンブル収入</option>
                <option value="pickup">拾った</option>
                <option value="lottery">宝くじ</option>
            </select>：<input type="text" name="money3">円</p>
            
<!--
            <h2>Outcome</h2>
            <p><select name="outcome1">
                <option value="10-20">外食</option>
                <option value="20-30">洋服</option>
                <option value="30-40">デート</option>
                <option value="40-">日用品</option>
            </select>：<input type="text" name="name">円</p>
            <p><select name="outcome1">
                <option value="10-20">外食</option>
                <option value="20-30">洋服</option>
                <option value="30-40">デート</option>
                <option value="40-">日用品</option>
            </select>：<input type="text" name="name">円</p>
            <p><select name="outcome1">
                <option value="10-20">外食</option>
                <option value="20-30">洋服</option>
                <option value="30-40">デート</option>
                <option value="40-">日用品</option>
            </select>：<input type="text" name="name">円</p>
-->

            <input type="submit" value="送信">
        </form>

    </body>

    </html>
