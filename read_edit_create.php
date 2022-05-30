<?php
// 入力項目のチェック
if (
    
  !isset($_POST['reviewer_name']) || $_POST['reviewer_name'] == '' ||
  !isset($_POST['shop_name']) || $_POST['shop_name'] == '' ||
  !isset($_POST['tel']) || $_POST['tel'] == '' ||
  !isset($_POST['url']) || $_POST['url'] == '' ||
  !isset($_POST['address']) || $_POST['address'] == '' ||
  !isset($_POST['genre']) || $_POST['genre'] == '' ||
  !isset($_POST['word']) || $_POST['word'] == '' 
) {
  exit('paramError');
}

$reviewer_name = $_POST['reviewer_name'];
$shop_name = $_POST['shop_name'];
$tel = $_POST['tel'];
$url = $_POST['url'];
$address = $_POST['address'];
$genre = $_POST['genre'];
$word = $_POST['word'];
$id = $_POST['id'];


// DB接続
include('functions.php');
$pdo = connect_to_db();

$sql = 'UPDATE shops SET shops_id= NULL ,reviewer_name=:reviewer_name, shop_name=:shop_name,tel=:tel,url=:url,address=:address,genre=:genre,word=:word ,time=now() ,:img WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':reviewer_name', $reviewer_name, PDO::PARAM_STR);
$stmt->bindValue(':shop_name', $shop_name, PDO::PARAM_STR);
$stmt->bindValue(':tel', $tel, PDO::PARAM_INT);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
$stmt->bindValue(':word', $word, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
//var_dump($stmt);

// SQL実行
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

//header('Location:read_edit_input.php');
exit();