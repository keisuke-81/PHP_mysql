<?php
include('functions.php');
session_start();
check_session_id();

$user_id = $_GET['user_id'];
$like_id = $_GET['like_id'];
//var_dump($_GET);
//exit;
$pdo = connect_to_db();


//$sql = 'INSERT INTO like_table (id, user_id, shops_id, created_at) VALUES (NULL, :user_id, :shops_id, sysdate())';
$sql = 'SELECT COUNT(*) FROM like_table WHERE user_id=:user_id AND like_id=:like_id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
$stmt->bindValue(':like_id', $like_id, PDO::PARAM_STR);
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
  $sql = 'DELETE FROM like_table WHERE user_id=:user_id AND like_id=:like_id';
} else {
  // いいねされていない状態
  $sql = 'INSERT INTO like_table (id, user_id, like_id, created_at) VALUES (NULL, :user_id, :like_id, sysdate())';
}
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
$stmt->bindValue(':like_id', $like_id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}


// まずはデータ確認
//var_dump($like_count);
//exit();
header("Location:review_topik.php?id=$like_id");
exit();