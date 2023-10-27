<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登錄頁面</title>

    <style>
        .login-block {
            padding: 30px 40px;
            border: 1px solid #999;
            box-shadow: 2px 2px 15px #999;
            margin: 10px auto;
            width: 280px;
        }

        .login-input {
            margin: 10px;
        }

        .login-input input[type='text'] {
            border: 1px solid blue;
        }

        .login-input input {
            font-size: 20px;
            padding: 5px;
        }

        .btn {
            text-align: center;
            margin-top: 15px;
        }

        .btn input[type='reset'],
        .btn input[type='submit'] {
            padding: 5px 10px;
            border: 1px solid green;
            border-radius: 5px;
            margin: 5px;
        }
    </style>
</head>

<body>

    <!-- 輸入帳密(LOGIN)->檢查帳密(CHECK)->成功(member)
                                ->失敗(返回LOGIN) -->

    <div class='login-block'>
        <?php

        if (isset($_GET['m'])) {
            echo "<span style='color:red'>" . $_GET['m'] . "</span>";
        }

        // 此判斷式是為了通知LOGIN頁面有關已經成功登入者的訊息，
        // 以便成功登入者再回到LOGIN頁面時，
        // 不會繼續顯示待登入狀態
        if (isset($_GET['login'])==1){
            echo "welcome!";
        }else{
        
        
        ?>






            <form action="check.php" method="post">
                <div class='login-input'>
                    <label for="acc">帳號:</label>
                    <input type="text" name="acc" id="acc">
                </div>
                <div class='login-input'>
                    <label for="pw">密碼:</label>
                    <input type="password" name="pw" id="pw">
                </div>
                <div class='btn'>
                    <input type="submit" value="登入">
                    <input type="reset" value="重置">
                </div>
            </form>


            <?php
        }

        ?>

    </div>


</body>

</html>