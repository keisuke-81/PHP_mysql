<?php
// データ受け取り
$id = $_GET['id'];
//var_dump($id);
include('functions.php');
$pdo = connect_to_db();


// DB接続
$sql = 'DELETE FROM shop_no WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);


// SQL実行
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

 header("Location:review_input.php");
// exit();