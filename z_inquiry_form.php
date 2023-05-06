<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php include('navbar.php'); ?>
    <main role="main" class="container">
        <div>
            <h3>お問い合わせフォーム</h3>
            <form action="z_check_form.php" method="post">
                <p>お名前：
                    <input type="text" name="name">
                </p>
                <p>メールアドレス：
                    <input type="email" name="email">
                </p>
                <p>性別：
                    <input type="radio" name="gender" value="man">男性
                    <input type="radio" name="gender" value="woman">女性
                </p>
                <p>日付：
                    <input type="date" name="date">
                </p>
                <p> 内容：
                    <select name="content">
                        <option value="0"></option>
                        <option value="1">試合について</option>
                        <option value="2">練習について</option>
                        <option value="3">打ち合わせについて</option>
                        <option value="4">飲み会について</option>
                        <option value="5">その他</option>
                    </select>
                </p>
                <p>詳細</p>
                <p>
                    <textarea name="detail" id="" cols="30" rows="10"></textarea>
                </p>
                <input type="submit" value="送信">
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>