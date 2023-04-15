<?php

    $fp = fopen("write.txt", "w");
    if ($fp) {
        fwrite($fp, "テスト");
        echo '書き込みました';
    }else {
        echo 'エラー';
    }
    fclose($fp);

?>