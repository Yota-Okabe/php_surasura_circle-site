<?php
    include 'includes/login.php';
    $name = $_POST['name'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    $pass = $_POST['pass'];

    // var_dump($name);
    // var_dump($title);
    // var_dump($body);
    // var_dump($pass);

    if ($name == '' || $body == '') {
        header("Location:bbs.php");
        exit();
    }

    if (!preg_match("/^[0-9]{4}$/", $pass)) {
        exit();
    }

    setcookie('name', $name, time() + 40*60*24*30);


    $dsn = 'mysql:dbname=tennis-circle;host=localhost';
    $user = 'root';
    $password='';

    try {
        $db = new PDO($dsn, $user, $password);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $stmt = $db->prepare("
            INSERT INTO bbs (name, title, body, date, pass)
            VALUES (:name, :title, :body, now(), :pass)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':body', $body, PDO::PARAM_STR);
        $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
        $stmt->execute();
        header('Location:bbs.php');
        exit();
    } catch (PDOException $e) {
        exit('エラー:' . $e->getMessage());
    }

?>