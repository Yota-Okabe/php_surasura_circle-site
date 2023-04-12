<?php

    $fp = fopen("info.txt", "r");
    $line = array();
    $body = '';

    if ($fp) {
        while (!feof($fp)) {
            $line[] = trim(fgets($fp));
        }
        fclose($fp);
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>お知らせ詳細</h1>
    <?php
        foreach ($line as $i => $text) {
            if ($i==0) {
                echo '<h3>' . $text . '</h3>';
            }else {
                $body .= $text . '<br>';
            }
        }

        // if (count($line) > 0) {
        //     for ($i=0; $i < count($line) ; $i++) { 
        //         if ($i == 0) {
        //             echo '<h3>' . $line[0] . '</h3>';
        //         }else {
        //             $body .= $line[$i] . '<br>';
        //         }
                    
        //     }
        // }else {
        //     $body = 'お知らせはありません';
        // }
        echo '<p>' . $body . '</p>';
    ?>
</body>
</html>