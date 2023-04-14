// print_r($_FILES['image']['tmp_name']);
    $file = $_FILES['image']['tmp_name'];
    // print_r($_FILES['image']['error']);
 
    // 画像がアップロードされている場合は、
    // エラーコードは以下のページを参照
    // https://www.php.net/manual/ja/features.file-upload.errors.php
    if ($_FILES['image']['error'] !== 4) {
        $imgPath = './img/'.$_FILES['image']['name'];
        // 画像の保存
        // 第一引数が対象のファイル、第2引数が保存先
        print_r($_FILES['image']['error']);
        move_uploaded_file($file, $imgPath);
    // そうでなければ(画像がアップロードされていない場合)
    } else {
        $imgPath = 'img/default.png';
    }