<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.C.Donuts|ログイン完了</title>
    <link rel="stylesheet" href="./common/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>

    <?php session_start(); ?>
    <?php require 'header.php'; ?>
    <?php
    
    $pdo = new PDO('mysql:host=localhost; dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
    
    // アドレスとパスワードの受け取り
    $sql = $pdo->prepare('SELECT * FROM customers WHERE mail=? AND password=?');
    $sql->execute([$_POST['mail'], $_POST['password']]);


    
    $userFound = false; // ユーザーが見つかったかどうかを追跡
    
    foreach ($sql as $row) {
        $_SESSION['customers'] = [
            'name' => $row['name'],
            'mail' => $row['mail'],
            'password' => $row['password']
        ];
        $userFound = true; // ユーザーが見つかったのでフラグを立てる
    }
    ?>
 

    <div class="userGreeting">
        <p>TOP＞ログイン＞ログイン完了</p>
        <?php
    if ($userFound) {
        echo 'いらっしゃいませ、', $_SESSION['customers']['name'], '　様';
    } else {
        echo 'ログイン名またはパスワードが違います。';
    }
    ?>
    </div>

    <?php if ($userFound): ?>
    <div class="midasiBox2">
        <h2 class="productList">ログイン完了</h2>
    </div>



    <div class="loginCompFrame">
        <p>ログインが完了しました</p>
        <p>引き続きお楽しみ下さい。</p>
        <a href=index.php>TOPへ戻る</a>
    </div>
        <?php endif; ?>

</body>


    <?php require 'footer.php'; ?>