<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";

// new PDO($dsn,'root','')是個物件
$pdo=new PDO($dsn,'root','');

// ---------
// fetch資料
// $sql="select * from students";

// 執行sql語句，並返回一筆資料，如果有多筆資料結果，則需要執行多次來取得

// // 如果取得的資料是複數，變數就加S


// 執行sql語句，並返回全部的資料，所有資料會放在一個陣列；
// $rows=$pdo->query($sql)->fetchALL();

// echo "<pre>";
// print_r($rows);
// echo "</pre>";

// ---------

// 增加資料
// id是自動增加所以不用寫
// values前加空格
// $sql="insert into `dept`(`code`,`name`) values('801','影像設計科')";
// $pdo->query($sql);

// ---------
// 修改資料
// $sql="update  `dept` set `code`='901',`name`='戲劇科' where `id`='15'";
// $pdo->query($sql);

// ---------
// 刪除資料

// $sql="delete from `dept` where `id`='15'";
// $pdo->query($sql);

// ---------
// 執行sql語句，但不返回資料，而是返回影響的資料筆數，適合使用在新增，更新或刪除資料時

// $sql="delete from `dept` where `id`='17'";
// $pdo->exec($sql);

// // echo 可以看到執行次數
// echo $pdo->exec($sql);

?>
