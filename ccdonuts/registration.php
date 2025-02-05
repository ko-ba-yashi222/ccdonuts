<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.C.Donuts|会員登録</title>
    <link rel="stylesheet" href="./common/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>


<?php require 'header.php'; ?>
<div class="userGreeting">
    <p>TOP＞ログイン＞会員登録</p>
</div>

<?php require 'greeting.php'; ?>

<?php
$name = $furigana = $postcode_a = $postcode_b = $address = $mail = $password = $mailConfirm = ''; // $mailConfirmも初期化
$error_message = ''; // エラーメッセージを初期化
$success_message = ''; // 成功メッセージを初期化



// $_SESSION['customers'] からデータを取得
if (isset($_SESSION['customers'])) {
    $name = $_SESSION['customers']['name'];
    $furigana = $_SESSION['customers']['furigana'];
    $postcode_a = $_SESSION['customers']['postcode_a'];
    $postcode_b = $_SESSION['customers']['postcode_b'];
    $address = $_SESSION['customers']['address'];
    $mail = $_SESSION['customers']['mail'];
    $password = $_SESSION['customers']['password'];
    $mailConfirm = $_SESSION['customers']['mailConfirm'] ?? ''; // mailConfirmも追加
}

// POSTでフォーム送信された場合の処理
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 入力された値を取得
    $mail = $_POST['mail'];
    $mailConfirm = $_POST['mailConfirm']; // $_POST['mailConfirm']を取得
    $mailaddress = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    
    $password =$_POST['password'];
    $passwordPattern = '/^[a-zA-Z0-9]{8,20}$/';

        // パスワードが8文字以上、20文字以内、かつ半角英数字であるかをチェック
        if (!preg_match($passwordPattern, $password)) {
            $error_messages[] = "パスワードは半角英数字で8文字以上20文字以内で入力してください。";
        }


    // メールアドレスが正しい形式かチェック
    if (!preg_match($mailaddress, $mail)) {
        $error_message = "メールアドレスの形式が正しくありません。";
    } elseif ($mail != $mailConfirm) {
        $error_message = "メールアドレスが一致しません。";
    } else {
        // 成功メッセージ
        $success_message = "メールアドレスが正しい形式で一致しました。";
    }

    // エラーがなければセッションにデータを保存
    if (empty($error_message)) {
        $_SESSION['customers'] = $_POST;
        // リダイレクト処理（バリデーションが成功した場合のみ）
        header("Location: regist-output.php");
        exit; // リダイレクト後にスクリプトの実行を停止
    }
}


?>



<div class="midasiBox">
    <h2 class="productList">会員登録</h2>
</div>

<form action="" method="POST">
    <div class="registArea">
        <div class="registName">
            <p>お名前<span>（必須）</span></p>
            <input type="text" name="name" placeholder="ドーナツ太郎" value="<?php echo htmlspecialchars($name); ?>" required>
        </div>

        <div class="registName">
            <p>お名前(フリガナ)<span>（必須）</span></p>
            <input type="text" name="furigana" placeholder="ドーナツタロウ" value="<?php echo htmlspecialchars($furigana); ?>" required>
        </div>

        <div class="postCode">
            <p>郵便番号<span>（必須）</span></p>
            <input type="text" name="postcode_a" id="postCode1" placeholder="123" value="<?php echo htmlspecialchars($postcode_a); ?>" required>
            <input type="text" name="postcode_b" id="postCode2" placeholder="4567" value="<?php echo htmlspecialchars($postcode_b); ?>" required>
        </div>

        <div class="address">
            <p>住所<span>（必須）</span></p>
            <input type="text" name="address" placeholder="千葉県〇〇市中央1-1-1" value="<?php echo htmlspecialchars($address); ?>" required>
        </div>

        <div class="email">
            <p>メールアドレス<span>（必須）</span></p>
            <input type="email" name="mail" placeholder="123@gmail.com" value="<?php echo htmlspecialchars($mail); ?>" required>
        </div>

        <div class="email">
            <p>メールアドレス確認用<span>（必須）</span></p>
            <input type="email" name="mailConfirm" placeholder="123@gmail.com" value="<?php echo htmlspecialchars($mailConfirm); ?>" required>
        </div>

        <!-- エラーメッセージの表示 -->
        <?php if ($error_message): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php elseif ($success_message): ?>
            <p style="color: green;"><?php echo $success_message; ?></p>
        <?php endif; ?>

        <div class="password">
            <p>パスワード<span>（必須）</span></p>
            <span>半角英数字8文字以上20文字以内で入力してください。※記号の使用はできません</span>
            <input type="password" name="password" placeholder="123456abcd" value="<?php echo htmlspecialchars($password); ?>" required>
        </div>

        <input type="submit" value="入力確認する">
    </div>
</form>

<?php require 'footer.php'; ?>