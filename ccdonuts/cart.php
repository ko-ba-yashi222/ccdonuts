<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.C.Donuts|カート</title>
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



    <div class="userGreeting">
        <p>TOP＞カート</p>
    </div>


    <?php require 'greeting.php';?>

    <div class="cartContainer">
        
        <div class="purchaseBox">
            <p>現在　商品2点</p>
            <p>ご注文小計：税込 ¥5,000</p>
            <button class="cartButton">購入確認へ進む</button>
        </div>

        <div class="item1">
            <img src="./images/ccDonut.png">
            <div class="carttextBox">
                    <p>CCドーナツ 当店オリジナル（5個入り）</p>
                    <div class="borderLine"></div>

                    <div class="kakakuBox">
                        <p>税込  ￥1,500</p>
                        <p>数量 <input type="number" id="quantity" name="quantity" min="1" max="100">個</p>
                    </div>

                    <div class="buttonEnd">
                         <button class="recalcButton">再計算</button>
                    </div>

                    
                      <button class="clickDelete">削除する</p>  
            </div> 
            
            
      
            


        </div>        

        <div class="item1">
            <img src="./images/fruitDonuts12.png">
            <div class="carttextBox">
                    <p>フルーツドーナツセット（12個入り）</p>
                    <div class="borderLine"></div>

                    <div class="kakakuBox">
                        <p>税込  ￥3,500</p>
                        <p>数量 <input type="number" id="quantity" name="quantity" min="1" max="100">個</p>
                    </div>

                    <div class="buttonEnd">
                         <button class="recalcButton">再計算</button>
                    </div>

                    
                      <button class="clickDelete">削除する</p>  
            </div>
        </div>    
        
        
        <div class="purchaseBox">
            <p>現在　商品2点</p>
            <p>ご注文小計：税込 ¥5,000</p>
            <button class="cartButton">購入確認へ進む</button>

        </div>

        <button class="cartButton">買い物を続ける</button>
        </div>









    </div>

    <?php require 'footer.php'; ?>