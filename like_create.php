<?php
include('functions.php');
session_start();
check_session_id();

$user_id = $_GET['user_id'];
$shops_id = $_GET['shops_id'];
//var_dump($shops_id);
//exit;
$pdo = connect_to_db();

$sql = 'SELECT COUNT(*) FROM like_table WHERE user_id=:user_id AND shops_id=:shops_id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
$stmt->bindValue(':shops_id', $shops_id, PDO::PARAM_STR);
//var_dump($stmt);
//exit;
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}
$like_count = $stmt->fetchColumn();

//var_dump($like_count);します---------------------------------
//var_dump($like_count);
//exit;

if ($like_count >0) {
  // いいねされている状態
  $sql = 'DELETE FROM like_table WHERE user_id=:user_id AND shops_id=:shops_id';
} else {
  // いいねされていない状態
  $sql = 'INSERT INTO like_table (id, user_id, shops_id, created_at) VALUES (NULL, :user_id, :shops_id, sysdate())';
}
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
$stmt->bindValue(':shops_id', $shops_id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}


// まずはデータ確認
//var_dump($like_count);
// exit();
header("Location:review_topik.php?id=$shops_id'");
exit();