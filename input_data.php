<?php

//2. DB接続
try {
  $pdo = new PDO('mysql:dbname=gs_db31;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．SQLを作って実行
$stmt = $pdo->prepare("INSERT INTO gs_ac_table(id, indate, salary, bonus,
other_rev, sum_in, food, utility, trans_net, housing, daily, social, other_exp, sum_out, total)VALUES(NULL, sysdate(), :salary, :bonus, :other_rev, :sum_in, :food, :utility, :trans_net, :housing, :daily, :social, :other_exp, :sum_out, :total)");

$query = "SELECT SUM(sum_in),SUM(sum_out) FROM gs_ac_table";
$stmt3 = $pdo->prepare($query);
$stmt3->execute();
$row = $stmt3->fetch(PDO::FETCH_ASSOC);

$A_sum = $row['SUM(sum_in)'];
$B_sum = $row['SUM(sum_out)'];
$total = $A_sum - $B_sum;
$total_num = number_format($total);

?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>家計簿</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h1>家計簿</h1>
        <form action="output_data.php" method="post">
        <input type="text" name="date">
        <p>繰り越し額：<input type="hidden" name="carryover" value="<?=$total;?>"><?=$total_num;?>円</p>
        <div class="wrap_in">
            <h2>収入</h2>
            <div class="wrap"><div class="title">給料：</div><div><input type="text" name="salary">円</div></div>
            <div class="wrap"><div class="title">ボーナス：</div><div><input type="text" name="bonus">円</div></div>
            <div class="wrap"><div class="title">雑収入：</div><div><input type="text" name="other_rev">円</div></div>
        </div>
        <div class="wrap_out">
            <h2>支出</h2>
            <div class="wrap"><div class="title">食費：</div><div><input type="text" name="food">円</div></div>
            <div class="wrap"><div class="title">水道光熱費：</div><div><input type="text" name="utility">円</div></div>
            <div class="wrap"><div class="title">通信費・交通費：</div><div><input type="text" name="trans_net">円</div></div>
            <div class="wrap"><div class="title">住居費：</div><div><input type="text" name="housing">円</div></div>
            <div class="wrap"><div class="title">日用品費：</div><div><input type="text" name="daily">円</div></div>
            <div class="wrap"><div class="title">交際費：</div><div><input type="text" name="social">円</div></div>
            <div class="wrap"><div class="title">雑費：</div><div><input type="text" name="other_exp">円</div></div>
        </div>
            <input class="button" type="submit" value="送信">
        </form>

    </body>

</html>
