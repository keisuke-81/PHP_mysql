<?php
//GETでIDを取得
include("functions.php");
session_start();
check_session_id();
$id =$_GET["id"];
echo "GET:".$id;

$user_id=$_SESSION['u_id'];
echo ($_SESSION['u_id']);
//var_dump($_SESSION['u_id']) ;
//exit();
$day= date("Y年m月d日");
//DB接続
$dbn ='mysql:dbname=review_base;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

//select
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
//var_dump($row);
//echo $row['img'];
$sql = 'SELECT * FROM shops LEFT OUTER JOIN (SELECT like_id, COUNT(id) AS like_count FROM like_table GROUP BY like_id) AS result_table ON shops.shops_id = result_table.like_id WHERE  shops_id=:id';
//$stmt->bindValue(':shop_name', $shop_name, PDO::PARAM_STR);
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}
//$user_id = $_SESSION['user_id'];
$result = $stmt->fetch(PDO::FETCH_ASSOC);
//var_dump($result);
//exit();
$output2=$result["like_count"];
// $output2 = "";
// foreach ($result as $record) {
//   $output2 .= "
   
      
//       {$record["like_count"]}
      
      
       
      
    
//   ";

// }

//var_dump(＄output2);
//exit();

?>
<?php

?>
<?php
$dbn ='mysql:dbname=review_base;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}
$sql = 'SELECT * FROM shop_no WHERE shops_no = :id ORDER BY time DESC LIMIT 7 ';
// var_dump($sql);
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR); 
//echo "$id";
try {//detaを取り出す
  $status = $stmt->execute();
  // var_dump();
  // echo
  // exit();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}
// SQL実行の処理

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($result);
$output = "";
foreach ($result as $record) {  //HTMLの生成
  $output .= "
    <tr> 
      <td>{$record["name"]}</td>
      <br>
      <td>{$record["text"]}</td>
      <br>
      <td>{$record["time"]}</td>
      <br>
      <br>
    </tr>
  ";
  
};
// var_dump('name');
// ---------------------------------------------------
// foreach ($result as $record) {  //HTMLの生成
//   $output .= "
//     <tr> 
//       <td>{$record[’name’]}</td>
//       <td>{$record[’text’]}</td>
//     </tr>
//   ";
  
// };
// ------------------------------------------------------


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="row top_h">
    <h1 class="col-5 display-1">foods-LINKS</h1>
    <ul class="col-5 nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
    </ul>
  </div>
    <div class="wrapper2">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-6 white_back font2"> 
                    <div class="margin_b">
                      ようこそ <?="{$_SESSION['username']}({$_SESSION['is_admin']})"?> さん
                      <p class="col pruducts-thumb "><img src="img2/<?=$row['img']?>" width="300"></p>
                      
                        <h3>店舗名:<?=$row["shop_name"]?></h3>
                        <div class=""><img src="img/iine.png" alt="" width="50"><a href='like_create.php?user_id=<?="{$_SESSION['u_id']}"?>&like_id=<?=$id?>'>いいね！</a></div>
                        <td>いいね！回数</td>  <?=$output2?>
                        <div>(紹介してくれた人)
                        <br>  
                        <?=$row["reviewer_name"]?></div>
                        <div>(紹介文)
                        <br>
                        <?=$row["word"]?></div>
                        <br>
                        <div>(TEL)&nbsp;&nbsp;<?=$row["tel"]?></div>
                        <div>(URL)&nbsp;&nbsp;<?=$row["url"]?></div>
                        <div>(住所)&nbsp;&nbsp;<?=$row["address"]?></div>
                    </div>
                    <form action="sql_data.php?id=<?=$id?>" method="POST">
                    <fieldset>
                      <legend class="font-red">あなたの口コミ募集中！</legend>
                      <div class="disno">
                        <label for="name">店舗ナンバー</label>

                        <input id="name" type="text" name="idn" value="<?=$id?>" readonly>
                      </div>
                      <div>
                        YOUR NAME: <input type="name" name="name"  value='<?="{$_SESSION['username']}"?>'>
                      </div>
                      <div>
                        店舗の名前は <input type="name" name="shop_name" value="<?=$row["shop_name"]?>">
                      </div>
                      <div>
                        店舗ジャンル<input type="name" name="genre" value="<?=$row["genre"]?>">
                      </div>
                      <div>
                           <textarea name="text" id="" cols="40" rows="5"></textarea>
                      </div>
                      <div>
                         <label for="name">入力日:</label>
                        <input id="" type="text" name="day" value="<?=$day?>" readonly>
                      </div>
                      <div>
                       <button>入力する</button>
                      </div>
                    </fieldset>
                        
                        <a href="#" onclick="history.back(); return false;">前のページへ戻る</a>
                        <br>
                        <a href='review_input.php'>トップ画面へ</a>
                      <!-- </form>
                      <img src="<?=$row['img']?>"> -->
                </div>
                <div class="col-5 white_back font2">
                  <br>
                  <h2>(みんなの声)</h2>
                  <br>
                  <?=$output?></div>
                  <a href='review_topik.php'>ページトップへ</a>
            </div>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
 //<a href='update.php'><button>入力する</button></a>
?>