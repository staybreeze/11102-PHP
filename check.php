

<?php
session_start();
// 因為帳密隱私的關係，所以用POST
if ($_POST['acc']=='admin' && $_POST['pw']==
'1234') {
$_SESSION['login']=$_POST['acc'];
 
    header("location:member.php");
}else{

    $_SESSION['error']="帳號或密碼錯誤，請重新登入";

header("location:login.php");
}