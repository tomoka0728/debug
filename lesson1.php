<?php
// デバック練習
// 氏名入力時に入力内容が表示されるようにプログラムを完成させてください。
// プログラム内にバグが含まれているので正常に動くように修正してください。

if (isset($_POST['last_name']) && isset($_POST['first_name'])) {
    $lastName = $_POST['last_name'];
    $firstName= $_POST['first_name'];
        echo '私の名前は'.$lastName.$firstName.'です。';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>デバック練習</title>
</head>
<body>
    <section>
    <form action='./debug01.php' method="post">
        <label>姓</label>
        <input type="text" name="last_name" required />
        <label>名</label>
        <input type="text" name="first_name" required />
        <input type="submit" value="送信する"/>
    </form>
    </section>
</body>
</html>
