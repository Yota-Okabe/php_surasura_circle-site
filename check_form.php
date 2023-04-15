<?php
    $name = $_POST['name'];
    if ($name == '') {
        $name = '※入力されておりません※';
    }else {
        $name = $name;
    }

    $email = $_POST['email'];
    if ($email == '') {
        $email = '※入力されておりません※';
    }else {
        $email = $email;
    }

    $gender = $_POST['gender'];
    if ($gender == "man") {
        $gender = "男性";
    }elseif ($gender == "woman") {
        $gender = "女性";
    }else {
        $gender = "※選択できておりません※";
    }
    $date = $_POST['date'];    
    if ($name == " ") {
        $date = '※入力されておりません※';
    }else {
        $date = $date;
    }

    $tmp_content = $_POST['content'];
    if ($tmp_content == 1) {
        $content = "試合について";
    }elseif ($tmp_content == 2) {
        $content = "練習について";
    }elseif ($tmp_content == 3) {
        $content = "打ち合わせについて";
    }elseif ($tmp_content == 4) {
        $content = "飲み会について";
    }elseif ($tmp_content == 5) {
        $content = "その他";
    }else {
        $content = "※選択できておりません※";
    }
    

    $detail = $_POST['detail'];
    if ($detail == '') {
        $detail = '※入力されておりません※';
    }else {
        $detail = $detail;
    }

    // var_dump($date);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ内容確認</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php include('navbar.php'); ?>
    <main role="main" class="container">
        <h3>お問い合わせ内容をご確認ください</h3>
        <p>お名前：<?php echo $name; ?> </p>
        <p>メールアドレス：<?php echo $email; ?> </p>
        <p>性別：<?php echo $gender; ?> </p>
        <p>日付：<?php echo $date; ?> </p>
        <p>内容：<?php echo $content; ?> </p>
        <p>詳細：<?php echo $detail; ?> </p>

        <form action="thanks_form.php" method="post">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="gender" value="<?php echo $gender; ?>">
            <input type="hidden" name="date" value="<?php echo $date; ?>">
            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <input type="hidden" name="detail" value="<?php echo $detail; ?>">
            <input type="submit" value="OK">
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>