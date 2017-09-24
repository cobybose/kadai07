<?php

//1. POST受信
$salary    = $_POST["salary"];
$bonus     = $_POST["bonus"];
$other_rev = $_POST["other_rev"];
$food = $_POST["food"];
$utility = $_POST["utility"];
$trans_net = $_POST["trans_net"];
$housing = $_POST["housing"];
$daily = $_POST["daily"];
$social = $_POST["social"];
$other_exp = $_POST["other_exp"];


//2. DB接続
try {
  $pdo = new PDO('mysql:dbname=gs_db31;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．SQLを作って実行
$stmt = $pdo->prepare("INSERT INTO gs_ac_table(id, indate, salary, bonus,
other_rev, food, utility, trans_net, housing, daily, social, other_exp)VALUES(NULL, sysdate(), :salary, :bonus, :other_rev, :food, :utility, :trans_net, :housing, :daily, :social, :other_exp)");
$stmt->bindValue(':salary',   $salary,   PDO::PARAM_INT); //PARAM_STR or PARAM_INTを書く。（セキュリティ高くするもの）
$stmt->bindValue(':bonus',  $bonus,  PDO::PARAM_INT);
$stmt->bindValue(':other_rev', $other_rev, PDO::PARAM_INT);
$stmt->bindValue(':food', $food, PDO::PARAM_INT);
$stmt->bindValue(':utility', $utility, PDO::PARAM_INT);
$stmt->bindValue(':trans_net', $trans_net, PDO::PARAM_INT);
$stmt->bindValue(':housing', $housing, PDO::PARAM_INT);
$stmt->bindValue(':daily', $daily, PDO::PARAM_INT);
$stmt->bindValue(':social', $social, PDO::PARAM_INT);
$stmt->bindValue(':other_exp', $other_exp, PDO::PARAM_INT);
$status = $stmt->execute();//errorになったら、$statusにfalseが入ってくる。

//４．
if($status==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);//error文が３つ帰ってくるが、2つ目が英語の文になっているため。
  
}else{
  header("Location: input_data.php");
  exit;

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


    </body>

    </html>
