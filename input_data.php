<?php





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
            <p>
<!--
                <select name="income1">
                <option value="salary">給料</option>
                <option value="gamble">ギャンブル収入</option>
                <option value="pickup">拾った</option>
                <option value="lottery">宝くじ</option>
            </select>
-->
                給料：<input type="text" name="salary">円</p>
            <p>
<!--
                <select name="income2">
                <option value="salary">給料</option>
                <option value="gamble">ギャンブル収入</option>
                <option value="pickup">拾った</option>
                <option value="lottery">宝くじ</option>
            </select>
-->
                ボーナス：<input type="text" name="bonus">円</p>
            <p>
<!--
                <select name="income3">
                <option value="salary">給料</option>
                <option value="gamble">ギャンブル収入</option>
                <option value="pickup">拾った</option>
                <option value="lottery">宝くじ</option>
            </select>
-->
                雑収入：<input type="text" name="other_rev">円</p>
            
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
            <h2>Outcome</h2>
            食費：<input type="text" name="food">円</p>
            水道光熱費：<input type="text" name="utility">円</p>
            通信費・交通費：<input type="text" name="trans_net">円</p>
            住居費：<input type="text" name="housing">円</p>
            日用品費：<input type="text" name="daily">円</p>
            交際費：<input type="text" name="social">円</p>
            雑費：<input type="text" name="other_exp">円</p>

            <input type="submit" value="送信">
        </form>

    </body>

    </html>
