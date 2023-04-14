<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $content = $_POST['content'];
    $detail = $_POST['detail'];

    $dsn = 'mysql:dbname=tennis-circle;host=localhost';
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

    $sql = 'INSERT INTO `inquiry_form`(`name`, `email`, `gender`, `date`, `content`, `detail`) VALUES ("'.$name.'", "'.$email.'", "'.$gender.'", "'.$date.'", "'.$content.'", "'.$detail.'")';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ結果</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php include('navbar.php'); ?>
    <main role="main" class="container">
        <h2>お問い合わせ内容</h2>
        <p>お名前：<?php echo $name; ?> </p>
        <p>メールアドレス：<?php echo $email; ?> </p>
        <p>性別：<?php echo $gender; ?> </p>
        <p>日付：<?php echo $date; ?> </p>
        <p>内容：<?php echo $content; ?> </p>
        <p>詳細：<?php echo $detail; ?> </p>
        <h5>お問い合わせいただきありがとうございました！</h5>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>