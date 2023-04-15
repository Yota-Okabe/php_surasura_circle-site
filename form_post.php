<?php

    $name = $_POST['name'];

    $gender = $_POST['gender'];
    if ($gender == "man") {
        $gender = "男性";
    }elseif ($gender == "woman") {
        $gender = "女性";
    }else {
        $gender = "該当しません";
    }

    $tmp_star = intval($_POST['star']);
    $star = '';
    if ($tmp_star<1 || $tmp_star>5) {
        $star = "1〜5までを入力してください";
    }else {
        for ($i=0; $i<$tmp_star ; $i++) { 
            $star .= '★';
        }
        for (; $i<5 ; $i++) { 
            $star .= '☆';
        }
    }

    $other = $_POST['other'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php include('navbar.php'); ?>
    <main role="main" class="container">
        <div>
            <h3>アンケート結果</h3>
            <p>お名前：<?php echo $name; ?> </p>
            <p>性別：<?php echo $gender; ?> </p>
            <p>評価：<?php echo $star; ?> </p>
            <p>ご意見：<?php echo $other; ?> </p>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>