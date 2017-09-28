<?php

//1. POST受信
$date      = $_POST["date"];
$salary    = $_POST["salary"];
$bonus     = $_POST["bonus"];
$other_rev = $_POST["other_rev"];
$food      = $_POST["food"];
$utility   = $_POST["utility"];
$trans_net = $_POST["trans_net"];
$housing   = $_POST["housing"];
$daily     = $_POST["daily"];
$social    = $_POST["social"];
$other_exp = $_POST["other_exp"];
$carryover = $_POST["carryover"];

$sum_in    = $salary + $bonus + $other_rev;
$sum_out   = $food + $utility + $trans_net + $housing + $daily + $social + $other_exp;
$total     = $carryover + $sum_in - $sum_out;

//2. DB接続
try {
  $pdo = new PDO('mysql:dbname=gs_db31;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．SQLを作って実行
$stmt = $pdo->prepare("INSERT INTO gs_ac_table(id, date, salary, bonus,
other_rev, sum_in, food, utility, trans_net, housing, daily, social, other_exp, sum_out, total)VALUES(NULL, :date, :salary, :bonus, :other_rev, :sum_in, :food, :utility, :trans_net, :housing, :daily, :social, :other_exp, :sum_out, :total)");
$stmt->bindValue(':salary',   $salary,   PDO::PARAM_INT); //PARAM_STR or PARAM_INTを書く。（セキュリティ高くするもの）
$stmt->bindValue(':date',  $date,  PDO::PARAM_STR);
$stmt->bindValue(':bonus',  $bonus,  PDO::PARAM_INT);
$stmt->bindValue(':other_rev', $other_rev, PDO::PARAM_INT);
$stmt->bindValue(':sum_in', $sum_in, PDO::PARAM_INT);
$stmt->bindValue(':food', $food, PDO::PARAM_INT);
$stmt->bindValue(':utility', $utility, PDO::PARAM_INT);
$stmt->bindValue(':trans_net', $trans_net, PDO::PARAM_INT);
$stmt->bindValue(':housing', $housing, PDO::PARAM_INT);
$stmt->bindValue(':daily', $daily, PDO::PARAM_INT);
$stmt->bindValue(':social', $social, PDO::PARAM_INT);
$stmt->bindValue(':other_exp', $other_exp, PDO::PARAM_INT);
$stmt->bindValue(':sum_out', $sum_out, PDO::PARAM_INT);
$stmt->bindValue(':total', $total, PDO::PARAM_INT);
$status = $stmt->execute();//errorになったら、$statusにfalseが入ってくる。

//３．SQLを作って実行
$stmt2 = $pdo->prepare("SELECT * FROM gs_ac_table ORDER BY id DESC");
$status2 = $stmt2->execute();//errorになったら、$statusにfalseが入ってくる。

//４．
$view = "";//loopの外に変数を作っておく
if($status2==false){
  $error = $stmt2->errorInfo();
  exit("QueryError:".$error[2]);//error文が３つ帰ってくるが、2つ目が英語の文になっているため。
  
}else{
    while($r = $stmt2->fetch(PDO::FETCH_ASSOC)){
        $view .= '<p>';
        $view .= $r["date"]."　".$r["sum_in"]."　".$r["sum_out"]."　".$r["total"];
        $view .= '</p>';

    }
}

?>
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>Document</title>
        <link rel="stylesheet" href="../kadai07/css/style.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    </head>

    <body>
        <?php
        $con = mysql_connect('localhost', 'root', '');

        mysql_select_db("gs_ac_table", $con);
        $quryset = mysql_query('SET NAMES utf8', $con);
        $quryset = mysql_query("SELECT * FROM gs_ac_table");

        echo "<div id='graph'></div>";
        echo "<script>";
        echo "var day_data = [";
        
        while ($data = mysql_fetch_array($quryset)){
                echo "{'DateT': '" . $data[1] . ", 'MinT':" .$data[13] . "},";
        }
                echo "];";
                echo "Morris.Line({";
                echo "element: 'graph',";
                echo "data: day_data,";
                echo "xkey: 'DateT',";
//                echo "ymax: '150000',";
//                echo "ymin: '-5',";
                echo "ykeys: ['MinT'],";
                echo "labels: ['最高気温'],";
                echo "smooth: false,";
                echo "resize: true";
                echo "});";
                echo "</script>";

        ?>
            <?=$view;?>
        
    </body>

    </html>
