<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網頁傳達</title>
</head>

<body>

    <h1>GET</h1>
    <!-- action=""傳給誰 -->
    <!-- get會顯示在網址 -->
    <form action="?" method="get">
        <div>
            <label for="acc">帳號</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="pw">密碼</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>

        </form>

        <!-- F12 → NETWORK → PAYLOAD查看狀態 -->
        <h1>POST</h1>
        <form action="?" method="post">
            <div>
                <label for="acc">帳號</label>
                <input type="text" name="acc" id="acc">
            </div>
            <div>
                <label for="pw">密碼</label>
                <input type="password" name="pw" id="pw">
            </div>
            <div>
                <input type="submit" value="送出">
                <input type="reset" value="重置">
            </div>
        </form>
        <h1>檔案上傳</h1>
        <form action="?" method="post" enctype="multipart/form-data">
            <div>
                <label for="acc">帳號</label>
                <input type="text" name="acc" id="acc">
            </div>
            <div>
                <label for="pw">密碼</label>
                <input type="password" name="pw" id="pw">
            </div>
            <label for="img">檔案</label>
                <input type="file" name="img" id="img">
            </div>
            <div>
                <input type="submit" value="送出">
                <input type="reset" value="重置">
            </div>
        </form>
</body>

</html>