<?php 

    // $page = $_GET['page'];
    // echo 'リクエストされたページは' . $page . 'です';

    foreach ($_GET as $key => $value) {
        echo 'キー:' . $key . '<br>';
        echo '値:' . $value . '<br><br>';
    }

?>