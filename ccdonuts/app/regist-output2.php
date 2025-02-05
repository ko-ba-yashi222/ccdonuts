<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.C.Donuts|会員登録完了</title>
    <link rel="stylesheet" href="../common/reset.css">
    <link rel="stylesheet" href="../styles/style.css">
</head>


<?php 
session_start(); 
?>
<?php require '../header.php'; ?>

<?php 
$pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // POSTデータが送信されているか確認
    if (isset($_POST['name']) && isset($_POST['furigana']) && isset($_POST['postcode_a']) && isset($_POST['postcode_b']) && isset($_POST['address']) && isset($_POST['mail']) && isset($_POST['password'])) {
        // すでにユーザーが登録されているかを確認
        $sql = $pdo->prepare('SELECT * FROM customers WHERE mail = ?');
        $sql->execute([$_POST['mail']]);
        $existingUser = $sql->fetch();  // すでに登録されているかをチェック

        if ($existingUser) {
            // すでにユーザーが存在する場合
            echo "このメールアドレスはすでに使用されています。";
        } else {
            // 新規登録の場合
            $sql = $pdo->prepare('INSERT INTO customers (name, furigana, postcode_a, postcode_b, address, mail, password) VALUES (?, ?, ?, ?, ?, ?, ?)');
            $result = $sql->execute([
                $_POST['name'], 
                $_POST['furigana'], 
                $_POST['postcode_a'], 
                $_POST['postcode_b'], 
                $_POST['address'], 
                $_POST['mail'], 
                $_POST['password']
            ]);

            // 登録処理が成功した場合のメッセージ
            if ($result) {
                echo "<div class='midasiBox2'>";
                echo "<h2 class='productList'>登録確認</h2>";
                echo "</div>";
            
                echo "<div class='loginCompFrame'>会員登録が完了しました。<br>ログインページへお進みください。</div>";
            } else {
                echo "登録に失敗しました。もう一度お試しください。";
            }
        }
    } else {
        echo "必要な情報が不足しています。もう一度確認してください。";
    }
} else {
    echo "無効なアクセスです。";
}
?>
<?php require '../footer.php'; ?>
</body>
</html>