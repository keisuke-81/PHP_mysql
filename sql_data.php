<?php
$id =$_GET['id'];
echo "GET:".$id;

if (
  !isset($_POST['idn']) || $_POST['idn']=='' ||
  !isset($_POST['name']) || $_POST['name']=='' ||
  !isset($_POST['text']) || $_POST['text']==''
) {
  exit('ParamError');
}

$shop_no = $_POST['idn'];
$name = $_POST['name'];
$text = $_POST['text'];

$dbn ='mysql:dbname=review_base;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

// 「dbError:...」が表示されたらdb接続でエラーが発生していることがわかる．
$sql = 'INSERT INTO shop_no (id,shops_no, name, text, time) VALUES (NULL, :idn,:name, :text, now())';

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':idn', $shop_no, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':text', $text, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}
header("Location:review_topik.php?id=$id
");
exit();

