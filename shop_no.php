<?php
// $id =$_GET["genre"];
// echo "GET:".$id;

$dbn ='mysql:dbname=review_base;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}


// SQL作成&実行
// todo_read.php

$sql = 'SELECT * FROM shop_no ORDER BY time DESC'; 
$stmt = $pdo->prepare($sql);
//$stmt->bindValue($id,1,PDO::PARAM_STR);

$status = $stmt->execute();

try {//detaを取り出す
  $status = $stmt->execute();
  
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}
// SQL実行の処理

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


$output = "";
foreach ($result as $record) {  //HTMLの生成
  $output .= "
  
    <thead>
    <div class='row justify-content-center'>
      
      <div class=col-1>{$record['name']}</div>
      <div class=col-1>{$record['genre']}</div>
      <div class=col-2>{$record['shop_name']}</div>
      <div class=col-2>{$record['text']}</div>
      <div class=col-2>{$record['time']}</div>
      <div class=col-1>
        <a href='user_edit.php?id={$record["id"]}'>edit</a>
      </div>
      <div class=col-1>
        <a href='review_delete.php?id={$record['id']}' onClick='confirm('リンク先は...');' >delete</a>
      </div>
      
    </div>
    <br><br>
    </thead>
    </tr>
  ";
}
?>
