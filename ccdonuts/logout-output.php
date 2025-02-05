<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.C.Donuts|ログアウト</title>
    <link rel="stylesheet" href="./common/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>
   
   
   <?php require 'header.php'; ?>
    <?php require 'greeting.php';?>

   <div class=flexContainer> 
    <div class="centerTxt">
    <?php
if (isset($_SESSION['customers'])) {
	unset($_SESSION['customers']);
	echo 'ログアウトしました。';
} else {
	echo 'すでにログアウトしています。';
}
?>
</div>
</div>

<?php require 'footer.php'; ?>