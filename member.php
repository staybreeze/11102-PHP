<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
    
<?php
// PHP跟PHP互傳資料不能用POST，所有用GET
// CHECK頁面已設定login=1作為接口，於此處接收
if($_GET['login']==1){
    echo "<h3>登入成功</h3>";
    echo "<a href='login.php?login=1'>回登入頁<a>";
}else{
    // 防止有心人士直接打網址偷看
    echo"沒有登入相關驗證，非法登入";
    // 或導往首頁
    header("location:login.php");
}

?>

</body>
</html>