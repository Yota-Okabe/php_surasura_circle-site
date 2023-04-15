<?php

    $images = array();
    if ($handle = opendir('./img')) {
        while ($entry = readdir($handle)) {
            if ($entry != "." && $entry != "..") {
                $images[] = $entry;
            }
        }
        closedir($handle);
    }
    // var_dump($images);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アルバム</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php include('navbar.php'); ?>
    <main role="main" class="container">
    <!-- <main role="main" class="container" style="padding:60px 15px"> -->
        <h3>アルバム</h3>
        <?php
            if (count($images) > 0) {
                echo '<div class="row">';
                foreach ($images as $img) {
                    echo '<div class="col-3">';
                    echo '  <div class="card">';
                    echo '      <a href=./img/'.$img.'"target="_blank">
                                <img src="./img/'.$img.'"class="img-fluid"></a>';
                    echo '  </div>';
                    echo '</div>';
                }
                echo '</div>';
            }else {
                echo '<div class="alert alert-dark" role="alert">画像はありません</div>';
            }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>