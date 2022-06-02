<?php
//var_dump($_POST);
//exit();

session_start();
include('functions.php');
// データ受け取り


$username = $_POST['username'];
$password = $_POST['password'];
// DB接続
$pdo = connect_to_db();

// SQL実行
$sql = 'SELECT * FROM users_table WHERE username=:username AND password=:password AND is_delete=0';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}


// ユーザ有無で条件分岐

// $val = $stmt->fetch(PDO::FETCH_ASSOC);
// if (!$val){
//     echo "<p>ログイン情報に誤りがあります</p>";
//     echo "<a href=todo_login.php>ログイン</a>";
//     exit();
// }else{
//     $_SESSION = array();
//     $_SESSION['session_id'] = session_id();
//     $_SESSION['is_admin'] = $val['is_admin'];
//     $_SESSION['username'] = $val['username'];
//     header("Location:todo_read.php");
//     exit();
// }


$val = $stmt->fetch(PDO::FETCH_ASSOC);
//var_dump($val);
if (!$val) {
  echo "<p>ログイン情報に誤りがあります</p>";
  echo "<a href=review_login.php>ログイン</a>";
  exit();
} else {
  $_SESSION = array();
  
  $_SESSION['session_id'] = session_id();
  $_SESSION['u_id']=$val['u_id'];
  $_SESSION['is_admin'] = $val['is_admin'];
  $_SESSION['user_id'] = $val['is_admin'];
  $_SESSION['username'] = $val['username'];
  //header("Location:review_input?id=.php");
  header("Location:review_input.php");
  exit();
}
?>

