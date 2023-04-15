<?php 

    $num = 10;
    
    $dsn = 'mysql:dbname=tennis-circle;host=localhost';
    $user = 'root';
    $password='';

    $page = 1;
    if (isset($_GET['page']) && $_GET['page'] > 1) {
        $page = intval($_GET['page']);
    }

    try {
        $db = new PDO($dsn, $user, $password);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $stmt = $db->prepare("SELECT * FROM bbs ORDER BY date DESC LIMIT :page, :num");
        $page = ($page-1) * $num;
        $stmt->bindParam(':page', $page, PDO::PARAM_INT);
        $stmt->bindParam(':num', $num, PDO::PARAM_INT);
        $stmt->execute();
    } catch (PDOException $e) {
        exit("エラー：" . $e->getMessage());
    }
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板ト</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php include('navbar.php'); ?>
    <main role="main" class="container">
    <!-- <main role="main" class="container" style="padding:60px 15px"> -->
        <div>
            <h3>みんなの掲示板</h3>
            <form action="write.php" method="post">
                <div class="form-group">
                    <label>タイトル</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>名前</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <textarea name="body" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>削除パスワード（数字4桁）</label>
                    <input type="text" name="pass" class="form-control">
                </div>
                <input type="submit" value="投稿" class="btn btn-primary">
            </form>
            <hr>

            <?php while($row = $stmt->fetch()): ?>
                <div class="card">
                    <div class="card-header">
                        <?php echo $row['title']? $row['title']: '（無題）'; ?>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo nl2br($row['body']) ?></p>
                    </div>
                    <div class="card-footer">
                        <form action="delete.php" method="post" class="form-inline">
                        <?php echo $row['name'] ?>
                        (<?php echo $row['date'] ?>)
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <input type="text" name="pass" placeholder="削除パスワード" class="form-control">
                            <input type="submit" value="削除" class="btn btn-secondary">
                        </form>
                    </div>
                </div>
                <hr>
            <?php endwhile; ?>

            <?php
                try {
                    $stmt = $db->prepare("SELECT COUNT(*) FROM bbs");
                    $stmt->execute();
                } catch (PDOException $e) {
                    exit("エラー" . $e->getMessage());
                }

                $comments = $stmt->fetchColumn();
                $max_page = ceil($comments / $num);
                if ($max_page >= 1) {
                    echo '<nav><ul class="pagination">';
                    for ($i=1; $i<=$max_page; $i++) { 
                        echo '<li class="page-item"><a class="page-link" href="bbs.php?page='.$i.'">'.$i.'</a></li>';
                    }
                    echo '</ul></nav>';
                }
            ?>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>