

<?php
session_start();
// 因為帳密隱私的關係，所以用POST
if ($_POST['acc']=='admin' && $_POST['pw']==
'1234') {
// strtotime('now')+秒數也可以
// timestamp公認單位為秒
setcookie("login","WSL",time()+60);

$_COOKIE['login']=$_POST['acc'];
 
    header("location:member.php");
}else{

  setcookie("error","帳號或密碼錯誤，請重新登入",time()+5);

header("location:login.php");
}