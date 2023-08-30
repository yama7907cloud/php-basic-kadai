<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormSample</title>
</head>
<body>
    <h1>個人情報入力フォーム</h1>
    <form action="confirmation.php" method="post">
        <table>
            <tr>
                <th><label for="text">お名前</label></th>
                <td><input type="text" name="postname" required id="text" serch></td>
            </tr>
            <tr>
                <th><label for="gender">性別</label></th>
                <td>
                    <input type="radio" name="postgender" value="男性" required id="gender">男性
                    <input type="radio" name="postgender" value="女性">女性
                </td>
            </tr>
            <tr>
                <th><label for="mail">メールアドレス</label></th>
                <td><input type="text" name="postmail" required id="mail" url></td>
            </tr>
        </table>
        
        <button type="submit" name="send">送信</button>
    </form>
</body>
</html>