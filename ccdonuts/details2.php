<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.C.Donuts|商品詳細2</title>
    <link rel="stylesheet" href="./common/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>


<?php require 'header.php';?>
<div class="detailContainer">
    <img src="./images/fruitDonuts12.png">
    
    <div class="txtContainer">
        <h2>フルーツドーナツセット（12個入り）</h2>
        <div class="borderLine"></div>

        <div class="expContainer">
            <p>新鮮で豊かなフルーツをたっぷりと使用した贅沢な12個入りセットです。このセットには、季節の最高のフルーツを厳選し、ドーナツに取り入れました。口に入れた瞬間にフルーツの風味と生地のハーモニーが広がります。色鮮やかな見た目も魅力の一つです。</p>
            <div class="expBorderLine"></div>
        </div>   

            <div>
                <span>税込  ￥3,500</span>
            </div>

        <div class="nmBox">
            <input type="number" id="quantity" name="quantity" min="1" max="100">個
            <button class="cartButton">カートに入れる</button>
            <button class="bookmarkButton"></button>
        </div>
    </div>     
</div>

<?php require 'footer.php'; ?>