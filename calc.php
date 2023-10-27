<?php

// 判斷表單有沒有送出來
if (!empty($_GET)) {
    // $_ → 供電腦讀取的變數寫法


    // ?後面放else

    $weight = (!empty($_GET['weight'])) ? $_GET['weight'] : '沒有體重資料';
    $height = (!empty($_GET['height'])) ? $_GET['height'] : '沒有身高資料';

    // 可以簡寫
    // ??後面放else
    // $weight=$_GET['weight']??'沒有體重資料';
    // round(a,b)是四捨五入參數，a是要處理的數字，b是小數點取幾位
    $bmi=round($weight/($height*$height),2);


    // echo "體重:" .$weight;
    // echo "<br>";
    // echo "身高:" .$height;
    // echo "<br>";
    // echo "BMI:".$bmi;


    // $_GET本身也是變數，因此也可以這樣寫。
    // echo "體重:" .$_GET['weight'];
    // echo "<br>";
    // echo "身高:" .$_GET['height'];


    // 讓程式把資料帶回去，CALC執行完後會立刻跳回去前面的頁面
    header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");
} else {

    // echo"請輸入必要的資訊";
    // m也可以換成error
    header("location:bmi.php?m=請輸入必要的資訊");
}
