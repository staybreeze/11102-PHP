
<?php include_once "session.php";?>
<?php

// 因為帳密隱私的關係，所以用POST
if (
  $_POST['acc'] == 'admin' && $_POST['pw'] ==
  '1234'
) {
  // strtotime('now')+秒數也可以
  // timestamp公認單位為秒


  $_SESSION['login'] = $_POST['acc'];

  header("location:member.php");
} else {

  $_SESSION['error'] = "帳號或密碼錯誤，請重新登入";

  header("location:login.php");
}
