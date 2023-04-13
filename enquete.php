<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケートフォームテスト</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php include('navbar.php'); ?>
    <main role="main" class="container">
    <h1>アンケートフォーム</h1>
    <form action="form_post.php" method="post">
        <p>お名前：
            <input type="text" name="name">
        </p>
        <p>性別：
            <input type="radio" name="gender" value="man">男性
            <input type="radio" name="gender" value="woman">女性
        </p>
        <p> 評価：
            <select name="star">
                <option value="1">★☆☆☆☆</option>
                <option value="2">★★☆☆☆</option>
                <option value="3">★★★☆☆</option>
                <option value="4">★★★★☆</option>
                <option value="5">★★★★★</option>
            </select>
        </p>
        <p>ご意見</p>
        <p>
            <textarea name="other" id="" cols="30" rows="10"></textarea>
        </p>
        <input type="submit" value="送信">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>