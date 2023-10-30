<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
    
<?php

session_start();
// PHP跟PHP互傳資料不能用POST，所有用GET

if(isset($_SESSION['login'])&&!empty($_SESSION['login'])){
    echo "<h3>登入成功</h3>";
    echo "<a href='login.php'>回登入頁<a>";
}else{
    // 防止有心人士直接打網址偷看
    // echo"沒有登入相關驗證，非法登入";
    // 或導往首頁
    // header("location:login.php");
}

?>

</body>
</html>