<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.C.Donuts|商品詳細</title>
    <link rel="stylesheet" href="./common/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>


    <?php require 'header.php';?>

    <?php
$pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');


$sql = "SELECT * FROM products";
$stmt = $pdo->prepare($sql);

// クエリ実行
$stmt->execute();

// 結果を取得（全商品）
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);


if (count($products) >= 2) {
    $product = $products[0]; 

    // 商品情報があれば変数に代入
    $productsName = $product['name'];
    $productsIntroduction = $product['introduction'];
    $productsPrice = $product['price'];
} else {
    echo "商品が見つかりませんでした";
}
?>



<div class="detailContainer">
    <img src="./images/ccDonut.png">
    
    <div class="txtContainer">
        <h2><?php echo $productsName; ?></h2>
        <div class="borderLine"></div>

        <div class="expContainer">
            <p><?php echo $productsIntroduction; ?></p>
            <div class="expBorderLine"></div>
        </div>   

            <div>
                <span>税込  ￥<?php echo  $productsPrice; ?></span>
            </div>

        <div class="nmBox">
            <input type="number" id="quantity" name="quantity" min="1" max="100">個
            <button class="cartButton">カートに入れる</button>
            <button class="bookmarkButton"></button>
        </div>
    </div>     
</div>

<?php require 'footer.php'; ?>