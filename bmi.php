<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算</title>
</head>

<body>
    <h1>BMI計算</h1>

    <?php

    // 在處理網頁間傳值時，我們經常會需要先判斷是否有傳值發生或是否存在特定內容，
    // 再進一步做處理，isset()及empty()可做為初步判斷之用，但需注意其使用上的差異。

    // 選擇bmi是因為有計算結果，確定CALC的程式有跑
    // 用兩個PHP把FORM表單包起來，IF ELSE決定表單要不要顯示
    if (!isset($_GET['bmi'])) {
        if (isset($_GET['m'])) {
            echo "<span style='color:red'>" . $_GET['m'] . "</span>";
        }

    ?>
        <p>公式= 體重(KG) / 身高<sup>2</sup>(M)
        <P>
            <!-- 丟到calc.php計算 -->
        <form action="calc.php" method="get">
            <div>
                <label for="height">身高(M)</label>
                <input type="text" name="height" id="height">
            </div>
            <div>
                <label for="weight">體重(KG)</label>
                <input type="text" name="weight" id="weight">
            </div>
            <div>
                <input type="submit" value="計算BMI">
                <input type="reset" value="重置">
            </div>

        </form>
    <?php

    } else {

        echo "身高:" . $_GET['h'] . "M";
        echo "<br>";
        echo "體重:" . $_GET['w'] . "KG";
        echo "<br>";
        echo "BMI:" . $_GET['bmi'];
        echo "<br>";
    }
    ?>
</body>

</html>

<?php

// header(location:index.php);
?>