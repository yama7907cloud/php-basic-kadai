<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form受信</title>
</head>
<body>
    <h1>個人情報受信フォーム</h1>
    <h2>入力内容をご確認ください!!</h2>
    <table>
        <tr>
            <th>お名前</th>
            <td>
                <?php
                    echo $_POST["postname"];
                ?>
            </td>
        </tr>
        <tr>
            <th>性別</th>
            <td>
                <?php
                    echo $_POST["postgender"];
                ?>
            </td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>
                <?php
                    echo $_POST["postmail"];
                ?>
            </td>
        </tr>
    </table>
</body>
</html>