

<?php

// 因為帳密隱私的關係，所以用POST
if ($_POST['acc']=='admin' && $_POST['pw']==
'1234') {

    // 設定任一變數(此處設為LOGIN)，作為登入成功導入MEMBER時的接收使用，並設定值=1作為接口
    header("location:member.php?login=1");
}else{

// echo "帳號或密碼錯誤，請重新登入";
header("location:login.php?m=帳號或密碼錯誤，請重新登入");
}