<?php
include('functions.php');
$id = $_GET['id'];
echo "GET:".$id;
$pdo = connect_to_db();


$sql = 'SELECT * FROM shops WHERE shops_id=:id';
$stmt = $pdo->prepare($sql);

// バインド変数を設定！！！ここで何を送るかを記述しているので大事なところ！！！
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //数字の場合はINT
// $stmt->bindValue(':shop_name', $shop_name, PDO::PARAM_STR);//数字の場合はINT
// $stmt->bindValue(':tel', $tel, PDO::PARAM_STR);//数字の場合はINT
// $stmt->bindValue(':url', $url, PDO::PARAM_STR);//数字の場合はINT
// $stmt->bindValue(':address', $address, PDO::PARAM_STR);//数字の場合はINT
// $stmt->bindValue(':word', $word, PDO::PARAM_STR);//数字の場合はINT
//$stmt = $pdo->prepare($sql);

$status = $stmt->execute();


//表示させるために
$view = "";
if($status == false){
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
    $row = $stmt->fetch();

}

?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>おすすめのお店を教えてください</title>
</head>
<body>
  <form action="read_edit_create.php?id=<?=$id?>" method="POST">
    <fieldset>
      <legend>店舗修正</legend>
      <a href="review_read.php">一覧画面</a>
      <div>
        投稿者の名前: <input type="text" name="reviewer_name" value="<?= $row['reviewer_name'] ?>">
      </div>
      <div>
        お店の名前: <input type="text" name="shop_name" value="<?= $row['shop_name'] ?>">
      </div>
      <div>
        tel: <input type="text" name="tel" value="<?= $row['tel'] ?>">
      </div>
      <div>
        url: <input type="text" name="url" value="<?= $row['url'] ?>">
      </div>
      <div>
        住所: <input type="text" name="address" value="<?= $row['address'] ?>">
      </div>
      <div>
        ジャンル: <input type="text" name="genre" value="<?= $row['genre'] ?>">
      </div>
      <div>
        口コミ: <input type="text" name="word" value="<?= $row['word'] ?>">
      </div>
      <div>
      <input type="hidden" name="id" value="<?= $row['shops_id'] ?>">
    </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>
