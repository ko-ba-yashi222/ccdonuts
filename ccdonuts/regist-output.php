<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.C.Donuts|会員登録入力確認</title>
    <link rel="stylesheet" href="./common/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<?php
// セッション開始
session_start();
?>

<?php require 'header.php'; ?>

<?php
// セッションからデータを取得
$name = $furigana = $postcode_a = $postcode_b = $address = $mail = $password = $mailConfirm = ''; 

if (isset($_SESSION['customers'])) {
    $name = $_SESSION['customers']['name'];
    $furigana = $_SESSION['customers']['furigana'];
    $postcode_a = $_SESSION['customers']['postcode_a'];
    $postcode_b = $_SESSION['customers']['postcode_b'];
    $address = $_SESSION['customers']['address'];
    $mail = $_SESSION['customers']['mail'];
    $password = $_SESSION['customers']['password'];
    $mailConfirm = $_SESSION['customers']['mailConfirm'];
} else {
    // セッションにデータがない場合
    echo "セッションデータがありません。";
    exit;
}?>



<form action="./app/regist-output2.php" method="post">
    <div class="midasiBox2">
        <h2 class="productList">登録確認</h2>
    </div>

<?php

    echo "<div class='kakuninBox'>";

    echo "<div class='nameBox'>";
    echo "お名前<br>";
   
    echo "<div class='sideBorder'><input type='text' name='name' value='" . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "' readonly /></div><br>";
    echo "</div>";

    echo "<div class='furiganaBox'>";
    echo "フリガナ<br>";
    echo "<div class='sideBorder'><input type='text' name='furigana' value='" . htmlspecialchars($furigana, ENT_QUOTES, 'UTF-8') . "' /></div><br>";
    echo "</div>";

    echo "<div class='postcodeBox'>";
    echo "郵便番号<br>";
    echo "<div class='sideBorder'>
    <input type='text' name='postcode_a' value='" . htmlspecialchars($postcode_a, ENT_QUOTES, 'UTF-8') . "' /> - 
    <input type='text' name='postcode_b' value='" . htmlspecialchars($postcode_b, ENT_QUOTES, 'UTF-8') . "' />
  </div><br>";
    echo "</div>";

    echo "<div class='addressBox'>";
    echo "ご住所<br>";
    echo "<div class='sideBorder'><input type='text' name='address' value='" . htmlspecialchars($address, ENT_QUOTES, 'UTF-8') . "' /></div><br>";
    echo "</div>";

    echo "<div class='mailBox'>";
    echo "メールアドレス<br>";
    echo "<div class='sideBorder'><input type='email' name='mail' value='" . htmlspecialchars($mail, ENT_QUOTES, 'UTF-8') . "' /></div><br>";
    echo "</div>";

    echo "<div class='passwordBox'>";
    echo "パスワード<br>";
    echo "<div class='sideBorder'><input type='password' name='password' value='" . htmlspecialchars($password, ENT_QUOTES, 'UTF-8') . "' /></div><br>";
    echo "</div>";

    echo "</div>";
    ?>

    <input type="submit" value="登録する">
</form>

<?php require 'footer.php'; ?>
</body>
</html>