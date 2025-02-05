<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.C.Donuts|ログイン</title>
    <link rel="stylesheet" href="./common/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>


    <?php require 'header.php';?>
    <form action="login-output.php" method="POST">
 
    <div class="userGreeting">
        <p>TOP＞ログイン</p>
    </div>


    <?php require 'greeting.php';?>

    <div class="midasiBox">
        <h2 class="productList">ログイン</h2>
    </div>

 <div class= borderBox> 
    <div class="email">
        <p>メールアドレス</p>
        <input type="email" name="mail" id="mail" placeholder="123@gmail.com">
    </div>

    <div class="password">
        <p>パスワード</p>
        <input type="password" name="password" id="password" placeholder="123456abcd">
    </div>

   
    <input type="submit" value="ログインする">

</div> 
<div class=registBox>
    <a href='registration.php'>会員登録はこちら</a>
</div>

<div class=registBox>
    <a href='logout.php'>ログアウトはこちら</a>
</div>

</form>
<?php require 'footer.php'; ?>
