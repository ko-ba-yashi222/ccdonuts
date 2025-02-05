<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.C.Donuts</title>
    <link rel="stylesheet" href="./common/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
        <?php require 'header.php';?>
    <main>
        <?php require 'greeting.php';?>

        <img src="./images/pcHeroImg.png" class="heroImg">

        <!-- お知らせコンテンツ -->
        <div class="imgContainer">
            <div class="newsImg">
                <div class="relative">
                    <img src="./images/NewItem.png"><p class="txtAbsolute">サマーシトラス</p> <p class="newItem">新商品</p></div>
                <div class="relative">
                    <img src="./images/donutLife.png"><p class="txtAbsolute2">ドーナツのある生活</p></div>
            </div>

        
            
                <div class="bannerImg">
                    <div class="relative">
                        <a href="products.php"> 
                            <img src="./images/banner.png"><p class="txtAbsolute3">商品一覧</p>
                        </a>
                    </div>
                </div>
        </div>


    <!--お店紹介コンテンツ  -->
        <div class="philosophy">
            <p class="philoTxt">Philosophy</p>
            <p class="ourFaith">私たちの信念</p>
            <p class="creatingConnections">"Creating Connections"</p>
            <p class="donutConnect">「ドーナツでつながる」</p>


        </div>    


    <!-- ランキングコンテンツ -->
        <div class="favorite">
            <h2>人気ランキング</h2>
        </div>

    <div class="ranking">
        <div class="gridContainer">
            <div class="gridItem1">
                <div class="n1"><p>1</p></div>
                <a href="details.php">
                    <img src="./images/ccDonut.png">
                </a>
                    <p class="itemExp">CCドーナツ 当店オリジナル<br>（5個入り）</p>
                    <p class="itemPrice">税込  ￥1,500</p>
                    <a href="cart.html">
                        <button class="cartButton">カートに入れる</button>
                    </a>
            </div>

            <div class="gridItem2">
                <div class="n2"><p>2</p></div>
                <img src="./images/fruitDonuts12.png">
                <p class="itemExp">フルーツドーナツセット（12個入り）</p>
                <p class="itemPrice">税込  ￥3,500</p>
                <button class="cartButton">カートに入れる</button>
            </div>

            <div class="gridItem3">
                <div class="n3"><p>3</p></div>
                <img src="./images/fruitDonuts14.png"">
                <p class="itemExp">フルーツドーナツセット（14個入り）</p>
                <p class="itemPrice">税込  ￥4,000</p>
                <button class="cartButton">カートに入れる</button>
            </div>

            <div class="gridItem4">
                <div class="n4"><p>4</p></div>
                <img src="./images/chocolateDelight.png">
                <p class="itemExp">チョコレートデライト（5個入り）</p>
                <p class="itemPrice">税込  ￥1,600</p>
                <button class="cartButton">カートに入れる</button>
            </div>

            <div class="gridItem5">
                <div class="n5"><p>5</p></div>
                <img src="./images/bestSelect.png">
                <p class="itemExp">ベストセレクションボックス（4個入り）</p>
                <p class="itemPrice">税込  ￥1,200</p>
                <button class="cartButton">カートに入れる</button>
            </div>

            <div class="gridItem6">
                <div class="n6"><p>6</p></div>
                <img src="./images/strawberryCrush.png">
                <p class="itemExp">ストロベリークラッシュ（5個入り）</p>
                <p class="itemPrice">税込  ￥1,800</p>
                <button class="cartButton">カートに入れる</button>
            </div>
        </div>
    </div>


    </main>

<?php require 'footer.php'; ?>
